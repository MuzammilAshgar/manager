<?php
session_start();
 include('conntion.php');
    
    if (isset($_POST['sign_in'])) {
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    
    $check_user ="SELECT * FROM $table WHERE user_email='$email' AND user_password='$pwd'";
    $res = mysqli_query($conn,$check_user);
    $sql = mysqli_num_rows($res);
    
    if ($sql == 1) {
    $user = $_SESSION['user_email'] = $email;   
    $updata = mysqli_query($conn,"UPDATE $table 
    set log_in='Online'
    WHERE user_email='$email'");

    $get_user = "SELECT * FROM $table WHERE user_email='$email' ";
    $run_userdate = mysqli_query($conn,$get_user); 
    $row =$run_userdate->fetch_assoc();
    $user_name = $row['user_name'];
    
    header("refresh: 1; url=../pages/main/index.php?user_name=$user_name");

        

    } 
    else{
        echo"<script>alert('Check Your Email or Password')</script>";
       
        header("refresh: 1; url=../../signin.html");
        exit();

    }

}


?>