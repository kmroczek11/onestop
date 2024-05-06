<?php

require_once 'AppController.php';

class DefaultController extends AppController
{
    public function index()
    {
        $this->render('login');
    }

    public function myProfile()
    {
        $this->render('myProfile');
    }

    public function changePassword()
    {
        $this->render('changePassword');
    }
}