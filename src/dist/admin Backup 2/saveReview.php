<?php

require_once('./functions/functions.php');
require_once('./functions/reviewFunctions.php');

if (isset($_POST)) {
    createReview($pdo, $_POST);
    header('location: admin.php');
}