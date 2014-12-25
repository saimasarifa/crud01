<?php


$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "students");

$query = "INSERT INTO `students`.`personal_information`( `id`,
`full_name`,
`father's_name`,
`mother's_name`,
`religion`,
`date_of_birth`,
`gender`,
`nationality`,
`national_id`

)
VALUES ('".$_POST['id']."','".$_POST['fullname']."','".$_POST['fathername']."','".$_POST['mothername']."'
,'".$_POST['religion']."','".$_POST['date_of_birth']."','".$_POST['gender']."','".$_POST['nationality']."',
'".$_POST['national_id']."');";

mysqli_query($link, $query);

header('location:list_personal.php');
?>
