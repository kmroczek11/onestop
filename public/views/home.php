<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/home.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script type="text/javascript" src="./public/js/menu.js" defer></script>
    <title>HOME</title>
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
        <div class="table-container">
            <table>
                <tr>
                    <th>My tickets</th>
                    <th>Closed tickets</th>
                    <th>Approved tickets</th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>Internal</th>
                    <th>Status</th>
                    <th>Type</th>
                    <th>Franchise</th>
                    <th>Company</th>
                    <th>Request for</th>
                    <th>Request by</th>
                    <th>Assigned to</th>
                    <th>Subject</th>
                    <th>Ticket start</th>
                    <th>Work time</th>
                    <th>Remaining time</th>
                    <th>Last modified</th>
                    <th>Last modified by</th>
                </tr>
                <tr>
                    <td>2332</td>
                    <td>-</td>
                    <td>NEW</td>
                    <td>SUPPORT</td>
                    <td>-</td>
                    <td>EASTWAYS TRAVEL</td>
                    <td>MANDA MISTRY</td>
                    <td>HADRIAN BRZEZNIAK</td>
                    <td>KAMIL MROCZEK</td>
                    <td>TEST</td>
                    <td>2024-04-08 16:00:00</td>
                    <td>00:23</td>
                    <td>00:00</td>
                    <td>2024-04-08 16:56:19</td>
                    <td>KAMIL MROCZEK</td>
                </tr>
            </table>
        </div>
        <div class="footer">
            <p>Copyright © 2024. OneStop</p>
            <p>All Rights Reserved.</p>
        </div>
        <button class="icon-button flex-center-center">
            <i class="fas fa-plus"></i>
            <a href="http://localhost:8080/createTicket">Create<br />Ticket</a>
        </button>
    </div>

</body>