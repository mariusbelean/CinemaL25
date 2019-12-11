<?php
	include 'php/is_connected.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./fontawesome_css/all.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>CinemaL25</title>
</head>
<body>
    <div class="header">
        <div class="web_container">
            <div class="header-row1">
                <div class="logo_container">
                    <a href="#">
                        <img id="logo" src="./images/logo.png" alt="CinemaL25 Logo">
                    </a>
                </div>
                <div class="login_container">
                    <form action="./php/login.php" method="post">
                        <div class="username_field">
                            <label for="username"><b>Username</b></label>
                            <input type="text" placeholder="Enter Username" name="username">
                        </div>
                        <div class="password_field">
                            <label for="passwword"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="password">
                        </div>
                        <button type="submit" name="submit-btn">Login</button>
                    </form>
                    <a href="#" class="signUp-link">Sign Up</a>
                </div>
            </div>
        </div>
        
        <div class="header-row2">
            <div class="web_container">
                <div id="slider_container">
                    fill
                </div>
            </div>
        </div>
    </div>

    <div class="body">
        <div class="web_container">
            <div class="body_container">
                <h1>CINEMAS</h1>
                <select id="cityList">

                </select>

                <div id="cinema_container">

                </div>

                <h1>PROGRAM</h1>
                <div id="program_container">
                
                </div>
            </div>
        </div>
    </div>

    <div class="footer">

    </div>
    <script src="./javascript/script.js"></script>
</body>
</html>