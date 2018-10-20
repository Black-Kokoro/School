<?php
include_once '../includes/connection.php'; 
$query = "delete from users where user_id = {$_GET['user_id']}";
mysqli_query($link, $query);
header("location:manage_users.php");

