<?php require 'View/includes/header.php' ?>

// liste de toutes les factures

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
    <!-- section_table_last_invoices_end -->







<?php require 'View/includes/footer.php' ?>