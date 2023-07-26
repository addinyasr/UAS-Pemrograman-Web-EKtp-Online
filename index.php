
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .container {
            width: 30%;
            margin-top: 9%;
            box-shadow: 0 3px 20px rgba(0, 0, 0, 0.3);
            padding: 40px;
        }

        button {
            width: 100%;
        }

        .txt2 {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
            line-height: 1.5;
            color: #1a0be4;
        }

        .txt-back {
            color: #ec0505;
        }

        .main {
            height: 100vh;
        }

        .login-box {
            width: 500px;
            height: 300px;
            box-sizing: border-box;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="text-center">Login</h2>
        <form action="process/cekLogin.php" method="POST">
            <div class="form-group" data-validate="Username is reauired">
                <label>Username</label>
                <input type="text" class="form-control" name="username" placeholder="Ketik username harus di isi">
            </div>

            <div class="form-group" data-validate="Password is reauired">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Ketik password harus isi">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Login</button><br>
        </form>
    </div>
    
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>