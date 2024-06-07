<?php
include('conntion.php');

if(isset($_POST['sign_up'])){
    $data = [
    $user_name = $_POST['username'],
    $password = $_POST['spassword'],
    $email = $_POST["semail"],
    $county = $_POST['Ucountry'],
    $gender = $_POST['Ugender']];

    // data are be check here 
    $bool = 1;
   foreach($data as $user_data){
    if ($user_data == "" or $user_data == null ) {
        $bool = 0;
        exit();
        break;
        
    }}
    // here well be email chech
    $check_email = "SELECT * FROM $table WHERE user_email = '$email'";
    $run = mysqli_query($conn, $check_email);
     if (mysqli_num_rows($run) == 1) {
        echo"<script>alert('Email Already exist, Please Enter other Email')</script>";
        header("refresh: 1; url=signup.php");
        exit();
    }
    // insert are date in datebase
    if($bool == 1){
        $sql = "INSERT INTO $table set
        user_name = '$data[0]',
        user_password = '$data[1]',
        user_email = '$data[2]',
        user_country = '$data[3]',
        user_gender = '$data[4]'
        ";
        // check data is insert of data base
        // $res = mysqli_query($conn ,$sql);
        if (!1 == 1) {
        echo"<script>alert('Conratulations $user_name Your account has been created Successfully ')</script>";
        header('refresh: 1; url=../../signin.html');
        
        }
        else{
        echo"<h1>ERROR Plz try later </h1>";
        header("refresh: 4; url=../pages/signup.php");
        exit();

         }

    }
    else{
        echo"<h1>ERROR Plz try later </h1>";
        header("refresh: 4; url=../pages/signup.php");
        exit();
        
    }


}



?>