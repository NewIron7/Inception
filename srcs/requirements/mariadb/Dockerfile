FROM debian:buster

RUN apt-get update -y
RUN apt-get upgrade -y

RUN apt-get install -y mariadb-server \
    mariadb-client \
    vim \
    && rm -rf /var/lib/apt/lists/*

RUN mkdir -p /var/run/mysqld \
	&& chown -R mysql:mysql /var/run/mysqld \
	&& chmod 777 /var/run/mysqld \
	&& chmod 777 /var/lib/mysql \
	&& chown -R mysql:mysql /var/lib/mysql

#RUN apt-get install mariadb-server -y

COPY conf/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

COPY tools/configDB.sh /configDB.sh

RUN chmod +x /configDB.sh

ENTRYPOINT ["bash", "configDB.sh"]
#ENTRYPOINT ["bash"]

EXPOSE 3306
