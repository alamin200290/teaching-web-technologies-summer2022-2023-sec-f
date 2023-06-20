<?php 
    session_start();

    if(!isset($_COOKIE['flag'])){
       header('location: index.php'); 
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head> 
<body>
        <h1>Welcome Home!</h1>

        <a href="add_user.php"> Add New User</a> | 
        <a href="view_users.php"> View All User</a> |
        <a href="logout.php"> Logout </a> 

</body>
</html>