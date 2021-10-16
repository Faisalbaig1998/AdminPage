<!DOCTYPE html>
<html>
  <head>
    <title>Admin Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Yatra+One&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Handlee&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Kaisei+HarunoUmi:wght@500&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Rampart+One&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- Navbar Start Here -->
    <div id="sidebar" class="vertical">
      <div>
        <a href="#">About</a>
        <a href="#">Contact Us</a>
        <a href="#">Cateogary</a>
        <a href="#">Users</a>
        <a href="#">I've made some </a>
        <a href="#">changes in</a>
        <a href="#">Experimental branch</a>
      </div>
    </div>
    <!-- Navbar Ends Here -->
    <script type="text/javascript" src="../javascript/myscript.js"></script>
    <!-- Header Starts here -->
    <div id="header">
      <h1>Dashboard</h1>
      <div id="profile">
        <img
          style="
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid rgb(241, 133, 8);
          "
          src="../images/002/DSC_6342.JPG"
          alt="Profile pic"
        />
        <img
          onclick="expand()"
          src="https://img.icons8.com/material-rounded/24/000000/sort-down.png"
        />
      </div>
      <!-- <div id="burger" onclick="expand()">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div> -->
      <!-- Login Details -->
      <div id="login-details">
        <a href="#">My Profile</a>
        <a href="#">Username</a>
        <a href="#">Logout</a>
      </div>
    </div>