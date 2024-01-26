#!/usr/bin/env sh

echo 'RUN tests in PHP 8.1'
/usr/bin/env docker-compose run php81 /var/www/html/docker/run-tests.sh

echo 'RUN tests in PHP 8.2'
/usr/bin/env docker-compose run php82 /var/www/html/docker/run-tests.sh

echo 'RUN tests in PHP 8.3'
/usr/bin/env docker-compose run php83 /var/www/html/docker/run-tests.sh
