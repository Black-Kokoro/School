<?php
include_once '../includes/connection.php'; 
$query = "delete from code_relations where relation_id = {$_GET['relation_id']}";
mysqli_query($link, $query);
header("location:relations.php");

