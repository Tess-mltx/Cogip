<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="../../src/output.css" rel="stylesheet">
</head>
<body>

<!-- Barre de navigation -->
<nav class="bg-orange-600 text-white py-4">
    <div class="container mx-auto flex justify-between items-left">
        <!-- Première division pour le premier onglet -->
        <div class="border border-white rounded px-2 mt-1">
            <a href="#" class="text-4xl font-bold ">COGIP</a> <!-- Effets hover ajoutés -->
        </div>

        <!-- Les onglets -->
        <div class="flex space-x-10 ml-8 mt-6"> <!-- Décalage des onglets -->
            <a href="#" class="nav-link hover:text-black hover:bg-white rounded md hover:px-1.5">Home</a> <!-- Effets hover ajoutés -->
            <a href="#" class="nav-link hover:text-black hover:bg-white rounded md hover:px-1.5">Invoices</a> <!-- Effets hover ajoutés -->
            <a href="index.php?page=companies-index" class="nav-link hover:text-black hover:bg-white rounded md hover:px-1.5">Companies</a> <!-- Effets hover ajoutés -->
            <a href="index.php?page=contacts-index" class="nav-link hover:text-black hover:bg-white rounded md hover:px-1.5">Contact</a> <!-- Effets hover ajoutés -->
        </div>

        <!-- Deuxième division pour les onglets "Sign Up" et "Login" -->
        <div class="flex space-x-3 ml-5 mt-3.5">
            <a href="#" class="nav-link hover:text-black hover:bg-white rounded md hover:pb-1 hover:px-1.5">Sign Up</a> <!-- Effets hover ajoutés -->
            <a href="#" class="nav-link hover:text-black hover:bg-white rounded md hover:pb-1 hover:px-1.5" >Login</a> <!-- Effets hover ajoutés -->
        </div>
    </div>
</nav>

<!-- Section sous la barre de navigation -->
<section class="bg-orange-600 py-8 flex items-center">
    <div class="container mx-auto flex items-center justify-between">
        <!-- Texte à gauche -->
        <div class="text-left text-white flex-1 px-4">
            <p class="text-6xl font-semibold">MANAGE YOUR CUSTOMERS AND&nbsp;INVOICES EASILY</p>
        </div>
        <!-- Image SVG à droite -->
        <div class="flex-1">
            <img src="../../img/image/Investment data-amico.svg" alt="Image" class="w-full h-auto">
        </div>
    </div>
</section>

</body>
</html>



<?php
// modèle du header à requied pour chaque page