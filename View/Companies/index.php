<?php require 'View/includes/header.php' ?>
<section>
        <h2> All companies</h2>
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
                        <td class="bg-sky-500/100 px-4 py-3 border"><a href='index.php?page=compagnies-show&id=<?= urlencode($company->id) ?>'><?= htmlspecialchars($company->name) ?></a></td>
                        <td class="bg-sky-500/100 px-4 py-3 border"><?= htmlspecialchars($company->tvaNumber) ?></td>
                        <td class="bg-sky-500/100 px-4 py-3 border"><?= htmlspecialchars($company->country) ?></td>
                        <td class="bg-sky-500/100 px-4 py-3 border"><?= htmlspecialchars($company->created_at) ?></td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
        <!-- table : companies_end -->
    </section>
    <!-- section_table_companies_end -->   
<?php require 'View/includes/footer.php' ?>
