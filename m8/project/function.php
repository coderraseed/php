<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    
    // Check if all input fields are filled
    if(empty($name) || empty($email) || empty($username) || empty($password) || empty($confirm_password)) {
        echo "All input fields are required";
        exit();
    }
    
    // Check if password and confirm password match
    if($password != $confirm_password) {
        echo "Password and Confirm Password do not match";
        exit();
    }
    
    // TODO: Add code to save user data to database or file
    
    // Redirect to login.php and show the username and password
    header("Location: login.php?username=$username&password=$password");
    exit();
}
