#!/usr/bin/env bash
## START STANDARD SITE BUILD SCRIPT INCLUDE
readonly THIS_SCRIPT="$(readlink -f "${BASH_SOURCE[0]}")"
readonly BOOTSTRAP="$(dirname "$THIS_SCRIPT")/resources/bootstrap.inc.sh"
readonly BOOTSTRAP_VERSION=v0.10
[ -f "$BOOTSTRAP" ] && source "$BOOTSTRAP" || source <(curl -fs https://raw.githubusercontent.com/keymanapp/shared-sites/$BOOTSTRAP_VERSION/bootstrap.inc.sh)
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

  # Run unit tests
  docker exec $HELP_CONTAINER_DESC sh -c "vendor/bin/phpunit --testdox"

  # Lint .php files for obvious errors
  docker exec $HELP_CONTAINER_DESC sh -c "find . -name '*.php' | grep -v '/vendor/' | xargs -n 1 -d '\\n' php -l"

  # Check all internal links
  # NOTE: link checker runs on host rather than in docker image
  npx broken-link-checker http://localhost:8055 --ordered --recursive --host-requests 10 -e --filter-level 3
}

builder_run_action configure  bootstrap_configure
builder_run_action clean      clean_docker_container $HELP_IMAGE_NAME $HELP_CONTAINER_NAME
builder_run_action stop       stop_docker_container  $HELP_IMAGE_NAME $HELP_CONTAINER_NAME
builder_run_action build      build_docker_container $HELP_IMAGE_NAME $HELP_CONTAINER_NAME
builder_run_action start      start_docker_container $HELP_IMAGE_NAME $HELP_CONTAINER_NAME $HELP_CONTAINER_DESC $HOST_HELP_KEYMAN_COM $PORT_HELP_KEYMAN_COM

builder_run_action test       test_docker_container
