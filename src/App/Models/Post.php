<?php

namespace App\Models;

use Framework\Model;
use PDO;

class Post extends Model
{
    public function getAll()
    {
        $db = $this->database->getConnection();
        $stmt = $db->query('SELECT title, content FROM posts');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}