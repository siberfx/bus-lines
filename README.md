<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

### Requirements 
#### You must have installed docker & docker-compose to be able to make it run with docker.  


## Installation

```shell
docker-compose up -d
```
installing packages of the laravel
```shell
docker-compose exec bus-app php composer install
```

to be able to migrate database and seed fake data
```shell
docker-compose exec bus-app php artisan migrate --seed
```
after that, you can simply open desired browser and type

http://localhost
