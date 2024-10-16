FROM  debian:12

RUN apt update && apt install -y apache2 php libapache2-mod-php php-cli php-mysql

WORKDIR /var/www/html

EXPOSE 80
EXPOSE 443

CMD ["apache2ctl", "-D", "FOREGROUND"]

ENTRYPOINT apache2ctl -D FOREGROUND
