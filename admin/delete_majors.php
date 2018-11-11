<?php
include_once '../includes/connection.php'; 
$query = "delete from code_majors where major_id = {$_GET['major_id']}";
mysqli_query($link, $query);
header("location:majors.php");

