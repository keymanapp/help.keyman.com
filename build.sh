#!/usr/bin/env bash
#
# Setup help.keyman.com site to run via Docker.
#
set -eu

## START STANDARD BUILD SCRIPT INCLUDE
# adjust relative paths as necessary
THIS_SCRIPT="$(greadlink -f "${BASH_SOURCE[0]}" 2>/dev/null || readlink -f "${BASH_SOURCE[0]}")"
. "$(dirname "$THIS_SCRIPT")/resources/builder.inc.sh"
## END STANDARD BUILD SCRIPT INCLUDE

################################ Main script ################################

builder_describe \
  "Setup help.keyman.com site to run via Docker." \
  configure \
  clean \
  build \
  test \

builder_parse "$@"

# This script runs from its own folder
cd "$REPO_ROOT"

if builder_start_action configure; then
  composer install
  
  builder_finish_action success configure
fi

if builder_start_action clean; then
  # Stop and cleanup docker containers using image:help-keyman-website
  HELP_CONTAINERS=$(docker ps -a -q --filter ancestor=help-keyman-website)
  docker container stop $HELP_CONTAINERS
  docker container rm $HELP_CONTAINERS

  # Cleanup help-keyman-website image
  docker rmi help-keyman-website

  builder_finish_action success clean
fi

if builder_start_action build; then
  # Download docker image
  docker build -t help-keyman-website .

  if [[ $OSTYPE =~ mysys|cygwin ]]; then
    # Windows needs leading slashes for path
    docker run -d -p 8055:80 -v //$(pwd):/var/www/html/ -e S_KEYMAN_COM=localhost:8054 help-keyman-website
  else
    docker run -d -p 8055:80 -v $(pwd):/var/www/html/ -e S_KEYMAN_COM=localhost:8054 help-keyman-website
  fi

  builder_finish_action success build
fi

if builder_start_action test; then

  LINT_STATUS=$(_test_lint)
  echo "_test_lint done with status $LINT_STATUS"
  if [ "${LINT_STATUS}" -ne 0 ]; then
    build_finish_action fail test
  fi  
  #composer lint

  #_test_broken_links
  #composer check-docker-links
  #echo "_test_broken_links done"

  builder_finish_action success test
fi
