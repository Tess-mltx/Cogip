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
</head>

<body class="bg-primary-color-orange">
    <style>
        body {
            overflow-x: hidden;
        }

        header {
            font-family: 'Poppins';
            z-index: 999;
            box-shadow: 0 0 10px black;
        }

        header.scrolled {
            box-shadow: inset 1.30px 2.25px 3.55px -0.44px rgba(0, 0, 0, 0.15),
                inset -1.95px -3.38px 3.55px -0.44px rgba(0, 0, 0, 0.3),
                3.90px 6.75px 2.66px -1.33px rgba(0, 0, 0, 0.6);
        }

        footer {
            padding: 0 5%;
            box-shadow: 0 0 10px black;
        }

        .nav-second {
            display: none;
        }

        .scrolled .nav-primary {
            display: none;
        }

        .scrolled .nav-second {
            display: flex;
        }

        .burger_menu {
            display: none;
        }

        .burger_menu .line {
            margin: 3px 0;
            transition: transform 0.3s ease;
        }

        .burger_menu.active .line:nth-child(1) {
            transform: translateY(8px) rotate(45deg);
        }

        .burger_menu.active .line:nth-child(2) {
            transform: translateY(-4px) rotate(-45deg);
            margin-top: 4px;
        }

        .container_menu {
            display: none;
        }

        .container_menu nav {
            height: 50%;
        }

        .container_menu nav a {
            margin: 10px 0;
        }

        .active_nav_bar {
            display: flex;
            justify-content: space-around;
        }

        .card {
            transition: box-shadow 0.5s ease;
        }

        .show-box-shadow {
            box-shadow: inset 1.00px 1.73px 2.73px -0.34px rgba(0, 0, 0, 0.15),
                inset -1.50px -2.60px 2.73px -0.34px rgba(0, 0, 0, 0.3),
                3.00px 5.20px 2.05px -1.02px rgba(0, 0, 0, 0.6);
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
    <header class="fixed transition-all duration-200 bg-primary-color-orange py-2 w-full">
        <div class="flex justify-between items-center mx-10">
            <div class="flex justify-center items-center">
                <img src="img/image/logo_cojip.png" alt="logo_cojip" width="70" height="70">
                <a href="index.php?page=" class="font-bold tracking-widest text-xl">COGIP</a>
            </div>

            <nav class="nav-primary flex space-x-5">
                <a href="index.php?page=" class="mr-5 text-lg font-bold tracking-widest capitalize hover:text-white">home</a>
                <a href="index.php?page=invoices-index" class="mr-5 text-lg font-bold tracking-widest capitalize hover:text-white">invoices</a>
                <a href="index.php?page=companies-index" class="mr-5 text-lg font-bold tracking-widest capitalize hover:text-white">companies</a>
                <a href="index.php?page=contacts-index" class="mr-5 text-lg font-bold tracking-widest capitalize hover:text-white">contact</a>
            </nav>

            <nav class="nav-second flex space-x-5">
                <a href="index.php?page=" class="transition-all duration-200 font-bold tracking-widest capitalize hover:text-white text-2xl"><i class='bx bxs-home'></i></a>
                <a href="index.php?page=invoices-index" class="transition-all duration-200 mr-5 font-bold tracking-widest capitalize hover:text-white text-2xl"><i class='bx bxs-detail'></i></a>
                <a href="index.php?page=companies-index" class="transition-all duration-200 mr-5 font-bold tracking-widest capitalize hover:text-white text-2xl"><i class='bx bxs-business'></i></a>
                <a href="index.php?page=contacts-index" class="transition-all duration-200 mr-5 font-bold tracking-widest capitalize hover:text-white text-2xl"><i class='bx bxs-contact'></i></a>
            </nav>

            <div class="connexion flex">
                <a href="#" class=" font-bold capitalize tracking-widest text-lg mr-4 px-4 py-2 hover:text-white">sign up</a>
                <a href="#" class="font-bold capitalize tracking-widest text-lg px-4 py-2 hover:text-white">login</a>
            </div>
            <div class="burger_menu flex flex-col justify-center items-center w-8 h-8 cursor-pointer">
                <div class="line w-[25px] h-[4px] my-[3px] mx-0 bg-black"></div>
                <div class="line w-[25px] h-[4px] my-[3px] mx-0 bg-black"></div>
            </div>
        </div>
        <div class="container_menu bg-primary-color-orange absolute w-full h-[100vh]">
            <nav class="flex flex-col pt-2.5">
                <a href="index.php?page=" class="text-center text-xl font-bold tracking-widest capitalize hover:text-white">home</a>
                <a href="index.php?page=invoices-index" class="text-center text-xl font-bold tracking-widest capitalize hover:text-white">invoices</a>
                <a href="index.php?page=companies-index" class=" text-center text-xl font-bold tracking-widest capitalize hover:text-white">companies</a>
                <a href="index.php?page=contacts-index" class=" text-center text-xl font-bold tracking-widest capitalize hover:text-white">contact</a>
                <a href="#" class=" text-center font-bold capitalize tracking-widest text-xl hover:text-white">sign up</a>
                <a href="#" class=" text-center font-bold capitalize tracking-widest text-xl hover:text-white">login</a>
            </nav>
        </div>
    </header>
    <script type="module" src="src/js/script.js"></script>
</body>

</html>