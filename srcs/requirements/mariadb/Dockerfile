FROM debian:buster

RUN apt-get update -y \
    && apt-get upgrade -y \
    && apt-get install mariadb-server -y

COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf
#COPY ./conf/wordpress.sql /usr/local/bin/wordpress.sql
COPY ./tools/configDB.sh ./configDB.sh

RUN chmod +x /configDB.sh
#RUN chmod +x /usr/local/bin/wordpress.sql

ENTRYPOINT ["bash", "configDB.sh"]
CMD ["mysqld_safe"]
