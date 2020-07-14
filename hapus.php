<?php
include('model/db.php');
$id = $_GET['id'];
$query = "DELETE from data_relawan WHERE id='$id'";
mysqli_query($link, $query);
header('location:update.php');
