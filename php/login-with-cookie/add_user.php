

<html lang="en">
<head>
    <title>Add User</title>
</head>
<body>

        <a href="home.php"> Back</a> |
        <a href="logout.php"> Logout </a> 

        <form method="POST" action="loginCheck.php" enctype="">
            <fieldset>
                <legend>Add new</legend>
                username:   <input type="text" name="username" value="" /><br>
                password:   <input type="password" name="password" value="" /> <br>
                Email:   <input type="email" name="email" value="" /> <br>
                Cgpa:   <input type="text" name="cgpa" value="" /> <br>
                        <input type="submit" name="submit" value="Add" />
            </fieldset>
        </form>    
</body>
</html>