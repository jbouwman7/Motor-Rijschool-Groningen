<?php

function allPackages(PDO $pdo) {
    $query = "SELECT * FROM packages";

    $statement = $pdo->prepare($query);
    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function createPackage(PDO $pdo, $record, $image) {
    $query = "INSERT INTO packages (title, description, image) VALUES (:title, :description, :image)";

    $statement = $pdo->prepare($query);
    $statement->bindValue(':title', $record['title'], PDO::PARAM_STR);
    $statement->bindValue(':description', $record['description'], PDO::PARAM_STR);
    $statement->bindValue(':image', $image, PDO::PARAM_STR);

    $statement->execute();
    $record['id'] = $pdo->lastInsertId();

    return $record;
}

function updatePackage(PDO $pdo, $id, $form) {
    $query = "UPDATE packages SET
    title = :title,
    description = :description,
    image = :image
    WHERE id = :id
    ";

    $statement = $pdo->prepare($query);

    $statement->bindValue(':title', $form['title'], PDO::PARAM_STR);
    $statement->bindValue(':description', $form['description'], PDO::PARAM_STR);
    $statement->bindValue(':image', $form['image'], PDO::PARAM_STR);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function deletePackage($pdo, $id) {
    $query = "DELETE FROM packages WHERE id = $id";

    $statement = $pdo->prepare($query);

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_ASSOC);
}