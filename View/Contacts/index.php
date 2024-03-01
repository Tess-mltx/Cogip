<?php require 'View/includes/header.php' ?>
    <!-- section_table_contacts -->
    <section>
        <h2>All contacts</h2>
        <!-- table : contacts -->
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
                    <?php $company = (new CompaniesController())->singleCompany($contact->company_id);?>
                    <tr>
                        <td class="bg-sky-500/100 px-4 py-3 border"><a href='index.php?page=contacts-show&id=<?=$contact->id?>'><?= $contact->name ?></a></td>
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
<?php require 'View/includes/footer.php' ?>