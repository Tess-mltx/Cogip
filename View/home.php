<?php require 'View/includes/header.php'; ?>

<!-- main -->
<main class="bg-primary-color-orange">
    <style>
        main {
            padding-top: 85px;
        }

        .section_home_one {
            min-height: 80vh;
        }

        .form {
            width: 60vw;
            height: 80vh;
            background: white;
            clip-path: polygon(20% 0%, 100% 0px, 100% 20%, 100% 80%, 100% 100%, 0px 100%, 40.46% 50.52%, 0px 0px);
            z-index: 10;
        }

        .account {
            position: relative;
            right: -50px;
            z-index: 11;
        }

        .citation {
            font-weight: 900;
            letter-spacing: 2px;
            font-size: 16px;
        }

        .service {
            color: white;
        }

        .container_card {
            width: 70%;
            display: flex;
            flex-wrap: wrap;
            margin: 0 auto;
        }

        .card {
            width: 30%;
            margin: 10px;
            border: solid 2px black;
            padding: 10px;
            text-align: center;
            border-radius: 10px;
        }

        .card i {
            font-size: 26px;
            padding: 15px 0;
        }

        .our-services {
            padding: 5% 0;
        }

        .services {
            padding: 10px 0;
        }

        .table_invoice,
        .table_contact, 
        .table_companies {
            border-radius: 12px;
            overflow: hidden;
            width: auto;
            transition: box-shadow 0.5s ease;
            margin: 15px 0;
        }

        table {
            width: 800px;
            border: none;
        }

        .title_invoice,
        .title_contact,
        .title_companies {
            margin: 30px;
        }
    </style>
    <!-- Section sous la barre de navigation -->
    <section class="section_home_one flex items-center bg-sky-500/100">
        <div class="container_left mx-auto flex items-center justify-between">
            <!-- Texte à gauche -->
            <div class="text-left text-white flex-1 px-5">
                <p class="text-6xl font-semibold">Create excellence from every transaction</p>
                <p class="py-5 mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt facere soluta vitae itaque dignissimos sapiente magnam, assumenda ad iusto id voluptatum 
                voluptas voluptatibus voluptate laudantium harum. Quo quam quisquam quis?</p>
                <a href="#" class="border-2 border-black px-4 py-2 rounded font-bold tracking-widest bg-primary-color-orange">GET A CUSTOM PROPOSAL</a>
            </div>

            <div class="form">
                <img class="account" src="img/image/account_banner.jpg" alt="banner_account">
            </div>
        </div>
    </section>

    <section class="our-services">
        <h2 class="services text-center text-3xl font-bold tracking-widest">Our services</h2>
        <div class="container_card">
            <div class="card bg-sky-500/100">
                <h3 class="service tracking-widest">Simplified Financial Management</h3>
                <i class='bx bxs-coin-stack'></i>
                <p>Simplify your finances with our intuitive accounting management solution.</p>
            </div>
            <div class="card bg-sky-500/100">
                <h3 class="service tracking-widest">Dedicated Customer Service</h3>
                <i class='bx bx-headphone'></i>
                <p>Get personalized and responsive customer support whenever you need it.</p>
            </div>
            <div class="card bg-sky-500/100">
                <h3 class="service tracking-widest">Tailored Solutions</h3>
                <i class='bx bx-cog'></i>
                <p>Benefit from customized solutions tailored to your business's specific needs.</p>
            </div>
            <div class="card bg-sky-500/100">
                <h3 class="service tracking-widest">Secure Data Access</h3>
                <i class='bx bx-lock-alt'></i>
                <p>Protect your confidential information with our advanced security system.</p>
            </div>
            <div class="card bg-sky-500/100">
                <h3 class="service tracking-widest">Real-Time Detailed Reports</h3>
                <i class='bx bx-line-chart'></i>
                <p>Access detailed and up-to-date reports instantly for better visibility.</p>
            </div>
            <div class="card bg-sky-500/100">
                <h3 class="service tracking-widest">Seamless Integration</h3>
                <i class='bx bx-link'></i>
                <p>Easily integrate our services with your existing systems for a smooth experience.</p>
            </div>
            <div class="card bg-sky-500/100">
                <h3 class="service tracking-widest">Enhanced Financial Insights</h3>
                <i class='bx bx-bar-chart'></i>
                <p>Gain deeper financial insights with advanced analytics tools.</p>
            </div>
            <div class="card bg-sky-500/100">
                <h3 class="service tracking-widest">Automated Expense Tracking</h3>
                <i class='bx bx-receipt'></i>
                <p>Effortlessly track expenses with automated systems for accurate record-keeping.</p>
            </div>
            <div class="card bg-sky-500/100">
                <h3 class="service tracking-widest">Streamlined Audit Preparation</h3>
                <i class='bx bx-list-ul'></i>
                <p>Simplify audit preparation with organized documentation and streamlined processes.</p>
            </div>
        </div>
    </section>

    <!-- section_table_last_invoices -->
    <section class="section_last_invoice">
        <h2 class="title_invoice font-bold text-2xl capitalize tracking-widest">last invoices</h2>

        <div class="flex justify-center items-center">
            <!-- table n°1 : last invoices -->

            <div class="table_invoice scroll-shadow-table border border-black">
                <table>
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
                <!-- table n°1 : last invoices_end -->
            </div>
        </div>

    </section>
    <!-- section_table_last_invoices_end -->

    <!-- section_table_last_contacts -->
    <section class="section_last_contact">
        <h2 class="title_contact font-bold text-2xl capitalize tracking-widest">last contacts</h2>

        <div class="flex justify-center items-center">

            <div class="table_contact scroll-shadow-table">
                <!-- table n°2 : last contacts -->
                <table>
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
                                <td class="bg-sky-500/100 px-4 py-3 border"><?= $contact->name ?></td>
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

    <!-- section_table_last_companies -->
    <section class="section_last_companies">
        <h2 class="title_companies font-bold text-2xl capitalize tracking-widest">last companies</h2>

        <div class="flex justify-center items-center">

            <div class="table_companies scroll-shadow-table">
                <!-- table n°3 : last companies -->
                <table>
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
                                <td class="bg-sky-500/100 px-4 py-3 border"><?= $company->created_at ?></td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
                <!-- table n°3 : last companies_end -->
            </div>
        </div>
    </section>
    <!-- section_table_last_companies_end -->
</main>
<!-- main_end -->

</body>

</html>

<?php require 'View/includes/footer.php' ?>