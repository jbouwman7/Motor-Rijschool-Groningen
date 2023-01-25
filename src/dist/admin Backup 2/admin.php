<?php
session_start();

require('./functions/functions.php');
require('./functions/packageFunctions.php');
require('./functions/reviewFunctions.php');


$reviews = allReviews($pdo);
$packages = allPackages($pdo);

if(!isset($_SESSION['loggedInUser'])) {
    header('location: login.php');
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

</head>
<body>
<a href="logout.php">LOG OUT</a>

    <table>
        <h2>Reviews</h2>
        <tr>
            <th>Titel:</th>
            <th>Description:</th>
            <th>Rating:</th>
            <th>Image:</th>
        </tr>
        <tr>
        <?php foreach ($reviews as $review) : ?>
                <td>
                    <?= $review['title'] ?>
                </td>
                <td>
                    <?= $review['description'] ?>
                </td>
                <td>
                    <?= $review['rating'] ?>
                </td>
                <td>
                    <?= $review['image'] ?>
                </td>
                <td>
                    <a href="detailReview.php?id=<?= $review['id'] ?>">Bekijk details</a>
                </td>
            </tr>
                <?php endforeach; ?>
            </table>
            </tr>
            <a href="insertReview.php">Voeg een review toe</a>

    <table>
        <h2>Packages</h2>
        <tr>
            <th>Titel:</th>
            <th>Description:</th>
            <th>Image:</th>
        </tr>
        <?php foreach ($packages as $package) : ?>
            <tr>
                <td>
                    <?= $package['title'] ?>
                </td>
                <td>
                    <?= $package['description'] ?>
                </td>
                <td>
                    <?= $package['image'] ?>
                </td>
                <td>
                    <a href="detailPackage.php?id=<?= $package['id'] ?>">Bekijk details</a>

                </td>
            </tr>
                <?php endforeach; ?>
            </table>
                
                
                    <a href="insertPackage.php">Voeg een pakket toe</a>
</body>
</html>