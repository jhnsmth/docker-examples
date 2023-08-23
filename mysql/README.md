Dump:

```sh 
docker exec -i mysql-db-1 sh -c 'exec mysqldump -u root -p"$MYSQL_ROOT_PASSWORD" employees' > employees.sql
```

Restore:
```sh
docker exec -i mysql-db-1 sh -c 'exec mysql -uroot -p"$MYSQL_ROOT_PASSWORD"' <  employees.sql
```
