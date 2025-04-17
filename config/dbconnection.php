<?php
session_start();

$servername="localhost";
$username="root";
$password = "";
$dbname="rdl";


$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    echo "Failed to connect to the server due";
}

?>