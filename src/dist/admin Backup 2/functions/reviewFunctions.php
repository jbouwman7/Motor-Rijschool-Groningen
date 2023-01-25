<?php

function allReviews(PDO $pdo) {
    $query = "SELECT * FROM reviews";

    $statement = $pdo->prepare($query);
    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function createReview(PDO $pdo, $record) {
    $query = "INSERT INTO reviews (title, description, rating, image) VALUES (:title, :description, :rating, :image)";

    $statement = $pdo->prepare($query);

    $statement->bindValue(':title', $record['title'], PDO::PARAM_STR);
    $statement->bindValue(':description', $record['description'], PDO::PARAM_STR);
    $statement->bindValue(':rating', $record['rating'], PDO::PARAM_STR);
    $statement->bindValue(':image', $record['image'], PDO::PARAM_STR);

    $statement->execute();
    $record['id'] = $pdo->lastInsertId();

    return $record;
}

function updateReview(PDO $pdo, $id, $form) {
    $query = "UPDATE reviews SET
    title = :title,
    description = :description,
    rating = :rating,
    image = :image
    WHERE id = :id
    ";

    $statement = $pdo->prepare($query);

    $statement->bindValue(':title', $form['title'], PDO::PARAM_STR);
    $statement->bindValue(':description', $form['description'], PDO::PARAM_STR);
    $statement->bindValue(':rating', $form['rating'], PDO::PARAM_STR);
    $statement->bindValue(':image', $form['image'], PDO::PARAM_STR);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function deleteReview($pdo, $id) {
    $query = "DELETE FROM reviews WHERE id = $id";

    $statement = $pdo->prepare($query);

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_ASSOC);
}
