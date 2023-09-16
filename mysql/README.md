Dump:
```sh
docker exec -i mysql-db-1 sh -c 'exec mysqldump -u root -p"$MYSQL_ROOT_PASSWORD" employees' > employees.sql
```

Restore:
```sh
docker exec -i mysql-db-1 sh -c 'exec mysql -uroot -p"$MYSQL_ROOT_PASSWORD" -e "CREATE DATABASE employees;"'
docker exec -i mysql-db-1 sh -c 'exec mysql -uroot -p"$MYSQL_ROOT_PASSWORD" employees' <  employees.sql
```

Launch script inside Docker container:
```sh
docker exec -i mysql-db-1 sh < script.sh
```
