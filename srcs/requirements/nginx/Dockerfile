FROM debian:buster

RUN apt update -y && \
	apt install -y nginx openssl && \
	rm -rf /var/lib/apt/lists/*

EXPOSE 443/tcp

COPY ./conf/* /etc/nginx/sites-enabled/
COPY ./tools/nginx_boot.sh /var/www/

RUN chmod +x /var/www/nginx_boot.sh

ENTRYPOINT [ "./var/www/nginx_boot.sh" ]

CMD [ "nginx", "-g", "daemon off;" ]