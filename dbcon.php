<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sparksbank";
$port = "3307";

$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

if(!$conn){
    die("Could'nt connect to database".mysqli_connect_error());
}

 ?>
