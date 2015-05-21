#!/bin/sh
sudo apt-get install nginx
sudo cp -f ./travis/nginx/nginx.conf /etc/nginx/nginx.conf
sudo cp -f ./travis/nginx/travis.vhost /etc/nginx/sites-available/default
LOCALDIR="$(pwd)/public"
sudo sed -i "s#LOCAL_DIR#${LOCALDIR}#" /etc/nginx/sites-available/default
  # php5 fpm
cp ~/.phpenv/versions/$(phpenv version-name)/etc/php-fpm.conf.default ~/.phpenv/versions/$(phpenv version-name)/etc/php-fpm.conf
~/.phpenv/versions/$(phpenv version-name)/sbin/php-fpm
sudo service nginx restart