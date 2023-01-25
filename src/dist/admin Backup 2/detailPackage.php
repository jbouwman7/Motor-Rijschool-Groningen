<?php

require('./functions/functions.php');
require('./functions/packageFunctions.php');

$id = $_GET['id'];

$packages = $pdo->query("SELECT * FROM packages WHERE id = $id")->fetch();
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
            <h1>Titel: <?= $packages['title'] ?> </h1>
        <tr>
            <td>
                Beschrijving:
            </td>
            <td>
                <textarea name="" id="" cols="30" rows="10"> <?= $packages['description'] ?> </textarea>
            </td>
        </tr>
        <tr>
            <td>
                Afbeelding
            </td>
            <td>
                <?= $packages['image'] ?>
            </td>
        </tr>
        </tr>
        </tr>    
    </table>

    <a href="editPackage.php?id=<?= $id ?>">Bewerk gegevens</a>

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