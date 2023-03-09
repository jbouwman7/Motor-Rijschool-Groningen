<?php

function getPdo(): PDO
{
    $host = 'localhost';
    $db   = 'motorrijschoolgroningen';
    $username = 'bit_academy';
    $password = 'bit_academy';
    $charset = 'utf8mb4';
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $pdo = new PDO($dsn, $username, $password);

    return $pdo;
}

$pdo = getPdo();
