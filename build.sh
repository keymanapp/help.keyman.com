#!/usr/bin/env bash
## START STANDARD SITE BUILD SCRIPT INCLUDE
readonly THIS_SCRIPT="$(readlink -f "${BASH_SOURCE[0]}")"
readonly BOOTSTRAP="$(dirname "$THIS_SCRIPT")/resources/bootstrap.inc.sh"
readonly BOOTSTRAP_VERSION=v1.08
[ -f "$BOOTSTRAP" ] && source "$BOOTSTRAP" || source <(curl -H "Cache-Control: no-cache" -fs https://raw.githubusercontent.com/keymanapp/shared-sites/$BOOTSTRAP_VERSION/bootstrap.inc.sh)
## END STANDARD SITE BUILD SCRIPT INCLUDE

# TODO: these should probably all be moved to a common defines script too?
readonly HELP_CONTAINER_NAME=help-keyman-website
readonly HELP_CONTAINER_DESC=help-keyman-com-app
readonly HELP_IMAGE_NAME=help-keyman-website
readonly HOST_HELP_KEYMAN_COM=help.keyman.com.localhost

source _common/keyman-local-ports.inc.sh
source _common/docker.inc.sh

################################ Main script ################################

builder_describe \
  "Setup help.keyman.com site to run via Docker." \
  configure \
  clean \
  build \
  start \
  stop \
  test \

builder_parse "$@"

function test_docker_container() {
  # Note: ci.yml replicates these

  echo "TIER_TEST" > tier.txt
  set +e;
  set +o pipefail;

  builder_echo blue "---- PHP unit tests"
  docker exec $HELP_CONTAINER_DESC sh -c "vendor/bin/phpunit --testdox"

  # Lint .php files for obvious errors
  builder_echo blue "---- Lint PHP files"
  docker exec $HELP_CONTAINER_DESC sh -c "find . -name '*.php' | grep -v '/vendor/' | xargs -n 1 -d '\\n' php -l"

  # Check all internal links
  # NOTE: link checker runs on host rather than in docker image
  builder_echo blue "---- Testing links"
  npx broken-link-checker http://localhost:8055 --recursive --ordered ---host-requests 50 -e --filter-level 3 | tee blc.log
  local BLC_RESULT=${PIPESTATUS[0]}
  echo ----------------------------------------------------------------------
  echo Link check summary
  echo ----------------------------------------------------------------------
  cat blc.log | \
    grep -E "BROKEN|Getting links from" | \
    grep -B 1 "BROKEN";

  builder_echo blue "Done checking links"
  rm tier.txt
  return "${BLC_RESULT}"
}

builder_run_action configure  bootstrap_configure
builder_run_action clean      clean_docker_container $HELP_IMAGE_NAME $HELP_CONTAINER_NAME
builder_run_action stop       stop_docker_container  $HELP_IMAGE_NAME $HELP_CONTAINER_NAME
builder_run_action build      build_docker_container $HELP_IMAGE_NAME $HELP_CONTAINER_NAME $BUILDER_CONFIGURATION
builder_run_action start      start_docker_container $HELP_IMAGE_NAME $HELP_CONTAINER_NAME $HELP_CONTAINER_DESC $HOST_HELP_KEYMAN_COM $PORT_HELP_KEYMAN_COM $BUILDER_CONFIGURATION

builder_run_action test       test_docker_container
