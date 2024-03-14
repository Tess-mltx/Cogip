<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="src/css/output.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script type='module' src='Scripts/main.js' defer></script>
</head>

<body class="bg-slate-50">
    <style>
        body{
            overflow-x: hidden;
        }

        header {
            font-family: 'Poppins';
        }

        .scrolled .nav-primary {
            display: none;
        }

        .scrolled .nav-second {
            display: flex;
        }

        .burger_menu .line {
            transition: transform 0.3s ease;
        }

        .burger_menu.active .line:nth-child(1) {
            transform: translateY(8px) rotate(45deg);
        }

        .burger_menu.active .line:nth-child(2) {
            transform: translateY(-4px) rotate(-45deg);
            margin-top: 4px;
        }

        .active_nav_bar {
            display: flex;
            justify-content: space-around;
        }

        .form {
            clip-path: polygon(20% 0%, 100% 0px, 100% 20%, 100% 80%, 100% 100%, 0px 100%, 40.46% 50.52%, 0px 0px);
        }

        .table_invoice,
        .table_contact,
        .table_companies,
        .link_home, .faq, .card {
            transition: box-shadow 0.5s ease;
        }

        .paragraph_faq.open {
            display: block;
        }

        .paragraph_faq {
            display: none;
        }

        @media screen and (max-width: 1024px) {
            .nav-primary,
            .connexion {
                display: none;
            }

            .burger_menu {
                display: flex;
            }

            .scrolled .nav-second {
                display: none;
            }
        }

    </style>
    <header class="fixed transition-all duration-200 py-2 w-full z-[999] shadow-[0_0px_10px_rgba(0,0,0,1)] bg-white">
        <div class="flex justify-between items-center mx-10">
            <div class="flex justify-center items-center">
                <img src="img/image/logo_cojip.png" alt="logo_cojip" width="70" height="70">
                <a href="index.php?page=" class="font-bold tracking-widest text-xl">COGIP</a>
            </div>

            <nav class="nav-primary flex space-x-5">
                <a href="index.php?page=" class="mr-5 text-lg font-bold tracking-widest capitalize hover:text-sky-500">home</a>
                <a href="index.php?page=invoices-index" class="mr-5 text-lg font-bold tracking-widest capitalize hover:text-sky-500">invoices</a>
                <a href="index.php?page=companies-index" class="mr-5 text-lg font-bold tracking-widest capitalize hover:text-sky-500">companies</a>
                <a href="index.php?page=contacts-index" class="mr-5 text-lg font-bold tracking-widest capitalize hover:text-sky-500">contact</a>
            </nav>

            <nav class="nav-second hidden flex space-x-5">
                <a href="index.php?page=" class="transition-all duration-200 font-bold tracking-widest capitalize hover:text-white text-2xl"><i class='bx bxs-home'></i></a>
                <a href="index.php?page=invoices-index" class="transition-all duration-200 mr-5 font-bold tracking-widest capitalize hover:text-sky-500 text-2xl"><i class='bx bxs-detail'></i></a>
                <a href="index.php?page=companies-index" class="transition-all duration-200 mr-5 font-bold tracking-widest capitalize hover:text-sky-500 text-2xl"><i class='bx bxs-business'></i></a>
                <a href="index.php?page=contacts-index" class="transition-all duration-200 mr-5 font-bold tracking-widest capitalize hover:text-sky-500 text-2xl"><i class='bx bxs-contact'></i></a>
            </nav>

            <div class="connexion flex">
                <a href="index.php?page=register" class=" font-bold capitalize tracking-widest text-lg mr-4 px-4 py-2 hover:text-sky-500">sign up</a>
                <a href="/Cogip/View/sign/login.php" class="font-bold capitalize tracking-widest text-lg px-4 py-2 hover:text-sky-500">login</a>
            </div>

            <div class="burger_menu hidden flex flex-col justify-center items-center w-8 h-8 cursor-pointer">
                <div class="line w-[25px] h-[4px] my-[3px] my-[3px] mx-0 bg-black"></div>
                <div class="line w-[25px] h-[4px] my-[3px] mx-0 bg-black"></div>
            </div>
        </div>
        <div class="container_menu hidden absolute w-full h-[100vh] bg-sky-500/100">
            <nav class="flex flex-col pt-2.5 h-[50%]">
                <a href="index.php?page=" class="text-center text-xl font-bold tracking-widest capitalize hover:text-white my-2.5">home</a>
                <a href="index.php?page=invoices-index" class="text-center text-xl font-bold tracking-widest capitalize hover:text-white my-2.5">invoices</a>
                <a href="index.php?page=companies-index" class=" text-center text-xl font-bold tracking-widest capitalize hover:text-white my-2.5">companies</a>
                <a href="index.php?page=contacts-index" class=" text-center text-xl font-bold tracking-widest capitalize hover:text-white my-2.5">contact</a>
                <a href="#" class=" text-center font-bold capitalize tracking-widest text-xl hover:text-white my-2.5">sign up</a>
                <a href="#" class=" text-center font-bold capitalize tracking-widest text-xl hover:text-white my-2.5">login</a>
            </nav>
        </div>

    </header>
    <script type="module" src="src/js/script.js"></script>
</body>

</html>