<?php 
    require_once('../model/userModel.php');

    $allUser = getAllUser();

    //print_r($allUser);

?>


<html lang="en">
<head>
    <title>Userlist</title>
</head>
<body>

        <a href="home.php"> Back </a> |
        <a href="../controller/logout.php"> Logout </a>
        <br><br>

        <table border="1">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Pasword</td>
                <td>Email</td>
                <td>Action</td>
            </tr>
            <?php for($i=0; $i < count($allUser); $i++){ ?>
            <tr>
                <td><?=$allUser[$i]['id']?></td>
                <td><?=$allUser[$i]['username']?></td>
                <td><?=$allUser[$i]['password']?></td>
                <td><?=$allUser[$i]['email']?></td>
                <td> 
                    <a href="edit.php?id=<?=$allUser[$i]['id']?>">Edit</a> | 
                    <a href="delete.php">Delete</a> 
                </td>
            </tr>
            <?php } ?>

        </table>
</body>
</html>