<?php
session_start();
include "connect.php";
    $email = $_POST['email'];
    $pass = $_POST['password_user'];
    $error = "";
    $succes = "";
   
    $requet = "SELECT id_user ,email , password_user FROM User WHERE email = '$email' AND password_user='$pass'";
    $result = mysqli_query($conn, $requet);
    if(mysqli_num_rows($result)>0){
     $row = $result->fetch_row();
     $_SESSION['id_user']=$row[0];
    header("Location: inventory-list.php"); 
    }
    else{
        //header("Location: test.php?msg=L'email ou le mot de passe est incorrecte !"); 
        //header("Location: login-register.php?echo"<script>alert('email ou le mot de passe est incorrecte !')</script>";"); 
        header("Location: login-register.php");
        echo"<script>alert('email ou le mot de passe est incorrecte !')</script>";
        
    }
    ?>