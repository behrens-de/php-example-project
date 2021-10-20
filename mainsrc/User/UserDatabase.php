<?php

namespace App\User;
use App\User\MVC\UserModel;
use PDO;


class UserDatabase
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    // Daten aus Datenbank abrufen alle User
    function getUsers()
    {
        $users = $this->pdo->prepare('SELECT * FROM users');
        $users->execute();
        $users->setFetchMode(PDO::FETCH_CLASS, UserModel::class);
        $usersdata = $users->fetchAll();
        return $usersdata;
    }

    // Einen User aus Datenbank abrufen
    function getUser($uid)
    {
        $user =  $this->pdo->prepare("SELECT * FROM users WHERE id=:userid");
        $user->execute([
            'userid' => $uid
        ]);
        $user->setFetchMode(PDO::FETCH_CLASS, UserModel::class);
        $userdata = $user->fetchAll();
        return $userdata;
    }


    function createUser($firstname, $lastname, $email, $password, $bio)
    {
        $user = $this->pdo->prepare("INSERT INTO `users` (`firstname`,`lastname`,`email`,`password`,`bio`) VALUES (:firstname,:lastname,:email,:password,:bio)");
        $user->execute([
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'password' => $password,
            'bio' => $bio
        ]);
    }

    function deleteUser($firstname)
    {
        $user = $this->pdo->prepare("DELETE  FROM `users` WHERE firstname = :firstname");
        $user->execute([
            'firstname' => $firstname
        ]);
    }

    function updateUser($id, $password)
    {
        $user = $this->pdo->prepare("UPDATE `users` SET `password` = :password WHERE id = :id");
        $user->execute([
            'id' => $id,
            'password' => $password
        ]);
    }
}
