<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/register.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <title>REGISTER PAGE</title>
</head>

<body>
    <div class="container flex-center-center">
        <div class="logo">
            <img src="public/img/logo.png">
        </div>
        <div class="register-container">
            <form class="register flex-center-center" action="register" method="POST">
                <input name="username" type="text" placeholder="Username">
                <input name="password" type="password" placeholder="Password">
                <input name="confirmedPassword" type="password" placeholder="Confirm Password">
                <input name="name" type="text" placeholder="Name">
                <input name="surname" type="text" placeholder="Surname">
                <input name="email" type="email" placeholder="Email">
                <input name="phone" type="tel" placeholder="Phone number">
                <input name="notes" type="text" placeholder="Notes">
                <div class="messages">
                    <?php
                    if (isset($messages)) {
                        foreach ($messages as $message) {
                            echo $message;
                        }
                    }
                    ?>
                </div>
                <button class="color-button">REGISTER</button>
                <a href="http://localhost:8080/login">Already have an account? Login</a>
            </form>
        </div>
    </div>
</body>