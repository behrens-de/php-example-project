<?php

namespace App\User;

use App\App\AbstractMVC\AbstractDatabase;
use App\User\MVC\UserModel;
use PDO;


class UserDatabase extends AbstractDatabase
{

    public function getTable()
    {
        return 'users';
    }

    public function getModel()
    {
        return UserModel::class;
        
    }

    // Daten aus Datenbank abrufen alle User
    function getUsers()
    {
        $table = $this->getTable();
        $model = $this->getModel();

        $users = $this->pdo->prepare("SELECT * FROM $table");
        $users->execute();
        $users->setFetchMode(PDO::FETCH_CLASS, $model);
        $usersdata = $users->fetchAll(PDO::FETCH_CLASS);
        return $usersdata;
    }

    // Einen User aus Datenbank abrufen
    function getUser($uid)
    {
        $table = $this->getTable();
        $model = $this->getModel();

        $user =  $this->pdo->prepare("SELECT * FROM $table WHERE id=:userid");
        $user->execute([
            'userid' => $uid
        ]);
        $user->setFetchMode(PDO::FETCH_CLASS, $model);
        $userdata = $user->fetch(PDO::FETCH_CLASS);
        return $userdata;
    }

     // holt user aus der Datenbank by Email
     function getUserByEmail($email)
     {
         $table = $this->getTable();
         $model = $this->getModel();
 
         $user =  $this->pdo->prepare("SELECT `email` FROM $table WHERE email=:email");
         $user->execute([
             'email' => $email
         ]);
         $user->setFetchMode(PDO::FETCH_CLASS, $model);
         $userdata = $user->fetch(PDO::FETCH_CLASS);
         return $userdata;
     }   

    function createUser($firstname, $lastname, $username, $email, $password, $bio)
    {
        $table = $this->getTable();

        $user = $this->pdo->prepare("INSERT INTO $table (`firstname`,`lastname`,`username`,`email`,`password`,`bio`) VALUES (:firstname,:lastname,:username,:email,:password,:bio)");
        $user->execute([
            'firstname' => $firstname,
            'lastname' => $lastname,
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'bio' => $bio
        ]);
    }

    function deleteUser($firstname)
    {
        $table = $this->getTable();

        $user = $this->pdo->prepare("DELETE  FROM $table WHERE firstname = :firstname");
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
