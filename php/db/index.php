<?php 

    $conn = mysqli_connect('127.0.0.1', 'root', '', 'webtech');

    // if($conn){
    //     echo "success";
    // }else{
    //     echo "DB error";
    // }

    //$data = mysqli_fetch_assoc($result);
    //$count = mysqli_num_rows($result);
    //echo $count;

    // for($i=0; $i<8; $i++){
    //     $data = mysqli_fetch_assoc($result);
    //     print_r($data);
    //     echo "<br>";
    // }

    $sql = "insert into users values('','XYZ', '124', 'XYZ@aiub.edu')";
    $result = mysqli_query($conn, $sql);

    $sql = "select * from users";
    $result = mysqli_query($conn, $sql);

    while($data = mysqli_fetch_assoc($result)){
        print_r($data);
        echo "<br>";
    }
?>