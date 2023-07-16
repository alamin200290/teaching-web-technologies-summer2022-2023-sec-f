<?php 
    require_once('../model/userModel.php');
    $id = $_GET['id'];
    $user = getUser($id);
?>

<html lang="en">
<head>
    <title>Edit User</title>
</head>
<body>
        <form method="POST" action="" enctype="multipart/form-data">
            username:   <input type="text" name="username" value="<?=$user['username']?>" /><br>
            password:   <input type="password" name="password" value="<?=$user['password']?>" /> <br>
            Email:      <input type="email" name="email" value="<?=$user['email']?>" /> <br>
            Image:      <input type="file" name="myfile" value="" /> <br>
                        <input type="submit" name="submit" value="Update" />
                        
        </form>    
</body>
</html>