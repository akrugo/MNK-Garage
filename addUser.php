<?php
    include "connect.php";
    $username = $_POST['username'];
    $password = $_POST['password_user'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $requet = "INSERT INTO User(username, password_user, email, telephone )
    VALUES
    ('$username', '$password', '$email', '$telephone')";
    
    if(mysqli_query($conn, $requet)){
        echo $script;
        header("Location: login-register.php");
    }else{
        exit();
    }
?>