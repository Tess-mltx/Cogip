<?php
declare(strict_types = 1);

class InvoicesController
{
    public function index()
    {
        $invoices = $this->getInvoices();
        require 'View/Invoices/index.php' ;
    }

    private function getInvoices()
    {
        require 'Connect/Cogip.php';

        $rawinvoices = [];
        $statement = $bdd->prepare('SELECT id, ref, company_id, created_at FROM invoices'); // TO CONFIRM
        $statement->execute();
        $rawInvoices = $statement->fetchAll();
            
        $invoices = [];
        foreach ($rawInvoices as $rawInvoice) 
        {
            $invoices[] = new Invoices($rawInvoice['id'], $rawInvoice['ref'], $rawInvoice['company_id'], $rawInvoice['created_at']);
        }

        return $invoices;
    }

    public function home() { // a quoi sert cette methode ?
        require 'Connect/Cogip.php';

        $rawInvoices = [];
        $statement = $bdd->prepare('SELECT id, ref, company_id, created_at FROM invoices ORDER BY created_at DESC LIMIT 5');
        $statement->execute();
        $rawInvoices = $statement->fetchAll();

        $invoices = [];
        foreach ($rawInvoices as $rawInvoice) 
        {
            $invoices[] = new Invoices($rawInvoice['id'], $rawInvoice['ref'], $rawInvoice['company_id'], $rawInvoice['created_at']);
        }

        return $invoices;
    }

    public function showFromCompagnies()
    {
        $id = $_GET['id'] ?? null;
        $contacts = $this->getInvoices();
        $selectedArticles = [];
        foreach ($contacts as $contact) {
            if ($contact->company_id == $id) {
                $selectedArticles[] = $contact;
            }
        }
        return($selectedArticles);
    }

    // private function postInvoices()
    // {
    //     require 'Connect/Cogip.php';

    //     $ref = $_GET[];
    //     $companyID = null;
    //     // $statement = $bdd->prepare('INSERT INTO invoices (customer_name, amount, due_date) VALUES ('', $amount, '''); // TO CONFIRM
    //     $statement->execute();

    // }

    public function dashboard()
    {
        // LOGIC TO CORRECT
        $this->postInvoices();
        require 'View/Dashboard/invoices.php' ;
    }
}