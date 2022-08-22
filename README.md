# static-blog
Branch information with approval and internet modules


## Pre-requisite 
- Install Docker 


## Run 
to run the application with requirements
``docker
docker-compose up -d --build
``

to open cli on the php  webserver
``
docker exec -it static-blog_php-fpm_1 bash
``

`` phpunit test in codeingnier
php vendor/kenjis/ci-phpunit-test/install.php -a src -p public -t tests
``
docker container inspect -f '{{ .NetworkSettings.Networks.curlybytes.IPAddress }}' curlybytes-mysql-server
php index.php migrate help
## Test5

##PS 
If you update the autoload psr-4, dont forget to add composer dump-autoload


``
check of mysql server ip address
docker inspect maricopa-mysql-server
docker inspect maricopa_php-fpm
docker inspect maricopa-webserver
docker inspect maricopa-memcached-server
maricopa-ngrok
``
to add secret first docker swarm init  
to create a secret 
docker secret create ngrok_token ./secret.json
echo "xxx" | docker secret create ngrok_api_token -
echo "xxx" > my_file_secret.txt
https://infinitemlmsoftware.com/preset-demo.php
https://blog.infinitemlmsoftware.com/wp-mlm-plugin-complete-mlm-solution/
https://www.leadmlmsoftware.com/mlm-compensation-plans/matrix-plan-software/
https://codecanyon.net/item/mlmlab-multilevel-marketing-platform/31801518
172.23.0.1 gateway
172.23.0.2 memcahc
172.23.0.3 clickhouse
172.23.0.4 mysql server
172.23.0.5 webserver
172.23.0.6 maricopa_php-fpm_1
172.23.0.7 phpmyadmin
172.23.0.8 ngrok
