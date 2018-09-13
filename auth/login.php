<?php
//Start session
session_start();
//Connect to the database
include("connection.php");
//Check user inputs
    //Define error messages
$errors = '';
$missingEmail = '<p><stong>Please enter your email address!</strong></p>';
$missingPassword = '<p><stong>Please enter your password!</strong></p>'; 
    //Get email and password
    //Store errors in errors variable
if(empty($_POST["loginemail"])){
    $errors .= $missingEmail;   
}
else{
    $email = filter_var($_POST["loginemail"], FILTER_SANITIZE_EMAIL);
}

if(empty($_POST["loginpassword"])){
    $errors .= $missingPassword;   
}
else{
    $password = filter_var($_POST["loginpassword"], FILTER_SANITIZE_STRING);
}
    //If there are any errors
if($errors){
    //print error message
    $resultMessage = '<div class="alert alert-danger">' . $errors .'</div>';
    echo $resultMessage;   
}
else{
    //else: No errors
    //Prepare variables for the query
    $email = mysqli_real_escape_string($link, $email);
    $password = mysqli_real_escape_string($link, $password);
    $password = hash('sha256', $password);
        //Run query: Check combinaton of email & password exists
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password' AND activation='activated'";
    $result = mysqli_query($link, $sql);
    if(!$result){
        echo '<div class="alert alert-danger">Error running the query!</div>';
        exit;
    }
            //If email & password don't match print error
    $count = mysqli_num_rows($result);
    if($count !== 1){
        echo '<div class="alert alert-danger">Wrong Username or Password</div>';
    }
    else {
        //log the user in: Set session variables
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $_SESSION['id']=$row['id'];
        $_SESSION['name']=$row['name'];
        $_SESSION['email']=$row['email'];
        echo 'success';
    }
}

