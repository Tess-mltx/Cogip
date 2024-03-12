<?php require 'View/includes/header.php' ?>
<main class="pt-[85px] min-h-[120vh]">
    <section>
        <div class="w-full flex flex-col justify-center items-center">
            <div class="w-full flex flex-wrap justify-around items-center">
                <h2 class="title_invoice font-bold text-2xl capitalize tracking-widest m-8">all invoices</h2>
                <input class="focus:outline-none placeholder:text-black rounded-lg p-2.5 border border-solid border-black h-8 w-[170px]" type="text" name="table_invoice_search" placeholder="Search company">
            </div>

            <div class="table_invoice scroll-shadow-table border-black">
                <table class="mx-auto w-[1000px]">
                    <thead class="bg-primary-color-orange">
                        <tr>
                            <th class="px-4 py-2.5 border capitalize tracking-widest">invoice number</th>
                            <th class="px-4 py-2.5 border capitalize tracking-widest">company</th>
                            <th class="px-4 py-2.5 border capitalize tracking-widest">created at</th>
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
            </div>
            
        </div>
    </section>
</main>
<?php require 'View/includes/footer.php' ?>