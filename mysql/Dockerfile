FROM mysql:5.6

# Add Database
ENV MYSQL_DATABASE site
# Add Script directory and excute during start up

COPY ./mysql_scripts/ /docker-entrypoint-initdb.d/

EXPOSE 3306