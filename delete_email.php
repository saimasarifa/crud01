<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "students");

$query = "DELETE FROM `students`.`emails` WHERE `emails`.`id` = $id";

mysqli_query($link, $query);

header('location:list_email.php');

?>