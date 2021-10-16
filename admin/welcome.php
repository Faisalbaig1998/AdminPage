<?php 
session_start();
if(isset($_SESSION['ADMIN_USER']) && $_SESSION['STATUS']){
    echo 'You are now logged in <br/>';
    echo  "Hi ".$_SESSION['ADMIN_USER'];
}
else{
    echo '<p>You are not logged in Please <a href="index.php">Login </a></p>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="logout">
        <a href="logout.php">Logout</a>
    </div>
    <div class="category">
        <a href="categories.php">Category</a>
    </div>
</body>
</html>