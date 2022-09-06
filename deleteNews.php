<?php
    require 'database_connect.php';
    require 'session.php';

    $id=$_GET['id'];

    $query="delete from news where news_id=".$id.";";
    if(mysqli_query($conn,$query)){
        header('location:Admin-tables-general.php');
    }
    else{
        echo mysqli_error($conn);
    }
?>