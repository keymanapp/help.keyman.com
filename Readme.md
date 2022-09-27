# Development

## How to run help.keyman.com locally with Apache on Docker

Previously, the site was run in IIS, but is now migrated to Apache. The Docker image is configured to host the site that can be accessed at http://localhost:8055.


### Pre-requisites

On the host machine, install [Docker](https://docs.docker.com/get-docker/) and [Composer](https://getcomposer.org/download/):

### Using composer to install dependencies in vendor/ folder

1. Run `./build.sh configure`.

## Using Docker

To run locally with Docker on http://localhost:8055 you can use commands like the following:

1. Run `./build.sh build`

## Running tests

Checks for broken links
1. Run `./build.sh test`
