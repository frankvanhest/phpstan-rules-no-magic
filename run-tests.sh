#!/usr/bin/env sh

echo 'RUN tests in PHP 7.4'
/usr/bin/env docker-compose run php74 /var/www/html/docker/run-tests.sh

echo 'RUN tests in PHP 8.0'
/usr/bin/env docker-compose run php80 /var/www/html/docker/run-tests.sh

echo 'RUN tests in PHP 8.1'
/usr/bin/env docker-compose run php81 /var/www/html/docker/run-tests.sh
