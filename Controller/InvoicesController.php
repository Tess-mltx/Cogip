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
        $statement = $bdd->prepare('SELECT ref, company_id, created_at FROM invoices'); // TO CONFIRM
        $statement->execute();
        $rawInvoices = $statement->fetchAll();
            
        $invoices = [];
        foreach ($rawInvoices as $rawInvoice) 
        {
            $invoices[] = new Invoices($rawInvoice['ref'], $rawInvoice['company_id'], $rawInvoice['created_at']);
        }

        return $invoices;
    }

    public function home() {
        require 'Connect/Cogip.php';

        $rawinvoices = [];
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
}