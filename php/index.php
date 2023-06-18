<?php 

    if(isset($_GET['msg'])){
        if($_GET['msg'] == 'invalid'){
            echo "invalde username/password";
        }else if($_GET['msg'] == 'null'){
            echo "null username/password";
        }
    }
?>

<html lang="en">
<head>
    <title>Login Page</title>
</head>
<body>
        <form method="get" action="test.php" enctype="">
            username:   <input type="text" name="username" value="" /><br>
            password:   <input type="password" name="password" value="" /> <br>
                        <input type="submit" name="submit" value="Submit" />
        </form>    
</body>
</html>