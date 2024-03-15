<?php require 'View/includes/header.php'; ?>
<!-- main -->
<main class=" pt-[85px] transition-all duration-500 ease-linear bg-slate-50">
    <!-- Section sous la barre de navigation -->
    <section class="section_home_one min-h-[80vh] flex items-center bg-sky-500/100">
        <div class="container_left mx-auto flex items-center justify-between">
            <!-- Texte à gauche -->
            <div class="text-center text-white lg:text-left lg:w-1/2 lg:mx-10 px-5">
                <p class="text-6xl font-semibold">Create excellence from every transaction</p>
                <p class="py-5 mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt facere soluta vitae itaque dignissimos sapiente magnam, assumenda ad iusto id voluptatum
                    voluptas voluptatibus voluptate laudantium harum. Quo quam quisquam quis?</p>
                <a href="#" class="link_home border-2 border-black px-4 py-2 rounded font-bold tracking-widest transition duration-250 hover:bg-white hover:text-sky-500">GET A CUSTOM PROPOSAL</a>
            </div>

            <div class="form h-[80vh] bg-white w-[60vw]">
                <img class="account relative h-[80vh] z-10 -right-10" src="img/image/account_banner.jpg" alt="banner_account">
            </div>
        </div>
    </section>

    <section class="our-services pt-10">
        <h2 class="services text-center text-3xl font-bold tracking-widest p-3">Our services</h2>
        <div class="container_card grid grid-cols-1 md:grid-cols-2 md:justify-center lg:grid-cols-3 mx-auto flex flex-wrap justify-center w-9/12">
            <div class="card flex flex-col justify-between  text-center border-2 border-black rounded-lg p-3 m-3 ">
                <h3 class="service tracking-widest ">Simplified Financial Management</h3>
                <i class='bx bxs-coin-stack text-3xl py-4'></i>
                <p>Simplify your finances with our intuitive accounting management solution.</p>
            </div>
            <div class="card flex flex-col justify-between  text-center border-2 border-black rounded-lg p-3 m-3">
                <h3 class="service  tracking-widest">Dedicated Customer Service</h3>
                <i class='bx bx-headphone text-3xl py-4'></i>
                <p>Get personalized and responsive customer support whenever you need it.</p>
            </div>
            <div class="card flex flex-col justify-between text-center border-2 border-black rounded-lg p-3 m-3">
                <h3 class="service tracking-widest">Tailored Solutions</h3>
                <i class='bx bx-cog text-3xl py-4'></i>
                <p>Benefit from customized solutions tailored to your business's specific needs.</p>
            </div>
            <div class="card flex flex-col justify-between text-center border-2 border-black rounded-lg p-3 m-3">
                <h3 class="service tracking-widest">Secure Data Access</h3>
                <i class='bx bx-lock-alt text-3xl py-4'></i>
                <p>Protect your confidential information with our advanced security system.</p>
            </div>
            <div class="card flex flex-col justify-between text-center border-2 border-black rounded-lg p-3 m-3">
                <h3 class="service text-blue-600 tracking-widest">Real-Time Detailed Reports</h3>
                <i class='bx bx-line-chart text-3xl py-4'></i>
                <p>Access detailed and up-to-date reports instantly for better visibility.</p>
            </div>
            <div class="card flex flex-col justify-between text-center border-2 border-black rounded-lg p-3 m-3">
                <h3 class="service tracking-widest">Seamless Integration</h3>
                <i class='bx bx-link text-3xl py-4'></i>
                <p>Easily integrate our services with your existing systems for a smooth experience.</p>
            </div>
            <div class="card flex flex-col justify-between text-center border-2 border-black rounded-lg  p-3 m-3">
                <h3 class="service tracking-widest">Enhanced Financial Insights</h3>
                <i class='bx bx-bar-chart text-3xl py-4'></i>
                <p>Gain deeper financial insights with advanced analytics tools.</p>
            </div>
            <div class="card flex flex-col justify-between text-center border-2 border-black rounded-lg  p-3 m-3">
                <h3 class="service tracking-widest">Automated Expense Tracking</h3>
                <i class='bx bx-receipt text-3xl py-4'></i>
                <p>Effortlessly track expenses with automated systems for accurate record-keeping.</p>
            </div>
            <div class="card flex flex-col justify-between text-center border-2 border-black rounded-lg p-3 m-3">
                <h3 class="service tracking-widest ">Streamlined Audit Preparation</h3>
                <i class='bx bx-list-ul text-3xl py-4'></i>
                <p>Simplify audit preparation with organized documentation and streamlined processes.</p>
            </div>
        </div>
    </section>

    <!-- section_table_last_invoices -->
    <section class="section_last_invoice">
        <h2 class="title_invoice font-bold text-2xl capitalize tracking-widest text-center m-7">last invoices</h2>

        <div class="flex justify-center items-center">
            <!-- table n°1 : last invoices -->
           
                <table class="bg-slate p-8 rounded-lg shadow-md">
                    <thead class="bg-slate-50">
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

    </section>
    <!-- section_table_last_invoices_end -->

    <!-- section_table_last_contacts -->
    <section class="section_last_contact">
        <h2 class="title_contact font-bold text-2xl capitalize tracking-widest text-center m-7">last contacts</h2>

        <div class="flex justify-center items-center">

            <div class="table_contact scroll-shadow-table overflow-hidden my-3.5 mx-0 rounded-lg table-auto mx-1">
                <!-- table n°2 : last contacts -->
                <table class="table-auto">
                    <thead class="bg-slate-50">
                        <tr>
                            <th class="px-4 py-2.5 border capitalize tracking-widest">name</th>
                            <th class="px-4 py-2.5 border capitalize tracking-widest">phone</th>
                            <th class="px-4 py-2.5 border capitalize tracking-widest">mail</th>
                            <th class="px-4 py-2.5 border capitalize tracking-widest">company</th>
                            <th class="px-4 py-2.5 border capitalize tracking-widest">created at</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($contacts as $contact) : ?>
                            <?php $company = (new CompaniesController())->singleCompany($contact->company_id); ?>
                            <tr>
                                <td class="bg-sky-500/100 px-4 py-3 border text-center"><?= $contact->name ?></td>
                                <td class="bg-sky-500/100 px-4 py-3 border text-center"><?= $contact->phone ?></td>
                                <td class="bg-sky-500/100 px-4 py-3 border text-center"> <?= $contact->email ?></td>
                                <td class="bg-sky-500/100 px-4 py-3 border text-center"> <?= $company[0]->name ?></td>
                                <td class="bg-sky-500/100 px-4 py-3 border text-center"> <?= $contact->created_at ?></td>
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
        <h2 class="title_companies font-bold text-2xl capitalize tracking-widest text-center m-7">last companies</h2>

        <div class="flex justify-center items-center">

            <div class="table_companies scroll-shadow-table overflow-hidden my-3.5 mx-0 rounded-lg table-auto">
                <!-- table n°3 : last companies -->
                <table class="table-auto border border-black">
                    <thead class="bg-slate-50">
                        <tr>
                            <th class="px-4 py-2.5 border capitalize tracking-widest">name</th>
                            <th class="px-4 py-2.5 border capitalize tracking-widest">TVA</th>
                            <th class="px-4 py-2.5 border capitalize tracking-widest">country</th>
                            <th class="px-4 py-2.5 border capitalize tracking-widest">created at</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($companies as $company) : ?>
                            <tr>
                                <td class="bg-sky-500/100 px-4 py-3 border text-center"><?= $company->name ?></td>
                                <td class="bg-sky-500/100 px-4 py-3 border text-center"><?= $company->tvaNumber ?></td>
                                <td class="bg-sky-500/100 px-4 py-3 border text-center"><?= $company->country ?></td>
                                <td class="bg-sky-500/100 px-4 py-3 border text-center"><?= $company->created_at ?></td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="faq py-5 duration-500 ease-in-out">
        <div class="my-5">
            <h2 class="text-center py-5 text-3xl capitalize tracking-widest font-bold">frequently asked questions</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 md:w-9/12  gap-4 w-8/12 my-3 mx-auto">
                <article class="faq w-full ">
                    <div class="bg-sky-500/100 flex items-center cursor-pointer px-3 py-1 transition duration-250 hover:bg-white">
                        <div class="faq_icon text-2xl">+</div>
                        <div class="question_answer px-2 text-lg ">What services do you offer at Cojip?</div>
                    </div>
                    <p class="paragraph_faq">This question provides an overview of the services offered by Cojip, helping customers understand what the company provides.</p>
                </article>
                <article class="faq w-full">
                    <div class="bg-sky-500/100 flex items-center cursor-pointer px-3 py-1 transition duration-250 hover:bg-white">
                        <div class="faq_icon text-2xl">+</div>
                        <div class="question_answer px-2 text-lg">What services do you offer at Cojip?</div>
                    </div>
                    <p class="paragraph_faq">This question provides an overview of the services offered by Cojip, helping customers understand what the company provides.</p>
                </article>
                <article class="faq w-full">
                    <div class="bg-sky-500/100 flex items-center cursor-pointer px-3 py-1 transition duration-250 hover:bg-white">
                        <div class="faq_icon text-2xl">+</div>
                        <div class="question_answer px-2 text-lg">What services do you offer at Cojip?</div>
                    </div>
                    <div>
                        <p class="paragraph_faq">This question provides an overview of the services offered by Cojip, helping customers understand what the company provides.</p>
                    </div>
                </article>
                <article class="faq w-full">
                    <div class="bg-sky-500/100 flex items-center cursor-pointer px-3 py-1 transition duration-250 hover:bg-white">
                        <div class="faq_icon text-2xl">+</div>
                        <div class="question_answer px-2 text-lg">What services do you offer at Cojip?</div>
                    </div>
                    <p class="paragraph_faq">This question provides an overview of the services offered by Cojip, helping customers understand what the company provides.</p>
                </article>
                <article class="faq w-full">
                    <div class="bg-sky-500/100 flex items-center cursor-pointer px-3 py-1 transition duration-250 hover:bg-white">
                        <div class="faq_icon text-2xl">+</div>
                        <div class="question_answer px-2 text-lg">What services do you offer at Cojip?</div>
                    </div>
                    <p class="paragraph_faq">This question provides an overview of the services offered by Cojip, helping customers understand what the company provides.</p>
                </article>
                <article class="faq w-full">
                    <div class="bg-sky-500/100 flex items-center cursor-pointer px-3 py-1 transition duration-250 hover:bg-white">
                        <div class="faq_icon text-2xl">+</div>
                        <div class="question_answer px-2 text-lg">What services do you offer at Cojip?</div>
                    </div>
                    <p class="paragraph_faq">This question provides an overview of the services offered by Cojip, helping customers understand what the company provides.</p>
                </article>
                <article class="faq w-full">
                    <div class="bg-sky-500/100 flex items-center cursor-pointer px-3 py-1 transition duration-250 hover:bg-white">
                        <div class="faq_icon text-2xl">+</div>
                        <div class="question_answer px-2 text-lg">What services do you offer at Cojip?</div>
                    </div>
                    <p class="paragraph_faq">This question provides an overview of the services offered by Cojip, helping customers understand what the company provides.</p>
                </article>
                <article class="faq w-full">
                    <div class="bg-sky-500/100 flex items-center cursor-pointer px-3 py-1 transition duration-250 hover:bg-white">
                        <div class="faq_icon text-2xl">+</div>
                        <div class="question_answer px-2 text-lg">What services do you offer at Cojip?</div>
                    </div>
                    <p class="paragraph_faq">This question provides an overview of the services offered by Cojip, helping customers understand what the company provides.</p>
                </article>
                <article class="faq w-full">
                    <div class="bg-sky-500/100 flex items-center cursor-pointer px-3 py-1 transition duration-250 hover:bg-white">
                        <div class="faq_icon text-2xl">+</div>
                        <div class="question_answer px-2 text-lg">What services do you offer at Cojip?</div>
                    </div>
                    <p class="paragraph_faq">This question provides an overview of the services offered by Cojip, helping customers understand what the company provides.</p>
                </article>
                <article class="faq w-full">
                    <div class="bg-sky-500/100 flex items-center cursor-pointer px-3 py-1 transition duration-250 hover:bg-white">
                        <div class="faq_icon text-2xl">+</div>
                        <div class="question_answer px-2 text-lg">What services do you offer at Cojip?</div>
                    </div>
                    <p class="paragraph_faq">This question provides an overview of the services offered by Cojip, helping customers understand what the company provides.</p>
                </article>
                <article class="faq w-full">
                    <div class="bg-sky-500/100 flex items-center cursor-pointer px-3 py-1 transition duration-250 hover:bg-white">
                        <div class="faq_icon text-2xl">+</div>
                        <div class="question_answer px-2 text-lg">What services do you offer at Cojip?</div>
                    </div>
                    <p class="paragraph_faq">This question provides an overview of the services offered by Cojip, helping customers understand what the company provides.</p>
                </article>
                <article class="faq w-full">
                    <div class="bg-sky-500/100 flex items-center cursor-pointer px-3 py-1 transition duration-250 hover:bg-white">
                        <div class="faq_icon text-2xl">+</div>
                        <div class="question_answer px-2 text-lg">What services do you offer at Cojip?</div>
                    </div>
                    <p class="paragraph_faq">This question provides an overview of the services offered by Cojip, helping customers understand what the company provides.</p>
                </article>
            </div>
        </div>
    </section>
</main>

</body>

</html>

<?php require 'View/includes/footer.php' ?>