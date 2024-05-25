FROM debian:buster

RUN apt-get update -y && apt upgrade -y
RUN	apt-get install -y wget vim curl
RUN apt-get install -y php-fpm php-mysql

EXPOSE 9000

# copy the config and script and add into the container
COPY /tools/wordpress_boot.sh /
COPY /config/wp-config.php /

CMD [ "/wordpress_boot.sh" ]
