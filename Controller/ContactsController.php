<?php

declare(strict_types=1);

class ContactsController {
    public function index()
    {
        $contacts = $this->getContacts();

        require("jsp quelle vue");
    }

    private function getContacts()
    {
        require('Connect/Cogip.php');

        $req = $pdo->prepare('SELECT * FROM contacts');
        $req->execute();
        $rawContacts = $req->fetchAll();

        $contacts = [];

        foreach ($rawContacts as $rawContact) {
            $contacts[] = new Contacts($rawContact['name'], $rawContact['email'], $rawContact['phone']);
        }

        return $contacts;
    }
}