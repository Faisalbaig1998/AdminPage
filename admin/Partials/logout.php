<?php 
session_start();
session_unset();
session_destroy();

echo 'You have been logged out <br/>';
echo 'Please <a href="index.php">Login</a>';
?>