<?php
    session_start();
    include_once "data-base-connect/config.php";
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if(!empty($name) && !empty($email) && !empty($password)){
echo"woring";
    }
    else{
        echo"all field are require";
    }
?>