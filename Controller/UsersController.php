<?php

declare(strict_types=1);

class UsersController {
    public function index() {
        $users = $this->getUsers();

        require("jsp encore la view qu'il faut");
    }

    private function getUsers() {
        require('Connect/Cogip.php');

        $req = $pdo->prepare('SELECT * FROM users');
        $req->execute();
        $rawUsers = $req->fetchAll();

        $users = []; 

        foreach($rawUsers as $rawUser) {
            $users[] = new Users($rawUser['firstname'], $rawUser['lastname'], $rawUser['email']);
        }

        // tout les users dans un tableau

        return $users;
    }
}