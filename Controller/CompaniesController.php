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

    public function singleCompany($id) {
        require 'Connect/Cogip.php';

        $rawCompanies = [];
        $statement = $bdd->prepare("SELECT name, country, tva, created_at FROM companies WHERE id = $id"); // TO CONFIRM
        $statement->execute();
        $rawCompanies = $statement->fetchAll();
            
        $companies = [];
        foreach ($rawCompanies as $rawCompagny) 
        {
            $companies[] = new Companies($rawCompagny['name'], $rawCompagny['country'], $rawCompagny['tva'], $rawCompagny['created_at']);
        }

        return $companies;
    }
    
    public function home()
    {
        require 'Connect/Cogip.php';

        $statement = $bdd->prepare('SELECT name, country, tva, created_at FROM companies ORDER BY created_at DESC LIMIT 5'); // TO CONFIRM
        $statement->execute();
        $rawCompanies = $statement->fetchAll();
            
        $companies = [];
        foreach ($rawCompanies as $rawCompagny) 
        {
            $companies[] = new Companies($rawCompagny['name'], $rawCompagny['country'], $rawCompagny['tva'], $rawCompagny['created_at']);
        }

        return $companies;
    }
}
