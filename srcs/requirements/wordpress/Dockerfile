FROM debian:buster

RUN apt-get update -y
RUN apt-get upgrade -y

RUN apt-get install wget -y

RUN apt-get install php7.3 php-fpm php-mysql mariadb-client -y

RUN wget https://wordpress.org/wordpress-6.0.tar.gz -P /var/www

RUN cd /var/www && tar -xzf wordpress-6.0.tar.gz && rm wordpress-6.0.tar.gz

RUN chown -R root:root /var/www/wordpress

COPY ./conf/php.conf /etc/php/7.3/fpm/pool.d/www.conf

COPY ./tools/configWP.sh /configWP.sh

RUN chmod 755 /var/www/

RUN wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar

RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/local/bin/wp

COPY tools/configWP.sh configWP.sh
RUN chmod +x configWP.sh

RUN chown -R www-data:www-data /var/www/*

RUN chmod -R 755 /var/www/*

ENTRYPOINT ["bash", "configWP.sh"]
#ENTRYPOINT ["bash"]
