<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "students");

$query = "select * from contact_information WHERE id= $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);
//header('location:list_contact.php');

print_r($row);

?>
<p></p>
    <a href="list_personal.php">Back to table view</a>
