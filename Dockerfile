FROM mysql:latest

ENV MYSQL_ROOT_PASSWORD=ikanasin
ENV MYSQL_DATABASE=redlock

COPY redlock-db.sql /docker-entrypoint-initdb.d/

#RUN /etc/init.d/mysql start && mysql -u root -p ikanasin < /docker-entrypoint-initdb.d/redlock-db.sql