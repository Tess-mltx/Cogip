<?php require 'View/includes/header.php' ?>

<style>
    main {
        padding-top: 85px;
        min-height: 120vh;
    }

    .title_contact {
        margin: 30px;
    }

    .table_contact {
        border-radius: 12px;
        overflow: hidden;
        transition: box-shadow 0.5s ease;
        margin: 15px 0;
        width: 1300px;
    }

    input {
        width: 170px;
        height: 30px;
        border-radius: 8px;
        padding: 10px;
        border: solid 1px black;
    }

    input:focus {
        outline: none;
    }

    input::placeholder {
        color: black;
    }
</style>
<main>
    <!-- section_table_contacts -->
    <section>

        <div class="w-full flex flex-col justify-center items-center">
            <div class="w-full flex justify-around items-center">
                <h2 class="title_contact font-bold text-2xl capitalize tracking-widest">all contacts</h2>
                <input type="text" name="table_invoice_search" placeholder="Search contact">
            </div>

            <div class="table_contact scroll-shadow-table border-black">
                <!-- table : contacts -->
                <table class="mx-auto">
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
                <!-- table n°2 : last contacts_end -->
            </div>
        </div>
    </section>
    <!-- section_table_last_contacts_end -->
</main>

<?php require 'View/includes/footer.php' ?>