<?php

$id = $_GET['id'];
//$lastname = $_GET['last_name'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "students");

$query = "UPDATE  `contact_information` SET district ='dhak' WHERE `contact_information`.`id` =$id";
//$query ="UPDATE  `students`.`users` SET last_name=' ' WHERE `users`.`ID` = $id";
//$query = "update users WHERE ID= $id";

$result=mysqli_query($link, $query);


//mysql_fetch_array($result);
?>
<ul>
    <li><a href="addin_contact.html">edit</a> </li>
</ul>
<a href="list_contact.php">Back to Home</a>

