<?php require 'View/includes/header.php' ?>
<style>
    main {
        padding-top: 85px;
        min-height: 120vh;
    }

    .title_contact {
        margin: 30px;
    }

    .table_companies {
        border-radius: 12px;
        overflow: hidden;
        transition: box-shadow 0.5s ease;
        margin: 15px 0;
    }

    table{
        width: 1000px;
    }

    input {
        width: 190px;
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
    <section>

        <div class="w-full flex flex-col justify-center items-center">
            <div class="w-full flex justify-around items-center">
                <h2 class="title_contact font-bold text-2xl capitalize tracking-widest">all companies</h2>
                <input type="text" name="table_invoice_search" placeholder="Search company name">
            </div>

            <div class="table_companies scroll-shadow-table border-black">
                <!-- table : companies -->
                <table class="mx-auto">
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
                <!-- table : companies_end -->
            </div>
        </div>
    </section>
    <!-- section_table_companies_end -->
</main>

<?php require 'View/includes/footer.php' ?>