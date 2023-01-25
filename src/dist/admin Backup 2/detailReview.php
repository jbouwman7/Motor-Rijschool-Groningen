<?php

require('./functions/functions.php');
require('./functions/reviewFunctions.php');

$id = $_GET['id'];

$reviews = $pdo->query("SELECT * FROM reviews WHERE id = $id")->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style/adminStyle.css">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Column</th>
            <th>Waarde</th>
        </tr>
            <h1>Titel: <?= $reviews['title'] ?> </h1>
        <tr>
            <td>
                Beschrijving:
            </td>
            <td>
                <textarea name="" id="" cols="30" rows="10"> <?= $reviews['description'] ?> </textarea>
            </td>
        </tr>
        <tr>
            <td>
                Rating
            </td>
            <td>
                <?= $reviews['rating'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Afbeelding
            </td>
            <td>
                <?= $reviews['image'] ?>
            </td>
        </tr>
        </tr>
        </tr>    
    </table>

    <a href="editReview.php?id=<?= $id ?>">Bewerk gegevens</a>

<a href="admin.php">
<span class="material-symbols-outlined">
        chevron_left
    </span>
    <span class="material-symbols-outlined">
        terug
    </span>
</a>
</body>
</html>
</body>
</html>