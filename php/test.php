<?php 

    //print_r($_GET);
    $username = $_GET['username'];
    $password = $_GET['password'];

    if($username == "" || $password == ""){
        //echo "null username/password";
        header('location: index.php?msg=null');
    }else if($username == $password){
        //echo "valid user!";
        header('location: home.html');
    }else{
        //echo "invalid username/password";
        header('location: index.php?msg=invalid');
    }
?>