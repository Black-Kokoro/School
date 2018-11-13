<?php
include_once '../includes/connection.php'; 
$query = "delete from course where course_id = {$_GET['course_id']}";
mysqli_query($link, $query);
header("location:courses.php");

