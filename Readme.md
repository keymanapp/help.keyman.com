# Development

## How to run help.keyman.com locally with Apache on Docker

Previously, the site was run in IIS, but is now migrated to Apache. The Docker image is configured to host the site that can be accessed at http://localhost:8055.

If you have [website-local-proxy](https://github.com/keymanapp/website-local-proxy) running, the help site is available at
http://help.keyman.com.localhost.

### Pre-requisites

#### All host machines

The host machine needs the following:
* [Git](https://git-scm.com/downloads)
* Bash (on Windows, you can use Git Bash that comes with [Git](https://git-scm.com/download/win))
* [Docker Desktop](https://docs.docker.com/get-docker/)

#### Additional steps
On Windows host machines, do one of these two options:
* [Enable Hyper-V on Windows 11](https://techcommunity.microsoft.com/t5/educator-developer-blog/step-by-step-enabling-hyper-v-for-use-on-windows-11/ba-p/3745905)
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
