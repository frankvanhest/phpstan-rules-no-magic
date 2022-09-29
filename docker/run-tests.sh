#!/usr/bin/env sh

cd /var/www/html/

# phpstan
echo 'RUN PHPStan'
vendor/bin/phpstan --configuration=phpstan.neon.dist --memory-limit=1G

# phpunit
echo 'RUN PHPUnit'
vendor/bin/phpunit --configuration phpunit.xml.dist --coverage-text

# infection
echo "RUN Infection"
vendor/bin/infection --min-msi=100 --min-covered-msi=100 --show-mutations --only-covered --threads=4 --test-framework-options="--configuration=phpunit.xml.dist" --configuration=infection.json.dist
