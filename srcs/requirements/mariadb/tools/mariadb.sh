#!/bin/sh

mysql_install_db

/etc/init.d/mysql start

#Check if the database exists

if [ -d "/var/lib/mysql/$SQL_DATABASE" ]
then 

	echo "Database already exists"
else

# Set root option so that connexion without root password is not possible

mysql_secure_installation << _EOF_

Y
$SQL_ROOT_PASSWORD
$SQL_ROOT_PASSWORD
Y
n
Y
Y
_EOF_

#Add a root user on 127.0.0.1 to allow remote connexion 
#Flush privileges allow to your sql tables to be updated automatically when you modify it
#mysql -uroot launch mysql command line client
mysql -uroot -e "GRANT ALL ON *.* TO 'root'@'%' IDENTIFIED BY '$SQL_ROOT_PASSWORD'; FLUSH PRIVILEGES;"

#Create database and user in the database for wordpress

mysql -uroot -e "CREATE DATABASE IF NOT EXISTS $SQL_DATABASE; GRANT ALL ON $SQL_DATABASE.* TO '$SQL_USER'@'%' IDENTIFIED BY '$SQL_PASSWORD'; FLUSH PRIVILEGES;"

#Import database in the mysql command line
mysql -uroot -p$SQL_ROOT_PASSWORD $SQL_DATABASE < /usr/local/bin/wordpress.sql

fi

/etc/init.d/mysql stop

exec "$@"
