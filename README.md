# jmbddd-music
This application is an example of ddd application

If you want to execute the tests:

Build the docker image:

docker-compose --file docker/compose.yaml --project-name jmbddd-music build

Install dependencies:

docker-compose --file docker/compose.yaml --project-name jmbddd-music run --no-deps --rm --user ${UID} song php composer.phar install

Run tests

docker-compose --file docker/compose.yaml --project-name jmbddd-music run --no-deps --rm --user ${UID} song php /srv/app/vendor/phpunit/phpunit/phpunit
