<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('index', 'DefaultController');
Routing::get('myProfile', 'DefaultController');
Routing::get('changePassword', 'DefaultController');
Routing::get('home', 'DefaultController');
Routing::get('createTicket', 'DefaultController');
Routing::run($path);