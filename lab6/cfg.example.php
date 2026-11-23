<?php
$bazadanych = "";
$host = "";
$username = "";
$password = "";
$dsn = "mysql:host=$host;dbname=$bazadanych,charset=utf8mb4"
$opcje = [PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_EMULATE_PREPARES   => false];
$pdo = new PDO($dsn,$username,$password,$opcje);
?>