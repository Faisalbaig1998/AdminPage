<?php

$username = 'root';
$password =  '';
$server = 'localhost';
$db = 'contact database';


$con = mysqli_connect($server,$username,$password,$db);

if($con){
    // echo 'Connection successful';
}
else{
    echo 'No Connection';
    // die("no connection".mysqli_connect_error());
}

?>