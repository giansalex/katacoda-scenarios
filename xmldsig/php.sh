#!/bin/bash
sudo apt-get install php
curl --silent --show-error -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
cd root