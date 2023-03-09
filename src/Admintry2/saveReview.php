<?php

session_start();

if (!isset($_SESSION['loggedInUser'])) {
    header('location: login.php');
}

require('dbFunctions.php');
require('db_pdo.php');
require('reviewFunctions.php');


$pdo = getPdo();
// var_dump($_FILES);
$record = sanitize();
// var_dump($record);

// $record = sanitize($_POST);

if (isset($_POST['insert'])) {
    saveData($pdo, $_POST, $record);
    header('location: admin.php');
}

if (isset($_POST['edit'])){ 
    $id = $_GET['id'];
    updateImage($pdo, $id);
    $form = $_POST;
    updateReview($pdo, $id, $form, $record);
    header('Location: admin.php');
}

if (isset($_POST['delete'])) {
    $id = $_GET['id'];
    deleteReview($pdo, $id);
    header('Location: admin.php');
}