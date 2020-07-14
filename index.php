<?php

require_once "core/init.php";

include("views/navbar.php");

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}
?>

<h1>Covid 19</h1>