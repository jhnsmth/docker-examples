Docker-compose file to run PostgreSQL + [pgAdmin](https://www.pgadmin.org)

See https://habr.com/ru/articles/578744/

Run `psql` inside running container:
```sh
docker compose exec -u postgres db psql -U gosha
```

Prepare csv data using `awk`:
```sh
awk -i inplace -F ',' -v OFS=',' '$1 { if ($9==" - ") $9=""; print}' employees.csv
```

Create table for invoices:
```sql
CREATE TABLE invoices (
	id serial PRIMARY KEY,
    income numeric(19,2),
    checkout_date DATE NOT NULL DEFAULT CURRENT_DATE,
	created_on TIMESTAMP NOT NULL DEFAULT NOW(),
);
```
