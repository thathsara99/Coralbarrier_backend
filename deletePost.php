<?php
    require 'database_connect.php';
    require 'session.php';

    $id=$_GET['pid'];
    $email=$_GET['email'];

    $query="delete from post where user_email='".$email."' and post_id=".$id.";";
    if(mysqli_query($conn,$query)){
        header('location:Community.php');
    }
    else{
        echo mysqli_error($conn);
    }
?>