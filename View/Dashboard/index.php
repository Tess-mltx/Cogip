<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<style>
    body {
        font-family: 'poppins';
    }

    header {
        background-color: #6959DF;
        box-shadow: inset 2.00px 3.46px 5.46px -0.68px rgba(0, 0, 0, 0.15),
            inset -3.00px -5.20px 5.46px -0.68px rgba(0, 0, 0, 0.3),
            6.00px 10.39px 4.10px -2.05px rgba(0, 0, 0, 0.6);
    }

    main {
        background: #383839;
    }

    .subtitle_dashboard {
        color: #6959DF;
    }

    i {
        font-size: 1.4rem;
    }

    .container_welcome {
        width: 564px;
        height: 130px;
        background-color: #6959DF;
        border-radius: 12px;
        box-shadow: inset 2.00px 3.46px 5.46px -0.68px rgba(0, 0, 0, 0.15),
            inset -3.00px -5.20px 5.46px -0.68px rgba(0, 0, 0, 0.3),
            6.00px 10.39px 4.10px -2.05px rgba(0, 0, 0, 0.6);

    }

    .container_information {
        background: #6959DF;
        box-shadow: inset 2.00px 3.46px 5.46px -0.68px rgba(0, 0, 0, 0.15),
            inset -3.00px -5.20px 5.46px -0.68px rgba(0, 0, 0, 0.3),
            6.00px 10.39px 4.10px -2.05px rgba(0, 0, 0, 0.6);
    }

    table {
        box-shadow: inset 1.60px 2.77px 4.37px -0.55px rgba(0, 0, 0, 0.15),
            inset -2.40px -4.16px 4.37px -0.55px rgba(187, 186, 186, 0.3),
            4.80px 8.31px 3.28px -1.64px rgba(38, 38, 38, 0.6);
    }

    .ellipse {
        fill: #ff0000;
    }
</style>

<body class="grid grid-cols-5 grid-rows-3 min-h-screen">
    <header class="flex flex-col h-full col-start-1 col-end-2 row-start-1 row-end-4 justify-around items-center w-64 fixed top-0 left-0 h-full">
        <!-- Contenu de votre en-tête -->
        <div class="flex flex-col items-center border-b-2 border-white w-full my-4">
            <img src="../../img/image/profil.png" alt="profil_dashboard" width="100" height="100">
            <h3 class="px-2 text-xl font-bold py-3 tracking-wider capitalize">henry george</h3>
        </div>
        <nav class="flex-1">
            <ul class="mt-2">
                <li class="flex items-center py-2"><i class='bx bxs-dashboard'></i><a class="px-2 text-xl capitalize hover:text-white transition duration-200 text-white tracking-wider font-bold" href="#">dashboard</a></li>
                <li class="flex items-center py-2"><i class='bx bxs-notepad'></i><a class="px-2 text-xl capitalize hover:text-white transition duration-200 tracking-wider font-bold" href="#">invoices</a></li>
                <li class="flex items-center py-2"><i class='bx bxs-business'></i><a class="px-2 text-xl capitalize hover:text-white transition duration-200 tracking-wider font-bold" href="#">companies</a></li>
                <li class="flex items-center py-2"><i class='bx bxs-contact'></i><a class="px-2 text-xl capitalize hover:text-white transition duration-200 tracking-wider font-bold" href="#">contacts</a></li>
            </ul>
        </nav>
        <div class="flex justify-between items-center p-3 w-full">
            <img src="../../img/image/profil.png" alt="profil_dashboard" width="50" height="50">
            <div>
                <a class="font-bold p-3 tracking-widest capitalize hover:text-white transition duration-200" href="#">logout</a>
            </div>
        </div>
    </header>
    <main class="overflow-y-auto grid row-span-3 col-span-4 absolute inset-y-0 inset-x-0 py-4 ml-64">
        <div class="flex w-full justify-around max-h-72 my-4 pr-12">
            <div class="flex flex-col justify-around">
                <div>
                    <h2 class="subtitle_dashboard text-2xl font-bold tracking-widest tracking-wider capitalize py-1">dashboard</h2>
                    <span class="tracking-wider text-white">/dashboard</span>
                </div>
                <div class="container_welcome text-center flex flex-col items-center justify-center border border-white text-white">
                    <h3 class="font-bold text-3xl text-white tracking-widest">Welcome back Henry!</h3>
                    <p class="py-2">You can here add an invoice, a company
                        and some contacts</p>
                </div>
            </div>
            <div>
                <img src="../../img/image/work.svg" alt="working_accounting" class="work-svg" width="300" height="300">
            </div>
        </div>

        <div class="mx-10">
            <div class="grid grid-cols-2 grid-rows-2 gap-5">
                <div class="container_information col-span-1 row-span-1 border h-96 rounded-3xl w-11/12 cursor-pointer">
                </div>
                <div class="container_information col-span-1 row-span-1 border h-96 rounded-3xl w-11/12 cursor-pointer">
                    <div class="flex flex-col items-center my-10">
                        <h2 class="capitalize tracking-widest text-white font-bold">last invoices</h2>
                        <table class="my-2 w-5/6">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2.5 border capitalize">invoice number</th>
                                    <th class="px-4 py-2.5 border capitalize">company</th>
                                    <th class="px-4 py-2.5 border capitalize">created at</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                </tr>
                                <tr>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                </tr>
                                <tr>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                </tr>
                                <tr>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                </tr>
                                <tr>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                </tr>
                                <tr>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                </tr>
                                <tr>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                </tr>
                                <tr>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="container_information col-span-1 row-span-1 border h-96 rounded-3xl w-11/12 cursor-pointer">
                    <div class="flex flex-col items-center my-10 ">
                        <h2 class="capitalize tracking-widest text-white font-bold">last contacts</h2>
                        <table class="my-2 w-5/6">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2.5 border capitalize">name</th>
                                    <th class="px-4 py-2.5 border capitalize">phone</th>
                                    <th class="px-4 py-2.5 border capitalize">mail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                </tr>
                                <tr>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                </tr>
                                <tr>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                </tr>
                                <tr>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                </tr>
                                <tr>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                </tr>
                                <tr>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                </tr>
                                <tr>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                </tr>
                                <tr>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class=" container_information col-span-1 row-span-1 border h-96 rounded-3xl w-11/12 cursor-pointer">
                    <div class="flex flex-col items-center my-10">
                        <h2 class="capitalize tracking-widest text-white font-bold">last companies</h2>

                        <table class="my-2 w-5/6">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2.5 border capitalize">name</th>
                                    <th class="px-4 py-2.5 border">TVA</th>
                                    <th class="px-4 py-2.5 border capitalize">country</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                </tr>
                                <tr>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                </tr>
                                <tr>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                </tr>
                                <tr>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                </tr>
                                <tr>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                </tr>
                                <tr>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                </tr>
                                <tr>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                </tr>
                                <tr>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                    <td class="bg-sky-500/100 px-4 py-3 border"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
<?php

// page du dashboard avec le recap de tout