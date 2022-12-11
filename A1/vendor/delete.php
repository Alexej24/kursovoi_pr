<?php
require_once '../config/connect.php';

$id = $_GET['id'];
$table_name = $_GET['table_name'];

mysqli_query($connect, "DELETE FROM `$table_name` WHERE `$table_name`.`id` = '$id'");

header('Location: ../admin.php');
?>