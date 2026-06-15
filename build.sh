#!/usr/bin/env bash
## START STANDARD SITE BUILD SCRIPT INCLUDE
readonly THIS_SCRIPT="$(readlink -f "${BASH_SOURCE[0]}")"
readonly BOOTSTRAP="$(dirname "$THIS_SCRIPT")/resources/bootstrap.inc.sh"
readonly BOOTSTRAP_VERSION=feat/linkinator-and-central-test-script
if ! [ -f "$BOOTSTRAP" ] || ! source "$BOOTSTRAP"; then
  curl -H "Cache-Control: no-cache" --fail --silent --show-error -w "curl: Finished attempt to download %{url}" "https://raw.githubusercontent.com/keymanapp/shared-sites/$BOOTSTRAP_VERSION/bootstrap.inc.sh" -o "$BOOTSTRAP.tmp" || exit 1
  source "$BOOTSTRAP.tmp"
  rm -f "$BOOTSTRAP.tmp"
fi
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
  "--no-unit-test" \
  "--no-lint" \
  "--no-link-check"

builder_parse "$@"

builder_run_action configure  bootstrap_configure
builder_run_action clean      clean_docker_container $HELP_IMAGE_NAME $HELP_CONTAINER_NAME
builder_run_action stop       stop_docker_container  $HELP_IMAGE_NAME $HELP_CONTAINER_NAME
builder_run_action build      build_docker_container $HELP_IMAGE_NAME $HELP_CONTAINER_NAME $BUILDER_CONFIGURATION
builder_run_action start      start_docker_container $HELP_IMAGE_NAME $HELP_CONTAINER_NAME $HELP_CONTAINER_DESC $HOST_HELP_KEYMAN_COM $PORT_HELP_KEYMAN_COM $BUILDER_CONFIGURATION

builder_run_action test       test_docker_container  $HELP_CONTAINER_DESC $PORT_HELP_KEYMAN_COM /
