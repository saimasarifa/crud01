<?php

$id = $_POST['id'];
$presentaddress = $_POST['present_address'];
//$distric =$_POST['distric'];
$mobile =$_POST['mobile'];
$emergencycontact =$_POST['emergency_contact'];
$email = $_POST['email'];



$link = mysqli_connect("localhost",
    "root",
    "shimu",
    "students");

$query = "UPDATE `students`.`contactinfo` SET `present_address` = '".$presentaddress."' ,`distric` = '".$_GET['distric']."',
`mobile` = '".$mobile."',`emergency_contact` = '".$emergencycontact."',`email` = '".$email."'
 WHERE `contactinfo`.`id` = $id;";

mysqli_query($link, $query);

header('location:list_acadamicinfo.php');
?>