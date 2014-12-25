<?php



$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "students");

$query = "INSERT INTO `students`.`contact_information`( `id`,
`present_address`,
`district`,
`mobile`,
`emergency_contact`,
`email`

)
VALUES ('".$_POST['id']."','".$_POST['present_address']."','".$_POST['district']."','".$_POST['mobile']."'
,'".$_POST['emergency_contact']."','".$_POST['email']."');";

mysqli_query($link, $query);

header('location:list_contact.php');

?>