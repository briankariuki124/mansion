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
        .fms{
            width: 60%;
            margin: auto;
        }
        .fds{
            padding: 20px;
        }
        .fis{
            width: 65%;
            height: 5px;
            padding: 20px;
            margin: 12px;
            border-top: none;
            border-left: none;
            border-right: none;
            background-color: unset;
        }
    </style>
</head>
<body>
    <div>
        <h2 style="font-family: Arial; margin-left: 80px;margin-top: 2%;margin-bottom: 3%; text-decoration: underline">MANSION</h2>
    </div>
    <div>
        <h3 style="margin-left: 2%; font-size: 23px; font-family: MathJax_Caligraphic,serif; font-weight: bold">Please fill in this form to create an account</h3>
    </div>
    <form class="fms" action="">
        <div class="fds">
            <input type="text" class="fis" placeholder="Enter Full Name" name="name" required><br>

            <input type="text" class="fis" placeholder="Enter Email" name="email" required><br>

            <input type="text" class="fis" placeholder="Enter Address" name="address" required><br>

            <input type="password" class="fis" placeholder="Enter Password" name="psw" required><br>

            <input type="password" class="fis" placeholder="Confirm Password" name="psw-repeat" required><br><br>

            <p>By creating an account you agree to our <a href="T&C.php" style="color:dodgerblue">Terms & Conditions</a>.</p>

            <br>
            <button type="submit" style="height: 40px; width: 90px; background-color: #948bff; border-radius: 5px; font-weight: bold">Sign Up</button>

        </div>
    </form>
</body>
</html>
