<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/createTicket.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script type="text/javascript" src="./public/js/menu.js" defer></script>
    <script type="text/javascript" src="./public/js/createTicket.js" defer></script>
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
            <form class="create-ticket" action="addTicket" method="POST">
                <div class="select-company-container flex-center-center">
                    <h1>NEW TICKET - SELECT COMPANY</h1>
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
                            <option value="Client">Client</option>
                        </select>
                    </div>
                    <button class="color-button next-button">NEXT</button>
                </div>
                <div class="create-ticket-container flex-center-center">
                    <h1>CREATE TICKET - </h1>
                    <div class="checkbox-container">
                        <label>INTERNAL</label>
                        <input name="internal" type="checkbox">
                    </div>
                    <div class="select-container">
                        <label>TYPE</label>
                        <select name="type">
                            <option value="SELECT TICKET KIND">SELECT TICKET KIND</option>
                            <option value="Job">Job</option>
                            <option value="Project">Project</option>
                            <option value="Support">Support</option>
                        </select>
                    </div>
                    <div class="select-container">
                        <label>REQUEST FOR</label>
                        <select name="request-for">
                            <option value="SELECT CONTACT">SELECT CONTACT</option>
                            <option value="Manda Mistry">Manda Mistry</option>
                        </select>
                    </div>
                    <div class="select-container">
                        <label>REQUEST BY</label>
                        <select name="request-by">
                            <option value="SELECT CONTACT">SELECT CONTACT</option>
                            <option value="Manda Mistry">Manda Mistry</option>
                            <option value="Hadrian Brzezniak">Hadrian Brzezniak</option>
                            <option value="Kamil Mroczek">Kamil Mroczek</option>
                        </select>
                    </div>
                    <div class="select-container">
                        <label>ASSIGNED TO</label>
                        <select name="assigned-to">
                            <option value="SELECT CONTACT">SELECT CONTACT</option>
                            <option value="Manda Mistry">Manda Mistry</option>
                            <option value="Hadrian Brzezniak">Hadrian Brzezniak</option>
                            <option value="Kamil Mroczek">Kamil Mroczek</option>
                        </select>
                    </div>
                    <div class="animated-input">
                        <input name="subject" type="text" required />
                        <label for="subject" class="label-name">
                            <span class="content-name">
                                SUBJECT
                            </span>
                        </label>
                    </div>
                    <button class="color-button">CREATE</button>
                </div>
            </form>
        </div>
        <div class="footer">
            <p>Copyright © 2024. OneStop</p>
            <p>All Rights Reserved.</p>
        </div>
    </div>

</body>