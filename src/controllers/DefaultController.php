<?php

require_once 'AppController.php';

class DefaultController extends AppController
{
    public function index()
    {
        $this->render('login');
    }

    public function register()
    {
        $this->render('register');
    }

    public function myProfile()
    {
        $this->render('myProfile');
    }

    public function changePassword()
    {
        $this->render('changePassword');
    }

    public function home()
    {
        $this->render('home');
    }

    public function createTicket()
    {
        $this->render('createTicket');
    }
}