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

    private function getCompany()
    {
        require 'Connect/Cogip.php';

        $value = $_GET['searchInput'] ?? '';

        $content = '';

        if (!empty($value)) {
            $statement = $bdd->prepare("SELECT * FROM companies WHERE id = $value OR name = $value");
            $statement->execute();
            $content = $statement->fetch();

        };

        return $content;
    }

    public function dashboard()
    {
        $companies = $this->getCompany();
        
        if (!empty($_GET['searchInput'])) {
            header("Location: cogip.co/index.php?page=dashboard-companies&searchInput={$_GET['searchInput']}");
            exit;
        }
            
            
        // LOGIC TO CORRECT
        require 'View/Dashboard/companies.php' ;

        return $companies;
    }
}