<?php
declare(strict_types = 1);

class HomepageController
{
    public function index()
    {
        $invoices = (new InvoicesController())->home();
        $contacts = (new ContactsController())->home();
        $companies = (new CompaniesController())->home();

        require 'View/home.php';
    }
}