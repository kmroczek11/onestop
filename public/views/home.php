<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/home.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script type="text/javascript" src="./public/js/menu.js" defer></script>
    <script type="text/javascript" src="./public/js/createTicketButton.js" defer></script>
    <title>HOME</title>
</head>

<body>
    <div class="side-nav">
        <i class="fas fa-times"></i>
        <p class="header">
            <?php
            echo "LOGGED AS<br /><span>" . $_SESSION["user"]->getName() . " " . $_SESSION["user"]->getSurname() . "</span></p>"
                ?>
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
                <?php foreach ((array)$tickets as $ticket): ?>
                    <tr>
                        <td><?= $ticket->getId(); ?></td>
                        <td><?= $ticket->getInternal(); ?></td>
                        <td><?= $ticket->getStatus(); ?></td>
                        <td><?= $ticket->getType(); ?></td>
                        <td><?= $ticket->getFranchise(); ?></td>
                        <td><?= $ticket->getCompany(); ?></td>
                        <td><?= $ticket->getRequestFor(); ?></td>
                        <td><?= $ticket->getRequestBy(); ?></td>
                        <td><?= $ticket->getAssignedTo(); ?></td>
                        <td><?= $ticket->getSubject(); ?></td>
                        <td><?= $ticket->getTicketStart(); ?></td>
                        <td><?= $ticket->getWorkTime(); ?></td>
                        <td><?= $ticket->getRemainingTime(); ?></td>
                        <td><?= $ticket->getLastModified(); ?></td>
                        <td><?= $ticket->getLastModifiedBy(); ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <div class="footer">
            <p>Copyright © 2024. OneStop</p>
            <p>All Rights Reserved.</p>
        </div>
        <button class="icon-button flex-center-center create-ticket-button">
            <i class="fas fa-plus"></i>
            Create<br />Ticket
        </button>
    </div>

</body>