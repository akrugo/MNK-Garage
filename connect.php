<?php
    $servername = "localhost";
    $username = "akru";
    $password = "akru";
    $dbname = "mnk_garage";

    // Create connection
    $GLOBALS['conn'] = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>