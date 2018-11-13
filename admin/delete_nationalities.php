<?php
include_once '../includes/connection.php'; 
$query = "delete from code_nationality where nationality_id = {$_GET['nationality_id']}";
mysqli_query($link, $query);
header("location:nationalities.php");

