<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::get('home', 'TicketController');
Routing::get('myProfile', 'DefaultController');
Routing::get('changePassword', 'DefaultController');
Routing::get('createTicket', 'DefaultController');
Routing::post('register', 'SecurityController');
Routing::post('login', 'SecurityController');
Routing::post('addTicket', 'TicketController');
Routing::run($path);