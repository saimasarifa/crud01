<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "students");

$query = "UPDATE  `contact_information` SET district ='mirpur' WHERE `contact_information`.`id` =$id";

$result=mysqli_query($link, $query);


//mysql_fetch_array($result);
?>
<ul>
    <li><a href="addin_contact.html">edit</a> </li>
</ul>
<a href="list_contact.php">Back to Home</a>

