<?php

require('./functions/functions.php');
require('./functions/reviewFunctions.php');

$id = $_GET['id'];

$reviews = $pdo->query("SELECT * FROM reviews WHERE id = $id")->fetchAll();


if (isset($_POST['submit'])) {
    $form = $_POST;
    updateReview($pdo, $id, $form);
    header('location:' . $_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING']);
}

if (isset($_POST['delete'])) {
    deleteReview($pdo, $id);
    header('location: admin.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/adminStyle.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
<a href="detailReview.php?id=<?= $id ?>"> 
    <span class="material-symbols-outlined">
        chevron_left
    </span>
    <span class="material-symbols-outlined">
        terug
    </span>
</a>

        <form action="" method="POST">
            <div>
                <label for="title">Titel</label>
                <input type="text" name="title" id="title">
            </div>
            <div>
                <label for="description">Beschrijving</label>
                <textarea name="description" id="description" cols="30" rows="10"></textarea>
            </div>
            <div>
                <label for="rating">Rating</label>
                <input type="text" name="rating" id="rating">
            </div>
            <div>
                <label for="image">Image</label>
                <input type="file" name="image" id="image">
            </div>
            <div>
                <input type="submit" name="submit" value="Toevoegen">
            </div>
        </form>
        <?php foreach ($reviews as $review) : ?>
            <h1><?= $review['title'] ?></h1>


        <?php endforeach; ?>

        <form action="" method="POST">
            <input type="submit" name="delete" value="Delete">
        </form>
</body>
</html>