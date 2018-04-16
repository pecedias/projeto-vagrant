#!/usr/bin/env bash

apt-get update
apt-get install -y apache2

if ! [ -L /var/www ]; then
  rm -rf /var/www
  ln -fs /vagrant /var/www
fi

apt-get install -y php5
apt-get install -y php5-mysql libapache2-mod-php5
apt-get install -y mysql-client

sudo /etc/init.d/apache2 restart
