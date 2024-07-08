# Development

## How to run help.keyman.com locally with Apache on Docker

Previously, the site was run in IIS, but is now migrated to Apache. The Docker image is configured to host the site that can be accessed at http://localhost:8055.

If you have [website-local-proxy](https://github.com/keymanapp/website-local-proxy) running, the help site is available at
http://help.keyman.com.localhost.

### Pre-requisites

On the host machine, install [Docker](https://docs.docker.com/get-docker/):

On Windows, Docker will also need either:
* hyper-v or
* [WSL2](https://ubuntu.com/tutorials/install-ubuntu-on-wsl2-on-windows-10#1-overview)

### Builder actions

#### Stop the Docker container
1. Run `./build.sh stop`

#### Build the Docker image
1. Run `./build.sh build`.

#### Start the Docker container
1. Run `./build.sh start`.

After this, you can access the help.keyman site at http://localhost:8055

#### Remove the Docker container and image
1. Run `./build.sh clean`.

#### Running tests
Checks for broken links
1. Run `./build.sh test`
