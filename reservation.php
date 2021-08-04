<?php
session_start();
include "connect.php";
$date = date("Y/m/d");
$user = $_SESSION['id_user'];
   
   $requet = "INSERT INTO Contrat(date_contrat, id_moto, id_user ) VALUES ( '$date', '$_POST[id_moto]', '$user')";
    if(mysqli_query($conn, $requet)){
        header("Location: reserve_succes.php");
    }else{
        exit();
    }
    
    ?>