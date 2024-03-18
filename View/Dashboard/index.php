<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
<header class="fixed top-0 left-0 right-0 h-16 md:h-screen md:flex flex-col justify-between items-center w-full md:w-64 bg-purple-600 text-white shadow-lg">
        <div class="flex flex-row justify-between items-center w-full px-4 md:px-0">
            <div class="flex items-center">
                <img src="./img/image/profil.png" alt="profil_dashboard" class="w-12 h-12 md:w-16 md:h-16 rounded-full">
                <div class="ml-2 text-sm md:text-base font-bold capitalize">
                    <p>Henry George</p>
                    <p class="text-xs md:text-sm">Admin</p>
                </div>
            </div>
            <button class="md:hidden block text-white focus:outline-none">
                <i class="bx bx-menu text-2xl"></i>
            </button>
        </div>
        <nav class="md:hidden flex flex-row justify-end items-center w-full">
            <ul class="flex flex-row">
                <li class="flex items-center py-2"><i class='bx bxs-dashboard'></i><a href="#" class="ml-2 text-sm capitalize hover:text-white transition duration-200 font-bold">Dashboard</a></li>
                <li class="flex items-center py-2"><i class='bx bxs-notepad'></i><a href="index.php?page=dashboard-invoices" class="ml-2 text-sm capitalize hover:text-white transition duration-200 font-bold">Invoices</a></li>
                <li class="flex items-center py-2"><i class='bx bxs-business'></i><a href="index.php?page=dashboard-companies" class="ml-2 text-sm capitalize hover:text-white transition duration-200 font-bold">Companies</a></li>
                <li class="flex items-center py-2"><i class='bx bxs-contact'></i><a href="index.php?page=dashboard-contacts" class="ml-2 text-sm capitalize hover:text-white transition duration-200 font-bold">Contacts</a></li>
            </ul>
        </nav>
        <nav class="hidden md:flex flex-col justify-center items-center mb-4">
            <ul>
                <li class="flex items-center py-2"><i class='bx bxs-dashboard'></i><a href="#" class="ml-2 text-sm capitalize hover:text-white transition duration-200 font-bold">Dashboard</a></li>
                <li class="flex items-center py-2"><i class='bx bxs-notepad'></i><a href="index.php?page=dashboard-invoices" class="ml-2 text-sm capitalize hover:text-white transition duration-200 font-bold">Invoices</a></li>
                <li class="flex items-center py-2"><i class='bx bxs-business'></i><a href="index.php?page=dashboard-companies" class="ml-2 text-sm capitalize hover:text-white transition duration-200 font-bold">Companies</a></li>
                <li class="flex items-center py-2"><i class='bx bxs-contact'></i><a href="index.php?page=dashboard-contacts" class="ml-2 text-sm capitalize hover:text-white transition duration-200 font-bold">Contacts</a></li>
            </ul>
        </nav>
        <div class="flex justify-end items-center w-full px-4 md:px-0">
            <a href="#" class="font-bold ml-2 capitalize hover:text-white transition duration-200 text-sm">Logout</a>
        </div>
    </header>
    <main class="md:ml-64 pt-16 md:pt-20 pb-12 px-4 md:px-8">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-4 md:p-8 rounded-lg shadow-md">
                <h2 class="text-lg md:text-2xl font-semibold mb-2 md:mb-4">Welcome back, Henry!</h2>
                <p class="text-sm md:text-base text-gray-600 mb-4 md:mb-6">You can add invoices, companies, and contacts here.</p>
                <a href="#" class="bg-purple-600 hover:bg-purple-700 text-white font-semibold py-2 md:py-3 px-3 md:px-4 rounded transition duration-200 text-sm md:text-base">Get Started</a>
            </div>
            <div class="flex items-center justify-center mt-4">
                <img src="./img/image/work.svg" alt="working_accounting" class="w-48 h-48 md:w-64 md:h-64">
            </div>
            
            <div class="bg-white p-4 md:p-8 rounded-lg shadow-md">
                <h2 class="text-lg md:text-2xl font-semibold mb-2 md:mb-4">Last Invoices</h2>
                <table class="w-full text-sm md:text-base">
                    <thead>
                        <tr>
                            <th class="px-2 md:px-4 py-2 border">Invoice Number</th>
                            <th class="px-2 md:px-4 py-2 border">Company</th>
                            <th class="px-2 md:px-4 py-2 border">Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($invoices as $invoice) : ?>
                            <?php $company = (new CompaniesController())->singleCompany($invoice->company_id);?>
                            <tr>
                                <td class="px-2 md:px-4 py-2 border"><?= $invoice->reference ?></td>
                                <td class="px-2 md:px-4 py-2 border"><?= $company[0]->name ?></td>
                                <td class="px-2 md:px-4 py-2 border"><?= $invoice->created_at ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            
            <div class="bg-white p-4 md:p-8 rounded-lg shadow-md ">
                <h2 class="text-lg md:text-2xl font-semibold mb-2 md:mb-4">Last Companies</h2>
                <table class="w-full text-sm md:text-base">
                    <thead>
                        <tr>
                            <th class="px-2 md:px-4 py-2 border">Name</th>
                            <th class="px-2 md:px-4 py-2 border">TVA</th>
                            <th class="px-2 md:px-4 py-2 border">Country</th>
                            <th class="px-2 md:px-4 py-2 border">Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($companies as $company) : ?>
                            <tr>
                                <td class="px-2 md:px-4 py-2 border"><?= $company->name ?></td>
                                <td class="px-2 md:px-4 py-2 border"><?= $company->tvaNumber ?></td>
                                <td class="px-2 md:px-4 py-2 border"><?= $company->country ?></td>
                                <td class="px-2 md:px-4 py-2 border"><?= $company->created_at?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="bg-white p-4 md:p-8 rounded-lg shadow-md mr-auto">
                <h2 class="text-lg md:text-2xl font-semibold mb-2 md:mb-4">Last Contacts</h2>
                <table class="w-full text-sm md:text-base">
                    <thead>
                        <tr>
                            <th class="px-2 md:px-4 py-2 border">Name</th>
                            <th class="px-2 md:px-4 py-2 border">Phone</th>
                            <!-- <th class="px-2 md:px-4 py-2 border">Email</th> -->
                            <th class="px-2 md:px-4 py-2 border">Company</th>
                            <th class="px-2 md:px-4 py-2 border">Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($contacts as $contact) : ?>
                            <?php $company = (new CompaniesController())->singleCompany($contact->company_id);?>
                            <tr>
                                <td class="px-2 md:px-4 py-2 border"><?= $contact->name ?></td>
                                <td class="px-2 md:px-4 py-2 border"><?= $contact->phone ?></td>
                                <!-- <td class="px-2 md:px-4 py-2 border"><?= $contact->email ?></td> -->
                                <td class="px-2 md:px-4 py-2 border"><?= $company[0]->name ?></td>
                                <td class="px-2 md:px-4 py-2 border"><?= $contact->created_at ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>

</html>
