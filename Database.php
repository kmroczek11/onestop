<?php

require_once "config.php";

class Database
{
    private $username;
    private $password;
    private $host;
    private $database;

    public function __construct()
    {
        $this->username = USERNAME;
        $this->password = PASSWORD;
        $this->host = HOST;
        $this->database = DATABASE;
    }

    public function connect()
    {
        try {
            $conn = new PDO(
                "pgsql:host=$this->host;port=5432;dbname=$this->database",
                $this->username,
                $this->password,
                ["sslmode" => "prefer"]
            );

            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $statements = [
                // 'DROP TABLE public.users CASCADE',
                // 'DROP TABLE public.tickets',
                'CREATE TABLE IF NOT EXISTS public.user_details (
                    user_details_id SERIAL PRIMARY KEY,
                    name VARCHAR(255) NOT NULL,
                    surname VARCHAR(255) NOT NULL,
                    email VARCHAR(255) NOT NULL,
                    phone VARCHAR(255) NOT NULL,
                    notes VARCHAR(255) NOT NULL,
                    suspended VARCHAR(3) NOT NULL
                    );',
                'CREATE TABLE IF NOT EXISTS public.users (
                    user_id SERIAL PRIMARY KEY,
                    username VARCHAR(255) NOT NULL,
                    password VARCHAR(255) NOT NULL,
                    user_details_id INTEGER REFERENCES public.user_details
                );',
                'CREATE TABLE IF NOT EXISTS public.tickets (
                    ticket_id SERIAL PRIMARY KEY,
                    internal VARCHAR(3) NOT NULL,
                    status VARCHAR(255) NOT NULL,
                    type VARCHAR(255) NOT NULL,
                    franchise VARCHAR(255) NOT NULL,
                    company VARCHAR(255) NOT NULL,
                    request_for VARCHAR(255) NOT NULL,
                    request_by VARCHAR(255) NOT NULL,
                    assigned_to VARCHAR(255) NOT NULL,
                    subject VARCHAR(255) NOT NULL,
                    ticket_start VARCHAR(255) NOT NULL,
                    work_time VARCHAR(255) NOT NULL,
                    remaining_time VARCHAR(255) NOT NULL,
                    last_modified VARCHAR(255) NOT NULL,
                    last_modified_by VARCHAR(255) NOT NULL
                );',
                
            ];

            foreach ($statements as $statement) {
                $conn->exec($statement);
            }

            return $conn;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}