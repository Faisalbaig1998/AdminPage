<?php
include('connection.inc.php');
$username = $_POST['username'];
$password = $_POST['password'];
$query = " SELECT username, password FROM users ";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

while($row)
if ($username == $row['username'] && $password == $row['password']) {
    header("Location:http://localhost/airborneshoe/admin/index.php", true, 301);
} else {
    echo "invalid username or password";
    header("Location:http://localhost/airborneshoe/admin/signin.php");
}
