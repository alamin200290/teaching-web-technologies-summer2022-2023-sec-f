<?php 
    require_once('db.php');
    function login($username, $password){
        $con = getConnection();
        $sql = "select * from users where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    function addUser($username, $password, $email){
        $con = getConnection();
        $sql = "insert into users values('', '{$username}', '{$password}', '{$email}')";
        if(mysqli_query($con, $sql)){
           return true;
        }else{
            return false;
        }
    }

    function getAllUser(){

    }

    function deleteUser(){

    }

    function updateUser(){

    }

?>