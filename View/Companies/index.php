<?php require 'View/includes/header.php' ?>
<section>
        <h2>Companies</h2>
        <!-- table : companies -->
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
                        <td class="bg-sky-500/100 px-4 py-3 border"><?= $company->created_at?></td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
        <!-- table : companies_end -->
    </section>
    <!-- section_table_companies_end -->   
<?php require 'View/includes/footer.php' ?>
