<?php

$server ='localhost';
$username ="root";
$password ="";
$database = "todo";


$con = mysqli_connect($server ,$username, $password, $database);

if($con){
//    echo "connection ok";

   
}
else{
    echo "connection failed".mysqli_connect_error();
}


?>