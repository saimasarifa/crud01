<?php



$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "students");

$query = "INSERT INTO `students`.`emails`( `id`,
`email`,
`created`
)
VALUES ('".$_POST['id']."','".$_POST['email']."','".$_POST['created']."');";

mysqli_query($link, $query);


header('location:list_email.php');

?>
