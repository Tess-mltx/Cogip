<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoices</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script type="module" src='Scripts/main.js' defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <form action="index.php?page=dashboard-companies" method="GET" class="search-section">
        <label for="searchInput">Recherche par ID ou par Nom :</label>
        <input type="text" id="searchInput" name="searchInput">
        <button type='submit' id="searchSubmit" name="page" value="dashboard-companies"><i class="fas fa-search"></i> Rechercher</button>
    </form>

    <div class="border border-gray-200 bg-gray-200" id="searchResult">
        <!-- Les données seront affichées ici -->
        <p>Company name : <?= $companies['name'] ?? 'Invalide' ?></p>
        <p>Country : <?= $companies['country'] ?? 'Invalide' ?></p>
        <p>TVA : <?= $companies['tva'] ?? 'Invalide' ?></p>

        <div class="action-icons">
            <button><i class='bx bx-edit-alt' id="editBtn"></i></button>
            <button><i class='bx bx-trash'></i></button>
        </div>

    </div>

    <form action="index.php?page=dashboard-companies" class="activeds" id="editForm" method="POST">
        <label for="name">Name: </label>
        <input name="name" type="text" value="<?= $companies['name'] ?? 'Invalide' ?>">
        <label for="country">Country: </label>
        <input name="country" type="text" value="<?= $companies['country'] ?? 'Invalide' ?>">
        <label for="tva">TVA: </label>
        <input name="tva" type="text" value="<?= $companies['tva'] ?? 'Invalide' ?>">
        <button id='updateSubmit' name="page" value="dashboard-companies" type='submit'>Update</button>
    </form>

    <style>
        .activeds {
            display: none;
        }
    </style>

</body>

</html>