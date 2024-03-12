<?php require 'View/includes/header.php' ?>
<main class="pt-[85px] min-h-[120vh]">
    <section>
        <div class="w-full flex flex-col justify-center items-center">
            <div class="w-full flex justify-around items-center">
                <h2 class="title_contact font-bold text-2xl capitalize tracking-widest m-8">all contacts</h2>
                <input class="focus:outline-none placeholder:text-black rounded-lg p-2.5 border border-solid border-black h-8 w-[170px]" type="text" name="table_invoice_search" placeholder="Search contact">
            </div>

            <div class="table_contact scroll-shadow-table border-black">
                <table class="mx-auto w-[1000px]">
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
                                <td class="bg-sky-500/100 px-4 py-3 border"><a href='index.php?page=contacts-show&id=<?= $contact->id ?>'><?= $contact->name ?></a></td>
                                <td class="bg-sky-500/100 px-4 py-3 border"><?= $contact->phone ?></td>
                                <td class="bg-sky-500/100 px-4 py-3 border"> <?= $contact->email ?></td>
                                <td class="bg-sky-500/100 px-4 py-3 border"> <?= $company[0]->name ?></td>
                                <td class="bg-sky-500/100 px-4 py-3 border"> <?= $contact->created_at ?></td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>

<?php require 'View/includes/footer.php' ?>