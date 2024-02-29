<?php
declare(strict_types = 1);

class CompaniesController
{
    public function index()
    {
        $companies = $this->getCompanies();
        require 'View/Companies/index.php' ;
    }

    public function show()
    {
        $name = $_GET['name'] ?? null; // récupèrer le titre dans l'url
        $companies = $this->getCompanies();
        $selectedCompanies = array_search($name,  array_column($companies, 'name'));
        $compagny = $companies[$selectedCompanies];
        require 'View/Companies/show.php';
    }

    private function getCompanies()
    {
        require 'Connect/Cogip.php';

        $rawCompanies = [];
        $statement = $bdd->prepare('SELECT name, country, tva FROM companies'); // TO CONFIRM
        $statement->execute();
        $rawCompanies = $statement->fetchAll();
            
        $companies = [];
        foreach ($rawCompanies as $rawCompagny) 
        {
            $companies[] = new Companies($rawCompagny['name'], $rawCompagny['country'], $rawCompagny['tva']);
        }

        return $companies;
    }
}
