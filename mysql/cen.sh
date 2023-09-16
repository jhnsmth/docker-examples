#!/bin/sh

query=$(cat <<-SQL
-- number of current employees
SELECT SUM(1) FROM
    current_dept_emp cde
WHERE
    cde.to_date = '9999-01-01';
SQL
)

# Avoid warning of passing password as a CLI option
# https://unix.stackexchange.com/a/334971
# `export` делает переменную доступной для комманд запущеных внутри скрипта
export MYSQL_PWD="$MYSQL_ROOT_PASSWORD"

# Note that $query inclosed into double quotes
result=$(echo "$query" | mysql -s -uroot employees)

echo "Number of current employees $result"
