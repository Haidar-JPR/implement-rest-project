<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_mahasiswa";

$connection = mysqli_connect($servername, $username, $password, $dbname);
if (!$connection){
        die("Connection Failed:".mysqli_connect_error());
    }
?>