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

    private function postInvoices($companyID, $ref)
    {
        require 'Connect/Cogip.php';
        $statement = $bdd->prepare("INSERT INTO invoices (company_id, ref) VALUES (?, ?)");
        $statement->bind_param($companyID, $ref);
        $statement->execute();

    }

    public function dashboard()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['invoiceNumber']) && isset($_POST['customerName']))
        {
            $ref = $_POST['customerName'];
            $companyID = $_POST['invoiceNumber'];

            $this->postInvoices($companyID, $ref);
        }
        require 'View/Dashboard/invoices.php' ;
    }
}