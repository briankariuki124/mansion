<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

    <style>
        body {
            font-family: "Lato", sans-serif;
            background-color: #ffddf3;
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: rgba(0,0,0, 0.99);
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #fff5ff;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f17613;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        #main {
            transition: margin-left .5s;
            padding: 16px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }

        .navba {
            overflow: hidden;
            font-family: Arial;
        }

        .navba a {
            float: left;
            font-size: 16px;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .dropd {
            float: left;
            margin-left: 50px;
            overflow: hidden;
        }

        .dropd .dropbt {
            font-size: 16px;
            border: none;
            outline: none;
            color: #060606;
            padding: 14px 16px;
            background-color: inherit;
            font: inherit;
            margin: 0;
        }

        .navba a:hover, .dropd:hover .dropbt {
            background-color: red;
        }

        .dropdown-ct {
            margin-left: 20px;
            display: none;
            position: absolute;
            width: 80%;
            left: 0;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.95);
            z-index: 1;
        }
        .dropd:hover .dropdown-ct {
            display: block;
        }

        /* Create three equal columns that floats next to each other */
        .column {
            float: left;
            width: 33.33%;
            padding: 10px;
            background-color: #ccc685;
            height: 280px;
        }

        .column a {
            float: none;
            color: black;
            padding: 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .column a:hover {
            background-color: #ddd;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
        @media (max-width: 600px) {
            .column {
                width: 100%;
                height: auto;
            }
        }
        .bed{
            margin-left: 10px;
        }
        .bedz{
            margin-left: 50%;
        }
        .x{
            justify-content: center;
        }
        .a{
            justify-content: center;
            margin-top: 15px;
        }
        .b{
            height: 30vh;
            background-color: #ffffff;
            margin: 10px;
            padding: 10px;
            border-radius: 5px;
            margin-top: 5px;
        }
        .m{
            margin-top: 10px;
        }

        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Set a style for all buttons */
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }
        @-webkit-keyframes animatezoom {
            from {-webkit-transform: scale(0)}
            to {-webkit-transform: scale(1)}
        }

        @keyframes animatezoom {
            from {transform: scale(0)}
            to {transform: scale(1)}
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
        }

        /* Full-width input fields */
        input[type=text], input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        /* Add a background color when the inputs get focus */
        input[type=text]:focus, input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Set a style for all buttons */
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        button:hover {
            opacity:1;
        }
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Change styles for cancel button and signup button on extra small screens */
        @media screen and (max-width: 300px) {
        }
        .item{
            display: block;
            padding-top: 5px;
            height: 60px;
            font-size: 30px;
            color: black;
            background-color: #d3a7ff;
            border-color: black border-style: solid;
            text-decoration: none;
            border-radius: 5px;
            text-align: center
        }
    </style>
</head>
<body>
    <div class="row">
        <div class="col-8 col-sm-8 col-lg-8 col-md-8">
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="profile.php">Profile</a>
                <a href="#">Previous Payments</a>
                <a href="#">Bookings</a>
                <a href="#">Rate Us</a>
            </div>

            <div id="main">
                <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; NAIHOME</span>
            </div>

            <script>
                function openNav() {
                    document.getElementById("mySidenav").style.width = "250px";
                    document.getElementById("main").style.marginLeft = "250px";
                    document.body.style.backgroundColor = "#ffddf3";
                }

                function closeNav() {
                    document.getElementById("mySidenav").style.width = "0";
                    document.getElementById("main").style.marginLeft= "0";
                    document.body.style.backgroundColor = "#ffddf3";
                }
            </script>
        </div>
        <div class="col-2 col-sm-2 col-lg-2 col-md-2 m">
            <a href="#" class="btn-primary btn">Cart</a>
        </div>

        <div class="col-2 col-sm-2 col-lg-2 col-md-2 m">
            <a href="login.php" class="btn btn-primary">Login</a>
        </div>
    </div>
    <hr>

    <div>
        <h4 style="text-align: center">Welcome to NaiHome!</h4><br>
        <p style="text-align: center">We offer easy, affordable & comfortable housing at your fingertips. <br><br> Select which category suits you best below.</p>
    </div>
    <hr>

    <div class="row" style="height: 60px; margin-bottom: 5px;">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <a href="selectItems.php" class="item">Bedsitters</a>
        </div>
        <div class="col-sm-2"></div>
    </div>

    <div class="row" style="height: 60px; margin-bottom: 5px;">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <a href="selectItems.php" class="item">One Bedroom</a>
        </div>
        <div class="col-sm-2"></div>
    </div>

    <div class="row" style="height: 60px; margin-bottom: 5px;">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <a href="selectItems.php" class="item">Two Bedroom</a>
        </div>
        <div class="col-sm-2"></div>
    </div>

    <div class="row" style="height: 60px; margin-bottom: 5px;">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <a href="selectItems.php" class="item">Three Bedroom</a>
        </div>
        <div class="col-sm-2"></div>
    </div>

    <div class="row" style="height: 60px; margin-bottom: 5px;">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <a href="selectItems.php" class="item">Mansion</a>
        </div>
        <div class="col-sm-2"></div>
    </div>

    <div class="row" style="height: 60px; margin-bottom: 5px;">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <a href="selectItems.php" class="item">Bungalow</a>
        </div>
        <div class="col-sm-2"></div>
    </div>

    <div class="row" style="height: 60px; margin-bottom: 5px;">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <a href="selectItems.php" class="item">Cabin</a>
        </div>
        <div class="col-sm-2"></div>
    </div>

    <div style="width: 80%;margin: auto">
        <h4>Contact Us</h4>
        <p>E-mail: briankariuki94@gmail.com</p>
        <p>Tel : 0721734013</p>
        <p>P.O Box : 30-10103</p>
    </div>


</body>
</html>