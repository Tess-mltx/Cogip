<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoices</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <form action="Cogip/index.php?page=dashboard-companies" method="GET" class="search-section">
        <label for="searchInput">Recherche par ID ou par Nom :</label>
        <input type="text" id="searchInput" name="searchInput">
        <button type='submit'><i class="fas fa-search"></i> Rechercher</button>
    </form>

    <div class="border border-gray-200 bg-gray-200" id="searchResult">
        <!-- Les données seront affichées ici -->
        <p>Numéro de Facture :</p>
        <p>Nom du Client :</p>
        <p>Montant :</p>
        <p>Date d'Échéance :</p>

        <div class="action-icons">
            <button><i class='bx bx-edit-alt'></i></button>
            <button><i class='bx bx-trash'></i></button>
        </div>

    </div>

</body>

</html>