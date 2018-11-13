<?php
include_once '../includes/connection.php'; 
$query = "delete from code_rooms where room_id = {$_GET['room_id']}";
mysqli_query($link, $query);
header("location:rooms.php");

