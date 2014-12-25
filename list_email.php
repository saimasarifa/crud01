
<?php

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "students");

$query = "select * from emails;";

$result = mysqli_query($link, $query);


?>
<h1>contact  information table</h1>

<table border="1" width="100%">
    <tr>
        <td>id</td><p>
        <td>email</td>
        <td>created</td>

        <td> </br> Action</td>

    </tr>
    <?php
    foreach($result as $row){
        ?>

        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row["created"]?></td>



            <td>

                <a href="../view_email.php?id=<?php echo $row['id']?>">see</a> |

                <a href="delete_email.php?id=<?php echo $row['id']?>">Delete</a> |

            </td>
        </tr>

    <?php
    }
    ?>

</table>
