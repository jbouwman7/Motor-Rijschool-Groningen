<?php

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
    <form method="POST" action="savePackage.php">
        <div>
            <label for="title">
                <input type="text" id="title" name="title" placeholder="title">
            </label>
        </div>
        <div>
            <label for="description">
                <textarea id="description" name="description" placeholder="description"></textarea>
            </label>
        </div>
        <div>
            <label for="image">
                <input type="file" id="image" name="image" placeholder="image">
            </label>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>

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