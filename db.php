<?php
// Database connection
function conn(){
    $hostname = "localhost";
    $usuariodb = "root";
    $passworddb = "";
    $dbname = "dbregister";

    $conn = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);
    return $conn;
}
?>
