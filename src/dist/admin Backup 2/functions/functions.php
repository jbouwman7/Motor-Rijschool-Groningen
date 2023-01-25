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


function loginSecurity(PDO $pdo, $username, $password) {
    $query = "SELECT * FROM users WHERE username = :username AND password = :password";

    $statement = $pdo->prepare($query);

    $statement->bindParam(':username', $username, PDO::PARAM_STR);
    $statement->bindParam(':password', $password, PDO::PARAM_STR);

    $statement->execute();

    return $statement->fetch(PDO::FETCH_ASSOC);
    
}

