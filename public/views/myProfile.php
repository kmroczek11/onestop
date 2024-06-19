<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/myProfile.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script type="text/javascript" src="./public/js/homeButton.js" defer></script>
    <title>MY PROFILE</title>
</head>

<body>
    <div class="container flex-center-center">
        <div class="icons-nav-container flex-center-center">
            <ul class="icons-nav">
                <li class="icon flex-center-center active">
                    <i class="fas fa-user"></i>
                    <a href="http://localhost:8080/myProfile">My Profile</a>
                </li>
                <li class="icon flex-center-center">
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
            <p class="header">YOU ARE LOGGED AS <span>
                    <?php
                    echo $user->getName() . " " . $user->getSurname()
                    ?>
                </span></p>
            <div class="profile-container flex-center-center">
                <div class="rounded-container flex-center-center">
                    <p class="label">NAME</p>
                    <p class="text">
                        <?php
                        echo $user->getName()
                        ?>
                    </p>
                </div>
                <div class="rounded-container flex-center-center">
                    <p class="label">SURNAME</p>
                    <p class="text">
                        <?php
                        echo $user->getSurname()
                        ?>
                    </p>
                </div>
                <div class="rounded-container flex-center-center">
                    <p class="label">PERSONAL EMAIL</p>
                    <?php
                    echo ($user->getEmail() != "") ? '<p class="text">'.$user->getEmail().'</p>' :
                        '<p class="text">EMPTY</p>
                    <button class="color-button">EDIT</button>'
                    ?>

                </div>
                <div class="rounded-container flex-center-center">
                    <p class="label">USERNAME</p>
                    <p class="text">
                        <?php
                        echo $user->getUsername()
                        ?>
                    </p>
                </div>
                <div class="rounded-container flex-center-center">
                    <p class="label">MOBILE NUMBER (PRIVATE)</p>
                    <p class="text">
                        <?php
                        echo $user->getPhone()
                        ?>
                    </p>
                    <button class="color-button">EDIT</button>
                </div>
                <div class="rounded-container flex-center-center">
                    <p class="label">NOTES</p>
                    <?php
                    echo ($user->getNotes() != "") ? '<p class="text">'.$user->getNotes().'</p>' :
                        '<p class="text">EMPTY</p>
                    <button class="color-button">EDIT</button>'
                    ?>
                </div>
                <div class="rounded-container flex-center-center">
                    <p class="label">SUSPENDED</p>
                    <p class="text">
                    <?php
                    echo $user->getSuspended()
                    ?>
                    </p>
                </div>
                <div class="buttons-container">
                    <button class="color-button">ONESTOP</button>
                    <button class="color-button home-button">
                    <?php
                    echo $user->getName() . "<br />" . $user->getSurname()
                    ?>
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>