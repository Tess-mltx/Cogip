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

    public function home() {
        require 'Connect/Cogip.php';

        $rawinvoices = [];
        $statement = $bdd->prepare('SELECT name, email, phone, company_id, created_at FROM contacts ORDER BY created_at DESC LIMIT 5');
        $statement->execute();
        $rawContacts = $statement->fetchAll();

        $contacts = [];
        foreach ($rawContacts as $rawContact) 
        {
            $contacts[] = new Contacts($rawContact['name'], $rawContact['email'], $rawContact['phone'], $rawContact['company_id'], $rawContact['created_at']);
        }

        return $contacts;
    }
}