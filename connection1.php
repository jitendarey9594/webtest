<?php
error_reporting(0);
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "book";


$conn1 = mysqli_connect($servername,$username,$password,$dbname);

if($conn1){
    echo " CONNECTION OK";
}

else{
    echo "CONNECTION FAILED";
}