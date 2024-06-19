<?php

class User
{
    private $username;
    private $password;
    private $name;
    private $surname;
    private $email;
    private $phone;
    private $notes;
    private $suspended;

    public function __construct(
        string $username,
        string $password,
        string $name,
        string $surname,
        string $email,
        string $phone,
        string $notes,
        string $suspended
    ) {
        $this->username = $username;
        $this->password = $password;
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->phone = $phone;
        $this->notes = $notes;
        $this->suspended = $suspended;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function getNotes(): string
    {
        return $this->notes;
    }

    public function getSuspended(): string
    {
        return $this->suspended;
    }
}