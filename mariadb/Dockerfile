FROM mariadb:latest

ENV MYSQL_ALLOW_EMPTY_PASSWORD=yes
ENV ALLOW_EMPTY_PASSWORD=yes
ENV MYSQL_DATABASE=okci_test

ADD okci_test.sql /docker-entrypoint-initdb.d