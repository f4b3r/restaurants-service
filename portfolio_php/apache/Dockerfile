FROM ubuntu:20.04
MAINTAINER Fabrizio Pititto <pititto.fabrizio@gmail.com>
LABEL Description="Ubuntu Lamp [APACHE PHP MYSQL]" \
	License="Apache License 2.0" \
	Usage="" \
	Version="1.0"



ENV TERM=xterm\
    TZ=Europe/Berlin\
    DEBIAN_FRONTEND=noninteractive

RUN apt-get update
#RUN apt-get upgrade -y

RUN apt-get install -y \
	nano \
	apache2 \
	libapache2-mod-php \
	php \
	php-cli \
	php-common \
	php-curl \
	php-dev \
	php-fpm \
	php-gd \
	php-xdebug \
	php-tidy \
	php-json \
	php-mbstring \
	php-mysql \
	php-zip
    
# -- CHERRY -- #

RUN mkdir /var/www/www.fabriziopit.com
RUN chown -R www-data:www-data /var/www/www.fabriziopit.com

COPY apache.conf /etc/apache2/sites-available/
COPY php.ini /etc/php/7.4/apache2/
COPY cert/crt /etc/apache2/ssl/
COPY cert/key /etc/apache2/ssl/

# -- VOLUMES -- #
VOLUME /var/www/www.fabriziopit.com
VOLUME /var/log/apache2


#APACHE
RUN a2enmod rewrite
RUN a2enmod ssl
RUN a2dissite 000-default
RUN a2ensite apache
RUN phpenmod xdebug
RUN phpenmod tidy
RUN phpenmod bcmath
RUN update-ca-certificates

#XDEBUG
RUN echo "xdebug.remote_enable = 1" >> /etc/php/7.4/mods-available/xdebug.ini
RUN echo "xdebug.remote_host = host.docker.internal" >> /etc/php/7.4/mods-available/xdebug.ini
RUN echo "xdebug.remote_port = 10000" >> /etc/php/7.4/mods-available/xdebug.ini
RUN echo "xdebug.remote_autostart = 1" >> /etc/php/7.4/mods-available/xdebug.ini
RUN echo "xdebug.remote_log=/var/log/apache2/xdebug.log" >> /etc/php/7.4/mods-available/xdebug.ini

EXPOSE 80
EXPOSE 443

CMD service apache2 start && tail -f /dev/null
