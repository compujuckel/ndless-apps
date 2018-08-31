FROM php:7.0-fpm
RUN apt-get update -y && apt-get install -y openssl zip unzip git libmcrypt-dev supervisor nginx
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo mbstring mcrypt pdo_mysql
WORKDIR /var/www/html
COPY . /var/www/html
RUN chown -R www-data:www-data storage/ bootstrap/cache/
RUN composer install

COPY docker/supervisord.conf /etc/supervisor/supervisord.conf
COPY docker/default /etc/nginx/sites-available/default

VOLUME /var/www/html/public/img/screenshot

ENTRYPOINT ["supervisord", "-c", "/etc/supervisor/supervisord.conf"]
