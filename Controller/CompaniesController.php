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
        $id = $_GET['id'] ?? null; // récupèrer le titre dans l'url
        $companies = $this->getCompanies();
        $selectedCompanies = array_search($id,  array_column($companies, 'id'));
        $compagny = $companies[$selectedCompanies];
        require 'View/Companies/show.php';
    }

    private function getCompanies()
    {
        require 'Connect/Cogip.php';

        $rawCompanies = [];
        $statement = $bdd->prepare('SELECT id, name, country, tva, created_at FROM companies'); // TO CONFIRM
        $statement->execute();
        $rawCompanies = $statement->fetchAll();
            
        $companies = [];
        foreach ($rawCompanies as $rawCompagny) 
        {
            $companies[] = new Companies($rawCompagny['name'], $rawCompagny['country'], $rawCompagny['tva'], $rawCompagny['created_at'], $rawCompagny['id']);
        }

        return $companies;
    }

    public function singleCompany($id) {
        require 'Connect/Cogip.php';

        $rawCompanies = [];
        $statement = $bdd->prepare("SELECT id, name, country, tva, created_at FROM companies WHERE id = $id"); // TO CONFIRM
        $statement->execute();
        $rawCompanies = $statement->fetchAll();
            
        $companies = [];
        foreach ($rawCompanies as $rawCompagny) 
        {
            $companies[] = new Companies($rawCompagny['name'], $rawCompagny['country'], $rawCompagny['tva'], $rawCompagny['created_at'], $rawCompagny['id']);
        }

        return $companies;
    }
    
    public function home()
    {
        require 'Connect/Cogip.php';

        $statement = $bdd->prepare('SELECT id, name, country, tva, created_at FROM companies ORDER BY created_at DESC LIMIT 5'); // TO CONFIRM
        $statement->execute();
        $rawCompanies = $statement->fetchAll();
            
        $companies = [];
        foreach ($rawCompanies as $rawCompagny) 
        {
            $companies[] = new Companies($rawCompagny['name'], $rawCompagny['country'], $rawCompagny['tva'], $rawCompagny['created_at'], $rawCompagny['id']);
        }

        return $companies;
    }

    private function postCompany()
    {
        require 'Connect/Cogip.php';

        $statement = $bdd->prepare(' FROM companies'); // TO CONFIRM
        // $statement->execute();

    }

    public function dashboard()
    {
        // LOGIC TO CORRECT
        $this->postCompany();
        require 'View/Dashboard/companies.php' ;
    }
}
