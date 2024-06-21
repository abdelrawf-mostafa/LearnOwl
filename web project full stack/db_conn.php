<?php
$server_name= "localhost";
$username= "root";
$password="";
$db_name="simple_register";


$conn= mysqli_connect($server_name,$username,$password,$db_name);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error()) . "<br>";
}
else{
    echo "Connected to database Successfully" . "<br>";
}


