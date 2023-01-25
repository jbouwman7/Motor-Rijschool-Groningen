<?php

require_once('./functions/functions.php');
require('./functions/packageFunctions.php');

if (isset($_POST)) {
    createPackage($pdo, $_POST);
    header('location: admin.php');
}