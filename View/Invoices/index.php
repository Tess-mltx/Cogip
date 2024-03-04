<?php require 'View/includes/header.php' ?>
<style>
    main {
        padding-top: 85px;
        min-height: 120vh;
    }

    .title_invoice {
        margin: 30px;
    }

    .table_invoice {
        border-radius: 12px;
        overflow: hidden;
        width: auto;
        transition: box-shadow 0.5s ease;
        margin: 15px 0;
    }

    table {
        width: 1000px;
        border: none;
    }

    input{
        width: 170px;
        height: 30px;
        border-radius: 8px;
        padding: 10px;
        border: solid 1px black;
    }

    input:focus{
        outline: none;
    }

    input::placeholder{
        color: black;
    }
</style>

<main>
    <!-- section_table_invoices -->
    <section>

        <div class="w-full flex flex-col justify-center items-center">
            <div class="w-full flex justify-around items-center">
                <h2 class="title_invoice font-bold text-2xl capitalize tracking-widest">all invoices</h2>
                <input type="text" name="table_invoice_search" placeholder="Search company">
            </div>

            <div class="table_invoice scroll-shadow-table border-black">
                <!-- table : invoices -->
                <table>
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
                                <td class="bg-sky-500/100 px-4 py-3 border text-center"><?= $invoice->reference ?></td>
                                <td class="bg-sky-500/100 px-4 py-3 border text-center"><?= $company[0]->name ?></td>
                                <td class="bg-sky-500/100 px-4 py-3 border text-center"><?= $invoice->created_at ?></td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
                <!-- table : invoices_end -->
            </div>
        </div>
    </section>
    <!-- section_table_invoices_end -->
</main>
<?php require 'View/includes/footer.php' ?>