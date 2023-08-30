# PHP Playgroud

If you want to play with PHP online [onlinephp](https://onlinephp.io/)

Start the container and navigate to [http://localhost:80](http://localhost:80)

To run PHP interactive shell
```sh
docker compose run --rm www php -a
```

To build and run the container execute:
```sh
docker compose up -d
```

To stop the container execute:
```sh
docker compose stop
```

To start a stopped container execute:
```sh
docker compose start
```

To remove all stopped containers execute:
```sh
docker compose rm
```

Connect php conatiner with exiting mysql container:
```sh
docker network create br0
docker network connect br0 php-www-1
docker network connect br0 mysql-db-1
```