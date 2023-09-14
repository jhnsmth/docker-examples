
SQL="
SELECT SUM(1) FROM
    current_dept_emp cde
WHERE
    cde.to_date = '9999-01-01';
"

# https://unix.stackexchange.com/a/334971
export MYSQL_PWD=$MYSQL_ROOT_PASSWORD

NUM=$(echo $SQL | mysql -uroot -D employees -s)

echo Number of current employees $NUM