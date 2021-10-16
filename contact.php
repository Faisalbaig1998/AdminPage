    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Contact Us</title>
    </head>
    <style>
        *{
            margin:0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>

    <body>
        <div class="container-fluid m-0">
            <h1 class="text-center bg-dark text-light">Contact Us</h1>
        </div>
        <div class="container col-6
         ">
            <form class="row g-3">
                <div class="col-md-6">
                    <label for="inputfirstname" class="form-label">First name</label>
                    <input type="text" name="fname" class="form-control" id="inputfirstname">
                </div>
                <div class="col-md-6">
                    <label for="inputlastname" class="form-label">Last name</label>
                    <input type="text" name="lname" class="form-control" id="inputlastname">
                </div>
                <div class="col-md-6">
                    <label for="inputNumber" class="form-label">Number</label>
                    <input type="number" class="form-control" id="inputNumber">
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

    </body>

    </html>