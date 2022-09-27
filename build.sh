#!/usr/bin/env bash
#
# Setup help.keyman.com site to run via Docker.
#
set -eu

## START STANDARD BUILD SCRIPT INCLUDE
# adjust relative paths as necessary
THIS_SCRIPT="$(greadlink -f "${BASH_SOURCE[0]}" 2>/dev/null || readlink -f "${BASH_SOURCE[0]}")"
. "$(dirname "$THIS_SCRIPT")/resources/build/build-utils.sh"
## END STANDARD BUILD SCRIPT INCLUDE

. "$KEYMAN_ROOT/resources/shellHelperFunctions.sh"

# This script runs from its own folder
cd "$THIS_SCRIPT_PATH"

################################ Main script ################################

# Ensures color var use in `builder_describe`'s argument respects the specified
# --color/--no-color option.
builder_check_color "$@"

builder_describe \
  "Setup help.keyman.com site to run via Docker." \
  configure \
  clean \
  build \
  test \

builder_parse "$@"

# START - Script parameter configuration
REPORT_STYLE=local  # Default setting.

# END - Script parameter configuration

cd "$KEYMAN_ROOT"

if builder_start_action configure; then
  #verify_npm_setup
  composer install
  #"$KEYMAN_ROOT/common/web/keyman-version/build.sh"

  builder_finish_action success configure
fi

if builder_start_action clean; then
  #npm run clean
  builder_finish_action success clean
fi

if builder_start_action build; then
  # Download docker image
  docker build -t keyman-websites .

  get_builder_OS
  if [ $os_id == "win" ]; then
    docker run -d -p 8055:80 -v %cd%:/var/www/html/ -e S_KEYMAN_COM=localhost:8054 keyman-websites
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
