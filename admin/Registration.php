<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include 'connection.inc.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number =  $_POST['number'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $gender = $_POST['gender'];
    $exists = false;
    if (($password == $cpassword) && $exists == false) {
        $query = "INSERT INTO `users`(`name`, `number`, `email`, `username`, `password`, `gender`) VALUES ('$name', '$number', '$email', '$username', '$password', '$gender')";
        if (mysqli_query($con, $query)) {
            echo "New Record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($con);
        }
    } else {
        echo "error";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign In</title>
</head>

<body>

    <div id="main">
        <form action="Registration.php" method="POST">
            <input type="text" name="name" placeholder="Name" /><br />
            <input type="email" name="email" placeholder="Email" /><br />
            <input type="tel" name="number" placeholder="9349033445" /><br />
            <input type="text" name="username" placeholder="Username" /><br />
            <input type="password" name="password" placeholder="Password" /><br />
            <input type="password" name="cpassword" placeholder="Confirm Password" /><br />
            <small>Make sure your password is same</small><br>
            <!-- <p>Choose Profile Pic</p> -->
            <!-- <input type="file" name="img" accept="image/*" /><br /> -->
            <input type="radio" id="male" name="gender" value="male" />
              <label for="gender">Male</label><br />
            <input type="radio" id="female" name="gender" value="female" />
              <label for="gender">Female</label><br />
            <button type="submit" name="submit">Submit</button>
            <h1>
            </h1>
        </form>
    </div>
</body>

</html>