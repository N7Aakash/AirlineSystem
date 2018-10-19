<?php

require_once("../../includes/functions.php");
require_once("../mail_verify/Mailer.php");
session_start();
if(isset($_POST['register'])){
//    $user_id = $_SESSION['user_id'];
    $user_name=$_POST['user_name'];
    $user_email= $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_contact = $_POST['user_contact'];
    
    $hash_password = password_hash($user_password, PASSWORD_DEFAULT);
    
    $query = "SELECT * FROM users WHERE user_email= '$user_email'";
    $result = mysqli_query($connection,$query);
    
    if(mysqli_num_rows($result)!=0){
        die("user already exists ! ");
    }
    else{
        $query = "INSERT INTO users(user_name,user_password,user_email,user_phone,user_role_id,is_verified) VALUES('$user_name','$hash_password','$user_email',1,$user_contact, '0')";
        $result = mysqli_query($connection,$query);
        checkQueryResult($result);
        echo "<br>$user_email";
        $user_id =  mysqli_insert_id($connection);
        echo $user_id;
        sendMail($user_email,$user_id);
        header("location: ../mail_verify/verify.php");
    }
    
    
    
    
}

?>