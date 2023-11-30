<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Models\User;
use App\Models\Post;
use Framework\Controller;
use Framework\Response;

class Postscontroller extends Controller
{
    public function __construct(private Post $model)
    {
    }

    public function index(): Response
    {
        return $this->view("Home/index.mvc.php");
    }

    public function getList(): Response
    {
        if (isset($_SESSION['id'])) {
            $list = $this->model->getAll();
            return $this->view("Posts/getList.mvc.php", [
                'posts' => $list
            ]);
        }
        else {
            return $this->view("Users/login.mvc.php");
        }
    }

    public function getSingPost(): Response {
        if (isset($_SESSION['id'])) {
            return $this->view("Posts/post.mvc.php");
        }
        else {
            return $this->view("Users/login.mvc.php");
        }
    }

    protected function before()
    {
        if (empty($_SESSION)) {
            return false;
        }
        if (!isset($_SESSION['id'])) {
            return false;
        }
        if (!isset($_SESSION['login'])) {
            return false;
        }

        $db = $this->database->getConnection();
        $stmt = $db->prepare("SELECT * FROM users WHERE id = :id LIMIT 1");
        $stmt->execute([
            'id' => $_SESSION['id']
        ]);

        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (empty($user)) {
            return false;
        }

        return true;
    }
}