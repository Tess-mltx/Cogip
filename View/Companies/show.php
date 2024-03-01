<?php
// au clic sur une compagnie, montre les détails de celle ci
require 'View/includes/header.php' ?>

<main>
    <section>
        <div>
            <h1>Pied Pipper</h1>
            <div>
                <p><span>Name:</span>Pied Pipper</p>
                <p><span>TVA:</span>BE87 876 767 565</p>
                <p><span>Country:</span>Belgium</p>
            </div>
        </div>
    </section>

    <section>
        <div>
            <h2>Contact people</h2>
            <div>
                <div>
                    <img>
                    <h3>Bertram <br> Gilfoyle</h3>
                </div>
                <div>
                    <img>
                    <h3>Henry <br> George</h3>
                </div>
            </div>
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
                    <td class="bg-sky-500/100 px-4 py-3 border"><?= $invoice->reference ?></td>
                    <td class="bg-sky-500/100 px-4 py-3 border"><?= $company[0]->name ?></td>
                    <td class="bg-sky-500/100 px-4 py-3 border"><?= $invoice->created_at ?></td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
        <!-- table n°1 : last invoices_end -->
    </section>
</main>

    <?php echo $compagny->name ?>




<?php require 'View/includes/footer.php' ?>