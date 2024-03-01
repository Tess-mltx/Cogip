<?php
declare(strict_types = 1);

class DashboardController
{
    public function index()
    {
        $invoices = (new InvoicesController())->home();
        $contacts = (new ContactsController())->home();
        $companies = (new CompaniesController())->home();

        require 'View/Dashboard/index.php';
    }
}