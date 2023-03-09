<?php

include_once('db_pdo.php');

require('dbFunctions.php');
session_start();

unset($_SESSION['error']);

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = loginSecurity($pdo, $username, $password);
    if ($user !== false) {
        $_SESSION['loggedInUser'] = $user['id'];
        header("Location: admin.php");
        die();
    }

    $_SESSION['error'] = "Gebruikersnaam of wachtwoord is ongeldig . ";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF - 8">
    <meta http-equiv="X - UA - Compatible" content="IE = edge">
    <meta name="viewport" content="width = device - width, initial - scale = 1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../dist/style.css">
</head>

<body>

    <form method="POST">
        <div>
            <label for="username">Gebruikersnaam</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="password">Wachtwoord</label>
            <input type="text" name="password" id="password">
        </div>
        <?php if (isset($_SESSION['error'])) { ?>
            <div style="color: red;"><?= $_SESSION['error']; ?></div>
        <?php } ?>
        <button type="submit" class="inline-flex items-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" value="Inloggen">Inloggen</button>
    </form>
</body>

</html>
