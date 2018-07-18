FROM ubuntu

# Install stuff
RUN apt-get update && apt-get install -y software-properties-common python-software-properties language-pack-en-base

# Install php
RUN LC_ALL=en_US.UTF-8 add-apt-repository ppa:ondrej/php -y

RUN apt-get update -y
RUN apt-get upgrade -y
RUN apt-get install -y git \
                       php \
                       php-fpm \
                       php-mysql \
                       php-curl  \
                       php-gd \
                       php-mbstring \
                       php-xml \
                       php-zip \
                       unzip \
                       curl \
                       php-intl

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer global require "fxp/composer-asset-plugin:*"
RUN sed -i "s/listen = .*/listen = 0.0.0.0:9000/" /etc/php/7.2/fpm/pool.d/www.conf

RUN curl -sL https://deb.nodesource.com/setup_8.x | bash -
RUN apt-get install -y nodejs
RUN npm i -g @angular/cli

WORKDIR /var/www

EXPOSE 9000

RUN mkdir /run/php

ADD ./start.sh /start.sh
RUN chmod +x /start.sh

ENTRYPOINT ["/start.sh"]
