FROM debian:buster

RUN apt-get update -y
RUN apt-get upgrade -y

RUN apt-get install mariadb-server -y

COPY conf/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

COPY tools/mariadb.sh /mariadb.sh

RUN chmod +x /mariadb.sh

EXPOSE 3306

COPY /conf/wordpress.sql /usr/local/bin/wordpress.sql
RUN chmod +x /usr/local/bin/wordpress.sql

ENTRYPOINT ["bash", "mariadb.sh"]

CMD ["mysqld", "--bind-address=0.0.0.0"]
#ENTRYPOINT ["bash"]
