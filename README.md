# api-playground
API Playground

SLIM
REF: https://www.slimframework.com/
REF: http://www.bradcypert.com/building-a-restful-api-in-php-using-slim-eloquent/
1. brew install composer
2. composer.json
3. composer install
4. * composer create-project slim/slim-skeleton slim (creates slim and vendor folders)
5. cd slim
6. composer start (-> php -S 0.0.0.0:8080 -t public public/index.php)
7. http://localhost:8080/
8. php.ini ... dates.timezone = "America/Boise"

SILEX (https://silex.symfony.com/doc/2.0/usage.html)
1. composer create-project fabpot/silex-skeleton silex "~2.0"
2. cd silex
3. composer run