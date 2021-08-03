<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

    <style>
        body{
            background-color: #ffddf3;
        }
        .fm{
            width: 60%;
            margin: 30px auto auto;
        }
        .fd{
            padding: 20px;
        }
        .fi{
            width: 65%;
            height: 5px;
            padding: 20px;
            margin: 12px;
            border-top: none;
            border-left: none;
            border-right: none;
            background-color: unset;
            font-weight: bold;
        }

    </style>
</head>
<body>
    <div>
        <h2 style="font-family: Arial; margin-left: 80px;margin-top: 2%;margin-bottom: 4%; text-decoration: underline">MANSION</h2>
    </div>
    <div>
        <h3 style="margin-left: 2%; font-family: MathJax_Caligraphic,serif; font-size: 23px; font-weight: bold">Please, login to your account below</h3>
    </div>
    <form class="fm" action="">
        <div class="fd">
            <input type="text" class="fi" placeholder="Enter Username" name="uname" required><br>

            <input type="password" class="fi" placeholder="Enter Password" name="psw" required><br><br>
            <button type="submit" style="height: 40px; width: 70px; background-color: #948bff; border-radius: 5px; font-weight: bold">Login</button>
        </div>
    </form>

    <div style="margin-top: 50px; margin-left: 20%;">
        <p>Don't have an account? Click <a href="signup.php">here</a></p>
    </div>
</body>
</html>