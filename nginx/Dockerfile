FROM richarvey/nginx-php-fpm:latest

COPY default.conf /etc/nginx/sites-available/
ADD ./websites /var/www/html

EXPOSE 80
