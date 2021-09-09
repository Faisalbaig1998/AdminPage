<?php
include('connection.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    echo $name;
    $email = $_POST['email'];
    echo $email;
    $number = $_POST['number'];
    echo $number;
    $message = $_POST['message'];
    echo $message;

    $insertquery = " insert into contacts(name, email, number, message) values('$name','$email','$number','$message') ";

    mysqli_query($con, $insertquery);
}
echo '<a href="index.php">Click here to go home</a>';

?>