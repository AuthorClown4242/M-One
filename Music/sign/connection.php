<?php

$server_name="localhost";
$username="root";
$password="root";
$dbname="music";

$connection=mysqli_connect($server_name,$username,$password,$dbname);
if(!$connection){
    die("not" .mysqli_connect_error());
}
else{
    echo"connected";
}

?>