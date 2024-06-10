<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <title>LOGIN PAGE</title>
</head>

<body>
    <div class="container flex-center-center">
        <div class="logo">
            <img src="public/img/logo.png">
        </div>
        <div class="login-container">
            <form class="login flex-center-center" action="login" method="POST">
                <input name="username" type="text" placeholder="Username">
                <input name="password" type="password" placeholder="Password">
                <button class="color-button">LOGIN</button>
                <a href="http://localhost:8080/register">Don't have an account? Register</a>
                <div class="messages">
                <?php
                if (isset($messages)) {
                    foreach ($messages as $message) {
                        echo $message;
                    }
                }
                ?>
                </div>
            </form>
        </div>
    </div>
</body>