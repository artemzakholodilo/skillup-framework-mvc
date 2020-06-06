<?php

namespace App\Controller;

use App\Model\User;

// Auth
// Render
// => Model
class UserController extends BaseController
{

    public function indexAction()
    {
//        $user = new User();
//        $query = $user->getConnection()->query("SELECT first_name, last_name FROM `user`");
//        $users = [];
//        while ($data = $query->fetch()) {
//            $users[] = $data;
//        }
//        $first = $last = 'Igor';
//        $insertQuery = $user->getConnection()
//            ->prepare();
//        $insertQuery->bindParam(":first", $first);
//        $insertQuery->bindParam(":last", $last);
        // insert update delete alter
        $dsn = 'mysql:dbname=php_lessons;host=127.0.0.1';
        try {
            $pdo = new \PDO($dsn, 'artem', '1111');
        } catch (\PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
        $rows = $pdo->exec("INSERT INTO `user`(first_name, last_name) VALUES('Igor', 'Igor')");
        var_dump($pdo); exit;
        if (!$user) {
            throw new \InvalidArgumentException("User not found");
        }
        $params = ['name' => 'World', 'users' => $users];
        return $this->render('user/index', $params);
    }

    public function viewAction()
    {
        $params = ['name' => 'World'];
        return $this->render('user/index', $params);
    }

    public function registerAction()
    {
        if (!empty($_POST)) {
            var_dump($_POST);
            exit;
        }
        $params = ['name' => 'World'];
        return $this->render('user/register', $params);
    }
}