<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign In</title>
  <link rel="stylesheet" href="../css/Registration.css" />
  <script src="../javascript/Registration.js"></script>
</head>

<body>
  <header></header>
  <div id="main">
    <form action="#" method="POST">
      <input type="text" name="name" placeholder="Name" /><br />
      <input type="email" name="email" placeholder="Email" /><br />
      <input type="tel" name="number" placeholder="9349033445" /><br />
      <input type="text" name="username" placeholder="Username" /><br />
      <input type="password" name="password" placeholder="Password" /><br />
      <p>Choose Profile Pic</p>
      <input type="file" name="img" accept="image/*" /><br />
      <input type="radio" id="male" name="gender" value="male" checked />
        <label for="gender">Male</label><br />
      <input type="radio" id="female" name="gender" value="female" />
        <label for="gender">Female</label><br />
      <button type="submit" name="submit">Submit</button>
      <h1>
        <?php
        $gender = $_POST['gender'];
        echo $gender;
        ?>
      </h1>
    </form>
  </div>
</body>

</html>