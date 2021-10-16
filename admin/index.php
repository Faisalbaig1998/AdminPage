<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<style>
    body,
    head {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    input {
        margin-top: 20px;
        width: 300px;
        height: 30px;
    }

    .container span a {
        color: black;
        text-decoration: none;
    }

    .container span {
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 2px;
        background-color: #EFEFEF;
        border: 1px solid #8D8D8D;
        font-family: cursive;
        font-size: large;
        width: 100px;
        height: 40px;
    }

    .buttonCon {
        margin-top: 20px;
        display: flex;
        justify-content: space-around;
    }

    button {
        font-family: cursive;
        font-size: large;
        width: 100px;
        height: 40px;
    }

    .container {
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        height: 270px;
        /* background-image: linear-gradient(45deg,red 50%,black 50%); */
        box-shadow: 0px 5px 10px gray;
        width: 470px;
        border-top: 2px solid black;
        border-right: 2px solid black;
        border-bottom: 2px solid red;
        border-left: 2px solid red;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

<body style="width: 100%;height:100vh;display:flex;justify-content:center;align-items:center">
    <div class="container">
        <form action="action.php" method="POST">
            <h2 style="text-align: center;">Login</h2>
            <input type="text" placeholder="Username" name="username">
            <br>
            <input type="password" placeholder="Password" name="password">
            <br>
            <div class="buttonCon">
                <button type="submit">Submit</button>
                <span>
                    <a href="Registration.php">Sign Up</a>
                </span>
            </div>
        </form>
    </div>
</body>

</html>