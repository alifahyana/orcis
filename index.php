<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>ORC Login</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
        html, body {
            height: 100%;
        }

        body {
            background-image: url(photo/bg.jpg);
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            font-family: 'workSans', sans-serif;
        }

        .nav {
            justify-content: end;
        }

        ul li a {
            font-size: 17px;
            color: #fff;
            font-weight: bold;
            font-family: 'workSans', sans-serif;
        }

        ul li a:hover {
            color: #443020;
        }

        .container-fluid {
            padding: 0;
        }

        h1, p, input {
            color: #fff;
        }

        input {
            font-weight: bold;
        }
        .container {
         max-width: 1000px; 
}
        .form-container {
            background-color: rgba(54, 40, 29, 0.7);
            padding: 20px;
            border-radius: 10px;
        }

        .form-container h1 {
            margin-bottom: 20px;
        }

        .form-row button {
            font-size: 17px;
            font-weight: bold;
            background-color: #36281d;
            color: #fff;
        }

        .form-group {
            padding-top: 5%;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <ul class="nav justify-content-end">
            <!-- Add your navigation items here if needed -->
        </ul>
    </div>

    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-7 form-container">
                <form action="login2.php" method="post">
                    <div class="text-center">
                        <h1>OUTDOOR RECREATION CLUB INFORMATION SYSTEM</h1>
                    </div>

                    <div class="form-row">
                        <div class="col-12">
                            <h4>Login</h4>
                        </div>
                        <div class="col-12 my-1">
                            <input type="text" name="username" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="col-12 my-1">
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                    </div>

                    <div class="form-row justify-content-center">
                        <div class="col-12 my-1">
                            <button type="submit" class="btn btn-info btn-block">Login</button>
                            <div class="form-group"><a href="signup.php">Not registered yet? Click here for registration</a></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>