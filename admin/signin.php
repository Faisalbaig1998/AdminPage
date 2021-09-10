<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
    body,
    head {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    #container {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    form {
        border: 2px solid red;
    }

    input {
        width: 300px;
        height: 40px;
    }

    button {
        border: none;
        width: 100px;
        height: 40px;
    }

    button:active {
        border: 1px solid green;
        width: 100px;
        height: 40px;
    }

    #submit{
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        color: white;
        background-color: red;
    }

</style>

<body>
    <div id="container">
        <form action="#" method="POST">
            <input type="text" placeholder="Username">
            <br>
            <br>
            <input type="password" placeholder="Password">
            <br>
            <br>
            <div style="display: flex;justify-content:space-around">
                <button type="submit" name="submit" id="submit">Submit</button>
                <button >Sign In</button>
            </div>
        </form>
    </div>

</body>

</html>