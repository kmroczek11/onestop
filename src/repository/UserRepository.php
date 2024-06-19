<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/User.php';

class UserRepository extends Repository
{
    public function addUser(User $user)
    {
        $stmt = $this->database->connect()->prepare('
            INSERT INTO public.user_details (name, surname, email, phone, notes, suspended)
            VALUES (?, ?, ?, ?, ?, ?)
        ');

        $stmt->execute([
            $user->getName(),
            $user->getSurname(),
            $user->getEmail(),
            $user->getPhone(),
            $user->getNotes(),
            $user->getSuspended()
        ]);

        $stmt = $this->database->connect()->prepare('
            INSERT INTO public.users (username, password, user_details_id)
            VALUES (?, ?, ?)
        ');

        $stmt->execute([
            $user->getUsername(),
            $user->getPassword(),
            $this->getUserDetailsId($user)
        ]);
    }

    public function getUser(string $username): ?User
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.users u LEFT JOIN public.user_details ud 
            ON u.user_details_id = ud.user_details_id WHERE username = :username
        ');
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            return null;
        }

        return new User(
            $user['username'],
            $user['password'],
            $user['name'],
            $user['surname'],
            $user['email'],
            $user['phone'],
            $user['notes'],
            $user['suspended']
        );
    }

    public function getUserDetailsId(User $user): int
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.user_details WHERE name = :name AND surname = :surname AND email = :email
        ');
        $stmt->bindParam(':name', $user->getName(), PDO::PARAM_STR);
        $stmt->bindParam(':surname', $user->getSurname(), PDO::PARAM_STR);
        $stmt->bindParam(':email', $user->getEmail(), PDO::PARAM_STR);
        $stmt->execute();

        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data['user_details_id'];
    }
}