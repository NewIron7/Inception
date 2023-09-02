FROM debian:buster

RUN apt-get update -y \
    && apt-get upgrade -y \
    && apt-get install mariadb-server -y

COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf
COPY ./conf/wordpress.sql /usr/local/bin/wordpress.sql
COPY ./tools/mariadb.sh ./mariadb.sh

RUN chmod +x /mariadb.sh \
 && chmod +x /usr/local/bin/wordpress.sql

ENTRYPOINT ["bash", "mariadb.sh"]
CMD ["mysqld_safe"]
