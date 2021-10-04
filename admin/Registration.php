<?php
$msg = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include 'connection.inc.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number =  $_POST['number'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    // $img = $_POST['img'];
    $exists = false;

    $sql =  " SELECT * FROM users WHERE email = '$email' ";
    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);
    if($num>0){
        echo 'username already exists';
        $exists = true;
    }
    else{
        if (($password == $cpassword) && $exists == false) {
            $query = "INSERT INTO `users`(`name`, `number`, `email`, `username`, `password`, `gender`, `dob`) VALUES ('$name', '$number', '$email', '$username', '$password', '$gender', '$dob')    ";
            if (mysqli_query($con, $query)) {
                $msg = '
        <div class="msg" style="font-family:cursive;display:flex;align-items:center;background-color:#90EE90;width:100%;height:40px;border:1px solid green;border: radius 5px;">
            <p style="color:green" ><strong style="color:green;">Success! </strong>Your Record has been saved</p>
        </div>';
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
            }
        } else {
            echo "error";
        }
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

<style>
* {
    margin: 0;
    padding: 0;
}
</style>

<body>
    <?php
    if ($msg != "") {
        echo $msg;
    }

    ?>
    <div id="main" style="margin-top: 20px;">
        <form action="Registration.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Name" /><br />
            <input type="email" name="email" placeholder="Email" /><br />
            <input type="tel" name="number" placeholder="9349033445" /><br />
            <input type="text" name="username" placeholder="Username" /><br />
            <input type="password" name="password" placeholder="Password" /><br />
            <input type="password" name="cpassword" placeholder="Confirm Password" /><br />
            <small>Make sure your password is same</small><br>
            <p>Choose Profile Pic</p>
            <input type="file" name="img" accept="image/*" /><br />
            <input type="radio" id="male" name="gender" value="male" />
              <label for="gender">Male</label><br />
            <input type="radio" id="female" name="gender" value="female" />
              <label for="gender">Female</label><br />
            <input type="date" name="dob" id="dob">
            <button type="submit" name="submit">Submit</button>
            <h1>
            </h1>
        </form>
    </div>
</body>

</html>