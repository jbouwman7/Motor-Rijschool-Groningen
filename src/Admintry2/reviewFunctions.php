<?php

function allReviews(PDO $pdo)
{
    $query =
    "SELECT * FROM `reviews`";

    $statement = $pdo->prepare($query);
    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function saveData($pdo, $record, $image)
{
    $query = 'INSERT INTO reviews (title, image, description, rating) 
        VALUES (:title, :image, :description, :rating)';

    $statement = $pdo->prepare($query);
    $statement->bindValue(':title', $record['title'], PDO::PARAM_STR);
    $statement->bindValue(':image', $image, PDO::PARAM_STR);
    $statement->bindValue(':description', $record['description'], PDO::PARAM_STR);
    $statement->bindValue(':rating', $record['rating'], PDO::PARAM_INT);

    $statement->execute();
    $record['id'] = $pdo->lastInsertId();

    return $record;
}

function deleteReview($pdo, $id) {
    $query = "DELETE FROM reviews WHERE id = $id";

    $statement = $pdo->prepare($query);

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function updateReview(PDO $pdo, $id, $form, $image) {
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
    $statement->bindValue(':rating', $form['rating'], PDO::PARAM_INT);
    $statement->bindValue(':image', $image, PDO::PARAM_STR);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_ASSOC);
}
