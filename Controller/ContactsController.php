<?php

declare(strict_types=1);

class ContactsController {
    public function index()
    {
        $contacts = $this->getContacts();

        require('View/Contacts/index.php');
    }

    private function getContacts()
    {
        require('Connect/Cogip.php');

        $req = $bdd->prepare('SELECT * FROM contacts');
        $req->execute();
        $rawContacts = $req->fetchAll();

        $contacts = [];

        foreach ($rawContacts as $rawContact) {
            $contacts[] = new Contacts($rawContact['name'], $rawContact['email'], $rawContact['phone'], $rawContact['company_id'], $rawContact['created_at'], $rawContact['id']);
        }

        return $contacts;
    }

    public function home() {
        require 'Connect/Cogip.php';

        $rawinvoices = [];
        $statement = $bdd->prepare('SELECT id, name, email, phone, company_id, created_at FROM contacts ORDER BY created_at DESC LIMIT 5');
        $statement->execute();
        $rawContacts = $statement->fetchAll();

        $contacts = [];
        foreach ($rawContacts as $rawContact) 
        {
            $contacts[] = new Contacts($rawContact['name'], $rawContact['email'], $rawContact['phone'], $rawContact['company_id'], $rawContact['created_at'], $rawContact['id']);
        }

        return $contacts;
    }

    public function show()
    {
        $id = $_GET['id'] ?? null; // récupèrer le titre dans l'url
        $companies = $this->getContacts();
        $selectedCompanies = array_search($id,  array_column($companies, 'id'));
        $contact = $companies[$selectedCompanies];
        require 'View/Contacts/show.php';
    }

    public function getContact($id)
    {
        require('Connect/Cogip.php');

        $req = $bdd->prepare('SELECT * FROM contacts WHERE id = :id');
        $req->execute(array('id' => $id));
        $rawContact = $req->fetch();

        $contact = new Contacts($rawContact['name'], $rawContact['email'], $rawContact['phone'], $rawContact['company_id'], $rawContact['created_at'], $rawContact['id']);

        return $contact;
    }

    public function showFromCompagnies()
    {
        $id = $_GET['id'] ?? null;
        $contacts = $this->getContacts();
        $selectedArticles = [];
        foreach ($contacts as $contact) {
            if ($contact->id == $id) {
                $selectedArticles[] = $contact;
            }
        }
        return($selectedArticles);
    }
}