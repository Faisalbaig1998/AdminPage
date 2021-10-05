<?php
include 'connection.inc.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($con,$query);
$num = mysqli_num_rows($result);

if($num>0){
    session_start();
    $_SESSION['ADMIN_USER'] = $username;
    $_SESSION['STATUS'] = true;
    header('location: welcome.php');
}
else{
    echo 'Invalid cardentials';
}

// $query = " SELECT `username` FROM users";
