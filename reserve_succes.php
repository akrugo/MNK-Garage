<?php
include "connect.php";

$requet = "SELECT id_contrat , date_contrat ,id_user, id_moto FROM Contrat order by id_contrat desc";
$result = mysqli_query($conn, $requet);

    if(mysqli_num_rows($result)>0){
     $row = $result->fetch_row();
        echo "Contrat : <br>";
        echo "<li> ID CONTRAT : ".$row[0]."</li>";
        echo "<li> ID MOTO : ".$row[3]."</li>";
        echo "<li> ID USER : ".$row[2]."</li>";
        echo "<li> DATE : ".$row[1]."</li>";
    }
    else{
    }
    
    ?>