<?php
declare(strict_types=1);
// servivra de router pour les page
// on load toutes les ressource
// puis on fait un switch case pour 

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//include all your model files here
require 'Model/Compagnies.php';
require 'Model/Contacts.php';
require 'Model/Invoices.php';
require 'Model/Roles.php';
require 'Model/Users.php';

//include all your controllers here
// require 'Controller/HomepageController.php'; Je dois voir pour ca
require 'Controller/CompaniesController.php';
require 'Controller/ContactsController.php';
require 'Controller/InvoicesController.php';
require 'Controller/RolesController.php';
require 'Controller/UsersController.php';

// Get the current page to load
$page = $_GET['page'] ?? null;

// Load the controller
switch ($page) {
    case 'companies-index':
        (new CompaniesController())->index();
        break;
    case 'compagnies-show':
        // TODO: detail page
        (new CompaniesController())->show();
        break;
    case 'contacts-index':
        (new ContactsController())->index();
        break;
    case 'contacts-show':
        (new ContactsController())->show();
        break;
    case 'invoices-index':
        (new InvoicesController())->index();
        break;
    default:
        (new HomepageController())->index();
        break;
}