<?php require 'View/includes/header.php';  $contacts = (new ContactsController())->showFromCompagnies(); $company = (new CompaniesController())->singleCompany($contacts[0]->company_id);?>

<main>
        <div>
            <div>
                <h2> <?=$contacts[0]->name?> </h2>
                <di0v>
                    <p><span>contact:</span> <?=$contacts[0]->name?> </p>
                    <p><span>phone:</span> <?=$contacts[0]->phone?> </p>
                    <p><span>mail:</span> <?=$contacts[0]->email?> </p>
                    <p><span>company:</span> <?=$company[0]->name?> </p>
                </di0v>
            </div>
            <div>
                <img src="#" alt="">
            </div>
        </div>
    </main>



<?php require 'View/includes/footer.php' ?>