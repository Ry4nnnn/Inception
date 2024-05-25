#!/bin/bash

cd /var/www/html

rm -rf *

curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar

chmod +x wp-cli.phar
mv wp-cli.phar /usr/local/bin/wp

wp core download --allow-root

rm /var/www.html/wp-config-sample.php
mv /wp-config.php /var/www/html/wp-config.php

# change the value id
sed -i -r "s/MYSQL_DATABASE/$MYSQL_DATABASE/1"   wp-config.php
sed -i -r "s/MYSQL_USER/$MYSQL_USER/1"  wp-config.php
sed -i -r "s/MYSQL_PASSWORD/$MYSQL_PASSWORD/1"    wp-config.php
sed -i -r "s/MYSQL_LOCALHOST/$MYSQL_LOCALHOST/1"    wp-config.php

# run the wordpress setup
wp core install --url=$DOMAIN_NAME/ --title=$WP_TITLE --admin_user=$WP_ADMIN_USR --admin_password=$WP_ADMIN_PWD --admin_email=$WP_ADMIN_EMAIL --skip-email --allow-root
wp user create $WP_USR $WP_EMAIL --role=author --user_pass=$WP_PWD --allow-root
wp theme install twentytwentytwo --activate --allow-root

# make fpm listens to port 9000
sed -i 's/listen = \/run\/php\/php7.3-fpm.sock/listen = 9000/g' /etc/php/7.3/fpm/pool.d/www.conf

mkdir /run/php

/usr/sbin/php-fpm7.3 -F