<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            font-family: 'Roboto', sans-serif;
        }
    </style>

    <title>SDN SUKAPURA 01 | {{ $title }}</title>
  </head>
  <body style="background-color:rgb(175, 0, 0)">
    <div class="container" style="flex: 1; display: flex; flex-direction: column; justify-content:center; align-items:center;">
        <div class="card" style="display: flex; flex-direction:column; justify-content:center; align-items:center; width:500px; border-radius:10px; margin-top:3cm;">
            <img src="img/logo/logo.jpg" alt="Tutwuri Handayani" style="width: 100px">
            <h1 style="font-weight: bold; color:rgb(0, 0, 0)">SDN SUKAPURA 01</h1>
            <form action="" method="post" style="display: flex; flex-direction:column; justify-content: center; align-items:center;">
                <input class="form-control" type="text" placeholder="username" name="username" id="username" style="margin-bottom: 10px;">                
                <input class="form-control" type="text" placeholder="password" name="password" id="password" style="margin-bottom: 10px;">
                <button type="submit" style="border: none; background-color: rgb(175, 0, 0); color:white; width:100px; border-radius:5px; margin-bottom:5px;">
                    Login
                </button>
            </form>
            <a href="/" style="margin-bottom:1cm;">
                <button type="submit" style="border: none; background-color: rgb(175, 0, 0); color:white; width:100px; border-radius:5px;">
                    Back
                </button>
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>