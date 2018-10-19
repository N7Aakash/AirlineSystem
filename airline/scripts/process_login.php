<?php
require_once("../includes/functions.php");
session_start();
if(isset($_POST['submit'])){
    $user_email=$_POST['user_email'];
    $user_password=$_POST['password'];
    
    $username= mysqli_real_escape_string($connection,$user_email);
    $password= mysqli_real_escape_string($connection,$user_password);
    
    $query = "SELECT * FROM users WHERE user_email='$user_email'";
    
    $result = mysqli_query($connection,$query);
    checkQueryResult($result);
    
    if(mysqli_num_rows($result)>1){
        die("sorry ! Seems like something went wrong");
    }
    
    if($row= mysqli_fetch_assoc($result))
    {
        //i have 1 row
        $db_password=$row['user_password'];
        $user_id=$row['user_id'];
    }
    else{
        $db_password ="";
    }
    
    if(password_verify($password,$db_password))
    {
        $_SESSION['user_id']= $user_id;
//        header("location: ../index.php");
//        echo "<br>hello you are logged in and being checked if fully registered!";
        
        //checking the full verification of the user !
        $user_verified=$row['is_verified'];
//        echo '<br>'.$user_verified;
        if($user_verified==1){
//            echo "<br> welcome to the website";
            header("location: ../index.php");
        }
        else{
//            echo "thank you for registering. Please verify your email by clicking on the link we have sent you!";
            header("location: mail_verify/verify.php");
        }
    }
    else{
        die("bhau ghari jaaun jhopa");
        //header();
    }
}
?>