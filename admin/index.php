<?php include('header.inc.php') ?>
<!-- Main Starts here -->
<div id="main">
    <form action="Action.php" method="POST">
        <h2>Contact Us</h2>
        <input type="text" name="name" placeholder="Name" />
        <input type="email" name="email" placeholder="E-mail" />
        <input type="text" name="number" placeholder="4895495945" autocomplete="mobile" required />
        <textarea name="messagage" id="message"> </textarea>
        <button type="submit" name="submit">Submit</button>
        <!-- <input type="submit" name="submit" /> -->
    </form>
</div>
<!-- Main Ends Here -->
<?php include('footer.inc.php') ?>