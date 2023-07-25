<?php 
    //sleep(3);
    //$user = $_REQUEST['user'];
    //$data = json_decode($user);
    
    $user = ['username'=> 'alamin', 'password'=>'1234', 'email'=> 'alamin@aiub.edu'];
    echo json_encode($user);

?>