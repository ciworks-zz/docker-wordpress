FROM wordpress:latest

# Fetch and install composer
RUN curl -sS https://getcomposer.org/installer | \
    php -- --install-dir=/usr/bin/ --filename=composer
COPY ./scripts/wordpress/composer.json /usr/src/wordpress/composer.json
COPY ./scripts/wordpress/composer.json /var/www/html/composer.json
COPY ./themes/avant /usr/src/wordpress/wp-content/themes/avant

RUN composer install --no-scripts --no-autoloader
RUN composer dump-autoload --optimize

COPY ./scripts/apache2/server-cert.pem /etc/apache2/ssl/server-cert.pem
COPY ./scripts/apache2/server-key.pem /etc/apache2/ssl/server-key.pem
COPY ./scripts/apache2/stpauls.local.conf /etc/apache2/sites-enabled/stpauls-local.conf

RUN a2enmod rewrite
RUN a2enmod ssl
RUN service apache2 restart
