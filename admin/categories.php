<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
    }

    .header {
        display: flex;
        width: 100%;
        height: 70px;
        background-color: #2c2b2b;
    }

    .header2 {
        width: 100%;
        height: 10px;
        background-color: blue;
        box-shadow: 0px 5px 5px grey;
    }
</style>

<body>
    <!-- For heading Purpose only -->
    <div class="header"></div>
    <div class="header2"></div>
    <form action="categories.php" method="POST">
        <input type="text" name="cname">
        <input type="text" name="description">
    </form>
</body>

</html>