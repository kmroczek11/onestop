<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/createTicket.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script type="text/javascript" src="./public/js/menu.js" defer></script>
    <title>CREATE TICKET</title>
</head>

<body>
    <div class="side-nav">
        <i class="fas fa-times"></i>
        <p class="header">LOGGED AS<br /><span>KAMIL MROCZEK</span></p>
        <ul>
            <li class="flex-center-center"> <i class="fas fa-arrow-left"></i>
                <a>BACK</a>
                <i class="fas fa-greater-than"></i>
            </li>
            <li class="flex-center-center">
                <a><img src="public/img/logo.png"></a>
            </li>
            <li class="flex-center-center">
                <i class="fas fa-home"></i>
                <a>HOME</a>
                <i class="fas fa-greater-than"></i>
            </li>
            <li class="flex-center-center">
                <i class="fas fa-user"></i>
                <a>CLIENT</a>
                <i class="fas fa-greater-than"></i>
            </li>
            <li class="flex-center-center">
                <i class="fas fa-book"></i>
                <a>ACCOUNTING</a>
                <i class="fas fa-greater-than"></i>
            </li>
            <li class="flex-center-center">
                <i class="fas fa-city"></i>
                <a>BUILDINGS</a>
                <i class="fas fa-greater-than"></i>
            </li>
            <li class="flex-center-center">
                <i class="fas fa-sign-out-alt"></i>
                <a>LOGOUT</a>
            </li>
        </ul>
    </div>

    <div class="container">
        <div class="top-bar">
            <i class="fas fa-bars"></i>
            <p>Open tickets: 0</p>
            <p>|</p>
            <p>Stopwatches: 0</p>
            <p>|</p>
            <p>Server time: 14:00:00</p>
        </div>
        <div class="form-container flex-center-center">
            <div class="select-container">
                <label>COMPANY</label>
                <select name="company">
                    <option value="SELECT COMPANY">SELECT COMPANY</option>
                    <option value="Amelco UK Ltd">Amelco UK Ltd</option>
                    <option value="Eastways Travel">Eastways Travel</option>
                </select>
            </div>
            <div class="select-container">
                <label>ASSOCIATION TYPE</label>
                <select name="association">
                </select>
            </div>
            <button class="color-button">NEXT</button>
        </div>
        <div class="footer">
            <p>Copyright © 2024. OneStop</p>
            <p>All Rights Reserved.</p>
        </div>
    </div>

</body>