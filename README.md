# Installation detail for Website - St. Pauls RC Church #

## Introduction ##

This project contains a dockerised configuration to allow you to create a local instance of the website.

## Setup ##

You will need the following:

1) A MySQL data dump (saved as sql.gz) to be stored in the `data` directory

2) A theme for the site to be stored in the `migration/themes` folder

3) A snapshot of the `uploads` folder to be stored in the `migration/uploads` directory

4) An updated `composer.json` file to reflect the current site plugins - further detail available at [WPPackagist](https://wpackagist.org/)

## Run ##

```bash
docker-compose up -d
``` 
from the root directory

```bash
docker exec -it wordpress bash
```
to connect to the wordpress container

```bash
wp-init.sh
```
from within the var/www/html directory to get all the depedencies in place

***

## TODO ##

- [x] Add script variables used in wp-init.sh to docker-compose.yml 
- [ ] Automated running of wp-init.sh script without needing to connect to container 
