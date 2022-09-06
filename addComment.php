<?php
    require 'database_connect.php';
    require 'session.php';

    $msg=$_POST['comment'];
    $email=$_SESSION['logged_email'];
    $id=$_POST['post_id'];
    $role=$_SESSION['role'];

    $query="insert into comment(post_id,user_email,msg,date,time,role) values($id,'$email','$msg',curdate(),current_time(),'$role');";
    if(mysqli_query($conn,$query)){
        //echo $role;
        header('location:Community.php');
    }
    else{
        echo mysqli_error($conn);
    }

?>