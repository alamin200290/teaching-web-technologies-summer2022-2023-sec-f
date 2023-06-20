<?php 
    session_start();

    if(isset($_POST['submit']))
    {
        //print_r($_GET);
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username == "" || $password == ""){
            //echo "null username/password";
            header('location: index.php?msg=null');
        }else if($username == $password){
            //echo "valid user!";
            //$_SESSION['flag'] = 'true';
            setcookie('flag', 'true', time()+3600, '/');
            header('location: home.php');
        }else{
            //echo "invalid username/password";
            header('location: index.php?msg=invalid');
        }
    }else{
        header('location: index.php');
    }
?>