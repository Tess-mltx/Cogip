<?php require 'View/includes/header.php' ?>
<main class="pt-[85px] min-h-[120vh]">
    <section>
        <div class="w-full flex flex-col justify-center items-center">
            <div class="w-full flex justify-around items-center">
                <h2 class="title_companies font-bold text-2xl capitalize tracking-widest m-8">all companies</h2>
                <input class="focus:outline-none placeholder:text-black rounded-lg p-2.5 border border-solid border-black h-8 w-[190px]" type="text" name="table_invoice_search" placeholder="Search company name">
            </div>

            <div class="table_companies scroll-shadow-table border-black">
                <table class="mx-auto w-[1000px]">
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
                                <td class="bg-sky-500/100 px-4 py-3 border text-center"><a href='index.php?page=compagnies-show&id=<?= urlencode($company->id) ?>'><?= htmlspecialchars($company->name) ?></a></td>
                                <td class="bg-sky-500/100 px-4 py-3 border text-center"><?= htmlspecialchars($company->tvaNumber) ?></td>
                                <td class="bg-sky-500/100 px-4 py-3 border text-center"><?= htmlspecialchars($company->country) ?></td>
                                <td class="bg-sky-500/100 px-4 py-3 border text-center"><?= htmlspecialchars($company->created_at) ?></td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>

<?php require 'View/includes/footer.php' ?>