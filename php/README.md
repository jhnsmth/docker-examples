# PHP Playgroud

If you want to play with PHP online [onlinephp](https://onlinephp.io/)

Start the comtainer and navigate to [http://localhost:80](http://localhost:80)

To run PHP interactive shell
```sh
docker compose run www php -a
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