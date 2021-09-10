<?php include('header.inc.php') ?>
<!-- Main Starts here -->
<div id="main">
    <form action="Action.php" method="POST">
        <h2>Sign In</h2>
        <input type="text" name="fname" placeholder="First Name" />
        <input type="text" name="lname" placeholder="Last Name" />
        <input type="email" name="email" placeholder="E-mail" />
        <input type="text" name="number" placeholder="4895495945" autocomplete="mobile" required />
        <!-- <input type="text" name="message"> -->
        <button type="submit" name="submit">Submit</button>
        <!-- <input type="submit" name="submit" /> -->
    </form>
</div>
<!-- Main Ends Here -->
<?php include('footer.inc.php') ?>