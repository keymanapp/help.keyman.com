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

# Get the pwd
function _get_pwd() {
  PATH_PREFIX=""
  if [[ $OSTYPE =~ msys|cygwin ]]; then
    # Windows needs leading slashes for path
    PATH_PREFIX="//"
  fi
  
  echo $PATH_PREFIX$(pwd)
}

# Given image name, get the Docker Image ID
# "help-keyman-website"; "keyman-composer"
function _get_docker_image_id() {
  echo "$(docker images -q $1)"
}

# Given ancesor, get the Docker Container ID
# "help-keyman-website"; "keyman-composer"
function _get_docker_container_id() {
  echo "$(docker ps -a -q --filter ancestor=$1)"
}

function _stop_docker_container() {
  HELP_CONTAINER=$(_get_docker_container_id "help-keyman-website")
  if [ ! -z "$HELP_CONTAINER" ]; then
    docker container stop $HELP_CONTAINER
  else
    echo "No Docker help container to stop"
  fi

  COMPOSER_CONTAINER=$(_get_docker_container_id "keyman-composer")
  if [ ! -z "$COMPOSER_CONTAINER" ]; then
    docker container stop $COMPOSER_CONTAINER
  else
    echo "No Docker composer container to stop"
  fi
}

builder_describe \
  "Setup help.keyman.com site to run via Docker." \
  configure \
  clean \
  build \
  start \
  stop \
  test \

builder_parse "$@"

# This script runs from its own folder
cd "$REPO_ROOT"

if builder_start_action configure; then
  # Build keyman-composer
  DOCKER_BUILDKIT=1 docker build -f composer.dockerfile -t keyman-composer:latest .

  # Install composer dependencies
  if [ ! -z $(_get_docker_image_id "keyman-composer") ]; then
    docker run --rm   -v $(_get_pwd)/composer.json:/var/www/html/composer.json:ro \
                      -v $(_get_pwd)/composer.lock:/var/www/html/composer.lock:rw -u root \
                      -v $(_get_pwd)/vendor:/var/www/html/vendor:rw \
                      --entrypoint ///usr/bin/composer keyman-composer:latest install
  else
    echo "${COLOR_RED}ERROR: Docker composer container doesn't exist."
    builder_finish_action fail start
  fi
  builder_finish_action success configure
fi

if builder_start_action clean; then
  # Stop and cleanup Docker containers and images used for the site
  _stop_docker_container

  HELP_CONTAINER=$(_get_docker_container_id "help-keyman-website")
  if [ ! -z "$HELP_CONTAINER" ]; then
    docker container rm $HELP_CONTAINER
  else
    echo "No Docker help container to clean"
  fi
    
  HELP_IMAGE=$(_get_docker_image_id "help-keyman-website")
  if [ ! -z "$HELP_IMAGE" ]; then
    docker rmi help-keyman-website
  else 
    echo "No Docker help image to clean"
  fi

  COMPOSER_CONTAINER=$(_get_docker_container_id "keyman-composer")
  if [ ! -z "$COMPOSER_CONTAINER" ]; then
    docker container rm $COMPOSER_CONTAINER
  else
    echo "No Docker composer container to clean"
  fi
    
  COMPOSER_IMAGE=$(_get_docker_image_id "keyman-composer")
  if [ ! -z "$COMPOSER_IMAGE" ]; then
    docker rmi keyman-composer
  else 
    echo "No Docker image to clean"
  fi

  # Cleanup vendor/ folder
  if [ -d "vendor" ]; then
    echo "Cleaning vendor/ folder"
    rm -rf vendor/
  fi

  builder_finish_action success clean
fi

if builder_start_action stop; then
  # Stop the Docker container
  _stop_docker_container
  builder_finish_action success stop
fi

if builder_start_action build; then
  # Download docker image. --mount option requires BuildKit  
  DOCKER_BUILDKIT=1 docker build -t help-keyman-website .

  # Don't build composer image here - that is handled in configure
  builder_finish_action success build
fi

if builder_start_action start; then
  # Start the Docker container
  if [ ! -z $(_get_docker_image_id "help-keyman-website") ]; then
    docker run -d -p 8055:80 -v $(_get_pwd):/var/www/html/:ro -e S_KEYMAN_COM=localhost:8054 help-keyman-website
  else
    echo "${COLOR_RED}ERROR: Docker container doesn't exist. Run ./build.sh build first${COLOR_RESET}"
    builder_finish_action fail start
  fi

  builder_finish_action success start
fi

if builder_start_action test; then
  # TODO: lint tests

  #composer check-docker-links

  echo $(_get_pwd)

  builder_finish_action success test
fi
