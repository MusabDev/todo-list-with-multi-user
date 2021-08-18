<?php

session_start();
if (!isset($_SESSION["user_email"])) {
    header("Location: index.php");
    die();
}

?>

<h1>Hello</h1>