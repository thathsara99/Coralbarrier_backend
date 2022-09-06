<?php
    include ('database_connect.php');

    class CrudOperation{
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        function add_user($name,$email,$country,$contact_no,$password){
            global $conn;
            $password=  md5($password);
            $sql="insert into users(name,email,country,contact_no,password) values('".$name."','".$email."','".$country."','".$contact_no."','".$password."')";
            if($conn->query($sql)===true){
                return "success";
            }
            else{
               return 'fail';
            }

        }

        function add_admin($name,$email,$password){
            global $conn;
            $password=  md5($password);
            $sql="insert into admins(name,email,password) values('".$name."','".$email."','".$password."')";
            if($conn->query($sql)===true){
                return "success";
            }
            else
                return "fail";
        }

        function user_email_duplicate_check($email){
            global $conn;
            
            $sql="select * from users where email='".$email."'";
            
            $result=$conn->query($sql);
            
            if($result->num_rows>0){
                return true;
            }
            else{
                return false;
            }
        }

        function admin_email_duplicate_check($email){
            global $conn;
            
            $sql="select * from admins where email='".$email."'";
            
            $result=$conn->query($sql);
            
            if($result->num_rows>0){
                return true;
            }
            else{
                return false;
            }
        }


        function login($email,$password){
            global $conn;
            $password=  md5($password);
            
            $sql1="select * from users where email='".$email."' and password='".$password."'and role='user'" ;
            
            $result1=$conn->query($sql1);
            
            if($result1->num_rows>0){
                $row1=$result1->fetch_assoc();
                return $row1;
            }
            else{
                $sql2="select * from admins where email='".$email."' and password='".$password."' and role='admin'";
            
                $result2=$conn->query($sql2);
                
                if($result2->num_rows>0){
                    $row2=$result2->fetch_assoc();
                    return $row2;
                }
                else{
                    return "invalid";
                }
            }
        }

        function edit_admin($id,$name,$email,$img){
            global $conn;

            $sql="";
            if($img==""){
                $sql="update admins set name='".$name."',email='".$email."' where admin_id='".$id."'";
            }
            else{
                $sql="update admins set name='".$name."',email='".$email."',profile_pic='".$img."' where admin_id='".$id."'";
            }
            
            if($conn->query($sql)===true){
                return "success";
            }
            else{
                return "fail";
            }
        }


        function login_user_details($id,$role){
            global $conn;

            $sql="";
            
            if($role=="admin"){
                $sql="select * from admins where admin_id='".$id."'";
            }
            else{
                $sql="select * from users where user_id='".$id."'";
            }
            
            $result1=$conn->query($sql);
            
            $row1=$result1->fetch_assoc();
            return $row1;
            
        }

        function admin_password_change($id,$password,$newpassword){
            global $conn;
            $password=  md5($password);
            $newpassword=  md5($newpassword);
            $sql="select * from admins where admin_id='".$id."' and password='".$password."'";

            $result=$conn->query($sql);

            if($result->num_rows>0){
                $sql1="update admins set password='".$newpassword."'where admin_id='".$id."'";
                if($conn->query($sql1)===true){
                    return "success";
                }
                else{
                    return "fail";
                }
            }
            else{
                return "fail";
            }

        }

        function edit_user($id,$name,$email,$country,$contact_no,$img){
            global $conn;

            $sql="";
            if($img==""){
                $sql="update users set name='".$name."',email='".$email."',country='".$country."',contact_no='".$contact_no."' where user_id='".$id."'";
            }
            else{
                $sql="update users set name='".$name."',email='".$email."',country='".$country."',contact_no='".$contact_no."',profile_pic='".$img."' where user_id='".$id."'";
            }
            
            if($conn->query($sql)===true){
                return "success";
            }
            else{
                return "fail";
            }
        }

        function user_password_change($id,$password,$newpassword){
            global $conn;
            $password=  md5($password);
            $newpassword=  md5($newpassword);
            $sql="select * from users where user_id='".$id."' and password='".$password."'";

            $result=$conn->query($sql);

            if($result->num_rows>0){
                $sql1="update users set password='".$newpassword."'where user_id='".$id."'";
                if($conn->query($sql1)===true){
                    return "success";
                }
                else{
                    return "fail";
                }
            }
            else{
                return "fail";
            }

        }

    }
?>