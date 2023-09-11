<?php
error_reporting(0);
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "contact1";


$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
    echo " CONNECTION OK";
}

else{
    echo "CONNECTION FAILED";
}