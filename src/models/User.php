<?php

class User {
    private $username;
    private $password;
    private $name;
    private $surname;

    public function __construct(
        string $username,
        string $password,
        string $name,
        string $surname
    ) {
        $this->username = $username;
        $this->password = $password;
        $this->name = $name;
        $this->surname = $surname;
    }

    public function getUsername(): string 
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getName(): string 
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }
}