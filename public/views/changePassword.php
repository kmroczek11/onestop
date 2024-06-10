<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/changePassword.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>CHANGE PASSWORD</title>
</head>

<body>
    <div class="container flex-center-center">
        <div class="icons-nav-container flex-center-center">
            <ul class="icons-nav">
                <li class="icon flex-center-center">
                    <i class="fas fa-user"></i>
                    <a href="http://localhost:8080/myProfile">My Profile</a>
                </li>
                <li class="icon flex-center-center active">
                    <i class="fas fa-lock"></i>
                    <a href="http://localhost:8080/changePassword">Change Password</a>
                </li>
                <li class="icon flex-center-center">
                    <i class="fas fa-sign-out-alt"></i>
                    <a>Logout</a>
                </li>
            </ul>
        </div>
        <div class="content-container flex-center-center">
            <p class="header">CHANGE PASSWORD</p>
            <form class="change-password flex-center-center">
                <div class="animated-input">
                    <input name="oldPassword" type="password" autocomplete="off" required />
                    <label for="oldPassword" class="label-name">
                        <span class="content-name">
                            OLD PASSWORD
                        </span>
                    </label>
                </div>
                <div class="animated-input">
                    <input name="newPassword" type="password" autocomplete="off" required />
                    <label for="newPassword" class="label-name">
                        <span class="content-name">
                            NEW PASSWORD
                        </span>
                    </label>
                </div>
                <div class="animated-input">
                    <input name="confirmPassword" type="password" autocomplete="off" required />
                    <label for="confirmPassword" class="label-name">
                        <span class="content-name">
                            CONFIRM PASSWORD
                        </span>
                    </label>
                </div>
                <button class="color-button">CHANGE PASSWORD</button>
            </form>
        </div>
    </div>
    </div>
</body>