<?php require 'View/includes/header.php'; $contacts = (new ContactsController())->showFromCompagnies(); $invoices = (new InvoicesController())->showFromCompagnies(); ?>

<main>
    <section>
        <div>
            <h1><?=$compagny->name?></h1>
            <div>
                <p><span>Name: </span><?=$compagny->name?></p>
                <p><span>TVA: </span><?=$compagny->tvaNumber?></p>
                <p><span>Country: </span><?=$compagny->country?></p>
            </div>
        </div>
    </section>

    <section>
        <div>
            <h2>Contact people</h2>

            <?php foreach($contacts as $cont) :?>   
                <div>
                    <h3><?=$cont->name?></h3>
                    <p><?=$cont->phone?></p>
                    <p><?=$cont->email?></p>
                </div>
            <?php endforeach; ?>

        </div>
    </section>

    <section>
        <h2>last invoices</h2>
        <!-- table n°1 : last invoices -->
        <table class="w-8/12 ">
            <thead class="bg-primary-color-orange">
                <tr>
                    <th class="px-4 py-2.5 border">invoice number</th>
                    <th class="px-4 py-2.5 border">company</th>
                    <th class="px-4 py-2.5 border">created at</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($invoices as $invoice) : ?>
                <?php $company = (new CompaniesController())->singleCompany($invoice->company_id);?>
                    <tr>
                        <td class="bg-sky-500/100 px-4 py-3 border"><?=$invoice->reference?></td>
                        <td class="bg-sky-500/100 px-4 py-3 border"><?=$company[0]->name?></td>
                        <td class="bg-sky-500/100 px-4 py-3 border"><?=$invoice->created_at?></td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
        <!-- table n°1 : last invoices_end -->
    </section>
</main>






<?php require 'View/includes/footer.php' ?>