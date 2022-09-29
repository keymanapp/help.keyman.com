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
  # Stop and cleanup docker containers using image:keyman-websites
  HELP_CONTAINERS=$(docker ps -a -q --filter ancestor=keyman-websites)
  docker container stop $HELP_CONTAINERS
  docker container rm $HELP_CONTAINERS

  # Cleanup keyman-websites image
  docker rmi keyman-websites

  builder_finish_action success clean
fi

if builder_start_action build; then
  # Download docker image
  docker build -t keyman-websites .

  if [[ $OSTYPE =~ mysys|cygwin ]]; then
    # Windows needs leading slashes for path
    docker run -d -p 8055:80 -v //$(pwd):/var/www/html/ -e S_KEYMAN_COM=localhost:8054 keyman-websites
  else
    docker run -d -p 8055:80 -v $(pwd):/var/www/html/ -e S_KEYMAN_COM=localhost:8054 keyman-websites
  fi

  builder_finish_action success build
fi

if builder_start_action test; then
  # TODO Lint?

  # Check for broken links
  composer check-docker-links
fi
