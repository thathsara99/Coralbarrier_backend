<?php
    include('session.php');
    require 'database_connect.php';

    $title=$_POST['title'];
    $description=$_POST['description'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $title=$_POST['title'];
    $type=$_POST['type'];
    $email=$_SESSION['logged_email'];


    $target_dir = "assets/img/News/";
    $target_file = $target_dir . basename($_FILES["news_image"]["name"]);
    if(!empty($target_file)){
        if (move_uploaded_file($_FILES["news_image"]["tmp_name"],$target_file)) {
            $query="insert into news(title,description,img,date,time,type,admin_email) values('$title','$description','$target_file','$date','$time','$type','$email');";
            if(mysqli_query($conn,$query)){
                header('location:Admin-forms-elements.php');
            }
            else{
                echo mysqli_error($conn);
            }

        }
        else{
            echo "<script>alert('cant upload file')</script>";
        }
    }
?>