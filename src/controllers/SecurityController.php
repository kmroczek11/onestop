<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../repository/UserRepository.php';

class SecurityController extends AppController
{

    private $userRepository;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
    }

    public function register()
    {
        if (!$this->isPost()) {
            return $this->render('register');
        }

        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmedPassword = $_POST['confirmedPassword'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $notes = $_POST['notes'];

        if ($password !== $confirmedPassword) {
            return $this->render('register', ['messages' => ['Please provide proper password']]);
        }
        
        $user = new User($username, password_hash($password, PASSWORD_DEFAULT), $name, $surname, $email, $phone, $notes, 'no');

        $this->userRepository->addUser($user);

        return $this->render('register', ['messages' => ['You\'ve been succesfully registered!']]);
    }

    public function login()
    {
        if (!$this->isPost()) {
            return $this->render('login');
        }

        $username = $_POST['username'];
        $password = $_POST['password'];

        $user = $this->userRepository->getUser($username);

        if (!$user) {
            return $this->render('login', ['messages' => ['User not found!']]);
        }

        if ($user->getUsername() !== $username) {
            return $this->render('login', ['messages' => ['User with this username does not exist!']]);
        }

        if (!password_verify($password,$user->getPassword())) {
            return $this->render('login', ['messages' => ['Wrong password!']]);
        }

        session_start();

        $_SESSION["user"] = $user;

        return $this->render('myProfile', ['user' => $user]);
    }
}