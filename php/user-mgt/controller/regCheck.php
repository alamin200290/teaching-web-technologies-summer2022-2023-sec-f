<?php 
    //include('db.php');
    include_once('../model/userModel.php');

    session_start();
    
    if(isset($_POST['submit']))
    {
        //print_r($_GET);
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        
       // print_r($_FILES);

        $src = $_FILES['myfile']['tmp_name'];
        $des = "../upload/".$_FILES['myfile']['name'];


        if(move_uploaded_file($src, $des)){
            echo "success";
        }else{
            echo "error";
        }

        $status = addUser($username, $password, $email);

        if($status){
            header('location: ../view/login.php');
        }else{
            header('location: ../view/signup.php');
        }
    }else{
        header('location: ../view/login.php');
    }
?>