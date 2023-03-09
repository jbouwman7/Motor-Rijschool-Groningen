<?php

function sanitize()
{
    $record['image'] = $_FILES['image'];

    if ($record['image']['error'] == UPLOAD_ERR_OK && $record['image']) {
        // $record['image']['real_type'] = mime_content_type($record['image']['tmp_name']);
        $record['image']['new_name'] = date('Ymdis') . '.' . 'jpg';
        move_uploaded_file($record['image']['tmp_name'], './images/' . $record['image']['new_name']);
        return $record['image']['new_name'];
    }

    return;
}

function updateImage($pdo, $id)
{
    $q = 'SELECT image FROM reviews WHERE id = :id';
    $statement = $pdo->prepare($q);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();
    $image = $statement->fetch(PDO::FETCH_ASSOC);

    if ($image['image']) {
        unlink('images/' . $image['image']);
    }
}

function loginSecurity(PDO $pdo, $username, $password)
{
    $query = "SELECT * FROM users WHERE username = :username AND password = :password";

    $statement = $pdo->prepare($query);

    $statement->bindParam(':username', $username, PDO::PARAM_STR);
    $statement->bindParam(':password', $password, PDO::PARAM_STR);

    $statement->execute();

    return $statement->fetch(PDO::FETCH_ASSOC);
}

