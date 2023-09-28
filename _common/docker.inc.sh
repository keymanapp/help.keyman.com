# Common docker functions.

function get_docker_image_id() {
  local IMAGE_NAME=$1
  echo "$(docker images -q $IMAGE_NAME)"
}

function get_docker_container_id() {
  local CONTAINER_NAME=$1
  echo "$(docker ps -a -q --filter ancestor=$CONTAINER_NAME)"
}

function stop_docker_container() {
  local IMAGE_NAME=$1
  local CONTAINER_NAME=$2

  local CONTAINER_ID=$(get_docker_container_id $CONTAINER_NAME)
  if [ ! -z "$CONTAINER_ID" ]; then
    docker container stop $CONTAINER_ID
  else
    echo "No Docker container to stop"
  fi
}

function clean_docker_container() {
  local IMAGE_NAME=$1
  local CONTAINER_NAME=$2

  # Stop and cleanup Docker containers and images used for the site
  stop_docker_container $IMAGE_NAME $CONTAINER_NAME

  local CONTAINER_ID=$(get_docker_container_id $CONTAINER_NAME)
  if [ ! -z "$CONTAINER_ID" ]; then
    docker container rm $CONTAINER_ID
  else
    echo "No Docker container to clean"
  fi

  local IMAGE_ID=$(get_docker_image_id $IMAGE_NAME)
  if [ ! -z "$IMAGE_ID" ]; then
    docker rmi $IMAGE_NAME
  else
    echo "No Docker image to clean"
  fi
}

function _verify_vendor_is_not_folder() {
  if [ -d vendor ]; then
    builder_die "vendor/ folder exists. Remove and retry"
  fi
}

function build_docker_container() {
  local IMAGE_NAME=$1
  local CONTAINER_NAME=$2

  _verify_vendor_is_not_folder

  # Download docker image. --mount option requires BuildKit
  DOCKER_BUILDKIT=1 docker build -t $IMAGE_NAME .
}

function start_docker_container() {
  local IMAGE_NAME=$1
  local CONTAINER_NAME=$2
  local CONTAINER_DESC=$3
  local HOST=$4
  local PORT=$5

  _verify_vendor_is_not_folder

  local CONTAINER_ID=$(get_docker_container_id $CONTAINER_NAME)
  if [ ! -z "$CONTAINER_ID" ]; then
    builder_die "$HOST container $CONTAINER_ID has already been started"
  fi

  # Start the Docker container
  if [ -z $(get_docker_image_id $IMAGE_NAME) ]; then
    builder_die "ERROR: Docker container doesn't exist. Run \"./build.sh build\" first"
  fi

  if [[ $OSTYPE =~ msys|cygwin ]]; then
    # Windows needs leading slashes for path
    SITE_HTML="//$(pwd):/var/www/html/"
  else
    SITE_HTML="$(pwd):/var/www/html/"
  fi

  docker run --rm -d -p $PORT:80 -v ${SITE_HTML} \
    -e S_KEYMAN_COM=localhost:$PORT_S_KEYMAN_COM \
    -e API_KEYMAN_COM=localhost:$PORT_API_KEYMAN_COM \
    --name $CONTAINER_DESC \
    $CONTAINER_NAME

  # Skip if link already exists
  if [ ! -L vendor ]; then
    # Create link to vendor/ folder
    CONTAINER_ID=$(get_docker_container_id $CONTAINER_NAME)
    if [ -z "$CONTAINER_ID" ]; then
      builder_die "Docker container appears to have failed to start in order to create link to vendor/"
    fi

    docker exec -i $CONTAINER_ID sh -c "ln -s /var/www/vendor vendor && chown -R www-data:www-data vendor"
  fi

  builder_echo green "Listening on http://$HOST:$PORT"
}