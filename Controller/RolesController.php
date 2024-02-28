<?php

declare(strict_types=1);

class rolesController {
    public function index() {
        $roles = $this->getRoles();

        require("jsp qu'elle vue");
    }

    private function getRoles() {
        require('Connect/Cogip.php');

        $req = $pdo->prepare('SELECT * FROM roles');
        $req->execute();
        $rawRoles = $req->fetchAll();

        $roles = [];

        foreach($rawRoles as $rawRole) {
            $roles[] = new Roles($rawRole['name']);
        }

        return $roles;
    }
}