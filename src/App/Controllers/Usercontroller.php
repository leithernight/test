<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Models\User;
use Framework\Controller;
use Framework\Response;

class Usercontroller extends Controller {
    public function __construct(private User $model)
    {
    }

    public function getRegisterForm(): Response
    {
        return $this->view("Users/register.mvc.php");
    }

    public function getLoginForm(): Response
    {
        return $this->view("Users/login.mvc.php");
    }

    public function register()
    {
        $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $name = filter_input(INPUT_POST, 'first-name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $secondname = filter_input(INPUT_POST, 'second-name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $fullname = $name . ' ' . $secondname;
        $sex = filter_input(INPUT_POST, 'sex', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $citizenship = filter_input(INPUT_POST, 'citizenship', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $birthday = filter_input(INPUT_POST, 'birthday', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        $this->model->create($login, $password, $email, $fullname, $sex, $citizenship, $birthday);

        header("Location: /posts", true, 301);
        exit();
    }

    public function login()
    {
        $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        $user = $this->model->getByCredentials($login, $password);

        if (!$user) {
            throw new \Exception('Incorrect login or password');
        }

        $_SESSION['id'] = $user[0]['id'];
        $_SESSION['login'] = $user[0]['login'];

        header('Location: /posts', true, 301);
        exit();
    }
}