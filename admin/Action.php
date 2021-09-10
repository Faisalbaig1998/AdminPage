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
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>
<style>
    body,
    head {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
</style>

<body>
    <div style="display: flex;justify-content: center;align-items: center;height: 100vh;">
        <div style="display: flex;justify-content: center;align-items: center;width: 300px;height: 100px;border:1px solid black;box-shadow: 4px 4px 10px 2px grey;">
            <span>
                <p><a href="index.php">Click here</a> to return home</p>
            </span>
        </div>
    </div>

    <script src="" async defer></script>
</body>

</html>