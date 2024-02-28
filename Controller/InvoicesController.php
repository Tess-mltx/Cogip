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
        $statement = $bdd->prepare('SELECT reference, company_name, date FROM invoices'); // TO CONFIRM
        $statement->execute();
        $rawInvoices = $statement->fetchAll();
            
        $invoices = [];
        foreach ($rawInvoices as $rawInvoice) 
        {
            $invoices[] = new Invoices($rawInvoice['reference'], $rawInvoice['company_name'], $rawInvoice['date']);
        }

        return $invoices;
    }
}
