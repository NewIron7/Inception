FROM debian:bullseye

RUN apt-get update -y
RUN apt-get upgrade -y

RUN apt-get install mariadb-server -y

COPY conf/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

COPY tools/configDB.sh /configDB.sh

ENTRYPOINT ["bash", "configDB.sh"]

EXPOSE 3306
