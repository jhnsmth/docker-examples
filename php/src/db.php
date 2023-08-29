<?php
$pdo = new PDO('mysql:host=mysql-db-1;dbname=employees', 'root', 'supersecret');
$statement = $pdo->query("SELECT 'Привет, дорогой пользователь MySQL!' AS _message FROM DUAL");
$row = $statement->fetch(PDO::FETCH_ASSOC);

//$mysqli = new mysqli("mysql-db-1", "root", "supersecret", "employees");
//$result = $mysqli->query("SELECT 'Привет, дорогой пользователь MySQL!' AS _message FROM DUAL");
//$row = $result->fetch_assoc();

echo htmlentities($row['_message']);
