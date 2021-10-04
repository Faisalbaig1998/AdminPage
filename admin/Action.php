<?php
include 'connection.inc.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "Select * From users WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result);

echo $num;
if($num>0){
    echo "user already exist";
    header("location: Registration.php");
}
else{
    echo "";
    exit();
}

// $query = " SELECT `username` FROM users";
?>
