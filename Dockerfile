FROM drupal:8.7-apache

WORKDIR /app

COPY . /app

COPY apache-drupal.conf /etc/apache2/sites-enabled/000-default.conf