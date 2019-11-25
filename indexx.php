<?php
	include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./fontawesome_css/all.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <title>CinemaL25</title>
</head>
<body>
    <div class="header">
        <div class="web_container">
            <div class="header-row1">
                <div class="logo_container">
                    <a href="#">
                        <img src="./images/logo.svg" alt="Logo-MovieCity">
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

            <div class="header-row2">
                noyce
            </div>
        </div>
    </div>

    <div class="body">
        <div class="web_container">
            <div class="body_container">
                
            </div>
        </div>
    </div>

    <div class="footer">

    </div>
    <script src="./javascript/script.js"></script>
</body>
</html>