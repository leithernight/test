<?php

namespace App\Models;

use Framework\Model;
use PDO;

class User extends Model
{
    public function create($login, $password, $email, $fullname, $sex, $citizenship, $birthday) {
        $db = $this->database->getConnection();
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $db->prepare("INSERT INTO users(login, password, email, fullname, sex, citizenship, birthday) VALUES(:login, :password, :email, :fullname,:sex,:citizenship,:birthday)");
        return $stmt->execute([
            'login' => $login,
            'password' => $passwordHash,
            'email' => $email,
            'fullname' => $fullname,
            'sex' => $sex,
            'citizenship' => $citizenship,
            'birthday' => $birthday,
        ]);
    }

    public function getByCredentials($login, $password) {
        $db = $this->database->getConnection();
        $stmt = $db->prepare("SELECT * FROM users WHERE login = :login LIMIT 1");
        $stmt->execute([
           'login' => $login
        ]);

        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (empty($user)) {
            return false;
        }

        if (!password_verify($password, $user[0]['password'])) {
            return false;
        }

        return $user;
    }

    public function getById($id) {
        $db = $this->database->getConnection();
        $stmt = $db->prepare("SELECT * FROM users WHERE id = :id LIMIT 1");
        $stmt->execute([
            'id' => $id
        ]);

        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (empty($user)) {
            return false;
        }

        return $user;
    }
}