<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "students");
$query = "select * from users WHERE id = $id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
?>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />
    <label>First Name:</label>
    <input type="text" name="firstName" value="<?php echo $row['first_name'];?>" />
    <label>Last Name:</label>
    <input type="text" name="lastName" value="<?php echo $row['last_name'];?>" />
    <button type="submit">Submit</button>
</form>
