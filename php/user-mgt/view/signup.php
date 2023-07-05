<html lang="en">
<head>
    <title>Signup Page</title>
</head>
<body>
        <form method="POST" action="../controller/regCheck.php" enctype="multipart/form-data">
            username:   <input type="text" name="username" value="" /><br>
            password:   <input type="password" name="password" value="" /> <br>
            Email:      <input type="email" name="email" value="" /> <br>
            Image:      <input type="file" name="myfile" value="" /> <br>
                        <input type="submit" name="submit" value="Submit" />
                        <a href="login.php"> Login </a> 
        </form>    
</body>
</html>