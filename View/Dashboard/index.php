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
    <header class="fixed left-0 top-0 h-screen flex flex-col justify-around items-center w-64 bg-purple-600 text-white shadow-lg">
        <div class="flex flex-col items-center border-b-2 border-white my-4">
            <img src="./img/image/profil.png" alt="profil_dashboard" class="w-24 h-24 rounded-full">
            <h3 class="text-xl font-bold py-3 capitalize">Henry George</h3>
        </div>
        <nav class="flex-1">
            <ul class="mt-2">
                <li class="flex items-center py-2"><i class='bx bxs-dashboard'></i><a href="#" class="px-2 text-xl capitalize hover:text-white transition duration-200 font-bold">Dashboard</a></li>
                <li class="flex items-center py-2"><i class='bx bxs-notepad'></i><a href="index.php?page=dashboard-invoices" class="px-2 text-xl capitalize hover:text-white transition duration-200 font-bold">Invoices</a></li>
                <li class="flex items-center py-2"><i class='bx bxs-business'></i><a href="index.php?page=dashboard-companies" class="px-2 text-xl capitalize hover:text-white transition duration-200 font-bold">Companies</a></li>
                <li class="flex items-center py-2"><i class='bx bxs-contact'></i><a href="index.php?page=dashboard-contacts" class="px-2 text-xl capitalize hover:text-white transition duration-200 font-bold">Contacts</a></li>
            </ul>
        </nav>
        <div class="flex justify-between items-center p-3 w-full">
            <img src="./img/image/profil.png" alt="profil_dashboard" class="w-12 h-12 rounded-full">
            <a href="#" class="font-bold p-3 capitalize hover:text-white transition duration-200">Logout</a>
        </div>
    </header>
    <main class="ml-64 pt-20 pb-12 px-8">
        <div class="flex justify-between items-center mb-8">
            <div>
                <h2 class="text-3xl font-bold text-purple-600 tracking-wider">Dashboard</h2>
                <span class="text-purple-600">/ Dashboard</span>
            </div>
            <div>
                <img src="./img/image/work.svg" alt="working_accounting" class="w-48 h-48">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-8 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold mb-4">Welcome back, Henry!</h2>
                <p class="text-gray-600 mb-6">You can add invoices, companies, and contacts here.</p>
                <a href="#" class="bg-purple-600 hover:bg-purple-700 text-white font-semibold py-2 px-4 rounded transition duration-200">Get Started</a>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold mb-4">Last Invoices</h2>
                <table class="w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 border">Invoice Number</th>
                            <th class="px-4 py-2 border">Company</th>
                            <th class="px-4 py-2 border">Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($invoices as $invoice) : ?>
                            <?php $company = (new CompaniesController())->singleCompany($invoice->company_id);?>
                            <tr>
                                <td class="px-4 py-2 border"><?= $invoice->reference ?></td>
                                <td class="px-4 py-2 border"><?= $company[0]->name ?></td>
                                <td class="px-4 py-2 border"><?= $invoice->created_at ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-md mr-auto">
                <h2 class="text-2xl font-semibold mb-4">Last Contacts</h2>
                <table class="w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 border">Name</th>
                            <th class="px-8 py-2 border">Phone</th>
                            <th class="px-4 py-2 border">Email</th>
                            <th class="px-4 py-2 border">Company</th>
                            <th class="px-4 py-2 border">Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($contacts as $contact) : ?>
                            <?php $company = (new CompaniesController())->singleCompany($contact->company_id);?>
                            <tr>
                                <td class="px-8 py-2 border"><?= $contact->name ?></td>
                                <td class="px-18 py-2 border"><?= $contact->phone ?></td>
                                <td class="px-8 py-2 border"><?= $contact->email ?></td>
                                <td class="px-8 py-2 border"><?= $company[0]->name ?></td>
                                <td class="px-18 py-2 border"><?= $contact->created_at ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <br>
            <div class="bg-white p-8 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold mb-4">Last Companies</h2>
                <table class="w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 border">Name</th>
                            <th class="px-4 py-2 border">TVA</th>
                            <th class="px-4 py-2 border">Country</th>
                            <th class="px-4 py-2 border">Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($companies as $company) : ?>
                            <tr>
                                <td class="px-4 py-2 border"><?= $company->name ?></td>
                                <td class="px-4 py-2 border"><?= $company->tvaNumber ?></td>
                                <td class="px-4 py-2 border"><?= $company->country ?></td>
                                <td class="px-4 py-2 border"><?= $company->created_at?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-md" >
            <img src="./img/image/graph.jpg" alt="GRAPHIQUE" class="w-auto h-auto">
            </div>
        </div>

        
    </main>
</body>

</html>
