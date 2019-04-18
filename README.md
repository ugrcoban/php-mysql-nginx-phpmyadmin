# DOCKER for PHP & MYSQL & NGINX & PHPMYADMIN 

You can start to docker for php mysql projects.


## Do you want to change versions ?
- PHP Version : docker/php/Dockerfile ( now : php:7.2-fpm )
- Nginx Version : docker/nginx/Dockerfile ( now : nginx:1.13.7 )
- Mysql and others : docker-compose.yml ( now : mysql:8.0 )


## Requirements

On your own machine you should have:

- docker
- docker-compose

## Run the demo

```
git clone --recursive https://github.com/ugrcoban/php-mysql-nginx-phpmyadmin.git projectname

cd projectname

docker-compose up -d
```

Visiting `http://localhost` or `http://{local_ip}`.

Phpmyadmin `http://localhost:8080` or `http://{local_ip}:8080`.


### To destroy the setup

```
docker-compose down
```

## If you change to versions, you will update for this line. And run again.

```
docker-compose stop
docker-compose rm --force
docker-compose build --no-cache
docker-compose up -d
```
