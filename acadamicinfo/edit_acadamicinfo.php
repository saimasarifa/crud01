<?php

$id = $_GET['id'];


$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "students");

$query = "select * from academic WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

//var_dump($row['distric']);


?>

<form action="update_academicinfo.php" method="post">

    <h1> contact info edit form</h1>

    <label>ID:</label>
    <input type="text" name="id" value="<?php echo $row['id'];?>" /><p>

        <label>level of education:</label>
        <input type="text" name="level_of_education" value="<?php echo $row['level_of_education'];?>" /><p>

        <label>exam title:</label>
        <input type="text" name="exam_title" value="<?php echo $row["exam_title"];?>" /><p>
        <label>group/subject</label>
        <input type="text" name="group_subject" value="<?php echo $row["group_subject"];?>" /><p>
        <label>institution:</label>
        <input type="text" name="institution" value="<?php echo $row["institution"];?>" /><p>
        <label>result type:</label>
        <input type="text" name="result_type" value="<?php echo $row["result_type"];?>" /><p>
        <label>result</label>
        <input type="text" name="result" value="<?php echo $row["result"];?>" /><p>
        <label>passing year:</label>
        <input type="text" name="passing_year" value="<?php echo $row["passing_year"];?>" /><p>
        <label>duration:</label>
        <input type="text" name="duration" value="<?php echo $row["duration"];?>" /><p>
        <label>achievement</label>
        <input type="text" name="achievement" value="<?php echo $row["achievement"];?>" /><p>




        <button type="submit">update</button>

</form>

<a href="../contactinfo/list_contactinfo.php">Back to Home</a>
