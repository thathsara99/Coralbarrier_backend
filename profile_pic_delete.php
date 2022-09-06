<?php
    include ('database_connect.php');
    global $conn;
        if($_GET['role']=="admin"){
            
            $sql="update admins set profile_pic='' where admin_id=".$_GET['id'].";";

            if($conn->query($sql)===true){
                return header('location:Admin-users-profile.php');
            }
            
        }
        else{
            $sql="update users set profile_pic='' where user_id=".$_GET['id'].";";

            if($conn->query($sql)===true){
                return header('location:User Profile.php');
            }
        }  
    
?>