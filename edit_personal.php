<?php

$id = $_GET['id'];


$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "students");

$query = "UPDATE  `students`.`personal_information` SET full_name ='saima' WHERE `personal_information`.`id` =$id";


$result=mysqli_query($link, $query);


//mysql_fetch_array($result);
?>
<ul>
    <li><a href="addin_personal.html">edit</a> </li>
</ul>
<a href="list_personal.php">Back to Home</a>

