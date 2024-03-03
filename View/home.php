<?php require 'View/includes/header.php'; ?>

<!-- main -->
<main>
    <style>
        main {
            padding-top: 85px;
        }

        .section_home_one{
            min-height: 80vh;
        }
    </style>
    <!-- Section sous la barre de navigation -->
    <section class="section_home_one bg-primary-color-orange flex items-center">
        <div class=" mx-auto flex items-center justify-between">
            <!-- Texte à gauche -->
            <div class="text-left text-white flex-1 px-4">
                <p class="text-6xl font-semibold">Create excellence from every transaction. Manage your customers and their invoices with ease</p>
            </div>
        </div>
    </section>

    <!-- section_table_last_invoices -->
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
                    <?php $company = (new CompaniesController())->singleCompany($invoice->company_id); ?>
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
    <!-- section_table_last_invoices_end -->

    <!-- section_table_last_contacts -->
    <section>
        <h2>last contacts</h2>
        <!-- table n°2 : last contacts -->
        <table class="w-8/12">
            <thead class="bg-primary-color-orange">
                <tr>
                    <th class="px-4 py-2.5 border">name</th>
                    <th class="px-4 py-2.5 border">phone</th>
                    <th class="px-4 py-2.5 border">mail</th>
                    <th class="px-4 py-2.5 border">company</th>
                    <th class="px-4 py-2.5 border">created at</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($contacts as $contact) : ?>
                    <?php $company = (new CompaniesController())->singleCompany($contact->company_id); ?>
                    <tr>
                        <td class="bg-sky-500/100 px-4 py-3 border"><?= $contact->name ?></td>
                        <td class="bg-sky-500/100 px-4 py-3 border"><?= $contact->phone ?></td>
                        <td class="bg-sky-500/100 px-4 py-3 border"> <?= $contact->email ?></td>
                        <td class="bg-sky-500/100 px-4 py-3 border"> <?= $company[0]->name ?></td>
                        <td class="bg-sky-500/100 px-4 py-3 border"> <?= $contact->created_at ?></td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
        <!-- table n°2 : last contacts_end -->
    </section>
    <!-- section_table_last_contacts_end -->

    <!-- section_table_last_companies -->
    <section>
        <h2>last companies</h2>
        <!-- table n°3 : last companies -->
        <table class="w-8/12">
            <thead class="bg-primary-color-orange">
                <tr>
                    <th class="px-4 py-2.5 border">name</th>
                    <th class="px-4 py-2.5 border">TVA</th>
                    <th class="px-4 py-2.5 border">country</th>
                    <th class="px-4 py-2.5 border">created at</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($companies as $company) : ?>
                    <tr>
                        <td class="bg-sky-500/100 px-4 py-3 border"><?= $company->name ?></td>
                        <td class="bg-sky-500/100 px-4 py-3 border"><?= $company->tvaNumber ?></td>
                        <td class="bg-sky-500/100 px-4 py-3 border"><?= $company->country ?></td>
                        <td class="bg-sky-500/100 px-4 py-3 border"><?= $company->created_at ?></td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
        <!-- table n°3 : last companies_end -->
    </section>
    <!-- section_table_last_companies_end -->

    <!-- section_marketing -->
    <section>
        <div class="container">
            <h3>WORK BETTER IN YOUR COMPANY</h3>
            <img src="#" alt="">
        </div>
    </section>
    <!-- section_marketing_end -->
</main>
<!-- main_end -->

</body>

</html>

<?php require 'View/includes/footer.php' ?>