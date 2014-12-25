<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "students");

$query = "select * from emails WHERE id= $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);
//header('location:list_contact.php');

print_r($row);


?>
<p></p>
<a href="list_email.php">Back to table view</a>
