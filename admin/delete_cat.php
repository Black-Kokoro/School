<?php
include_once '../includes/connection.php'; 
$query = "delete from categories where cat_id = {$_GET['cat_id']}";
mysqli_query($link, $query);
header("location:categories.php");

