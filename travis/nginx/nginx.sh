#!/bin/sh
apt-get install nginx
cp -f ./travis/nginx/nginx.conf /etc/nginx/nginx.conf
cp -f ./travis/nginx/travis.vhost /etc/nginx/sites-available/default
LOCALDIR="$(pwd)/public"
sed -i "s#LOCAL_DIR#${LOCALDIR}#" /etc/nginx/sites-available/default
cat /etc/nginx/sites-available/default
  # php5 fpm
chmod -R 777 $LOCALDIR/app/logs/
chmod -R 777 $LOCALDIR/app/cache/


service nginx restart