<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
</head>
<body>
<div class="container">
    <h1 class="title">Connexion Admin / Users</h1>
    <form action="/Cogip/index.php?page=login" method="post">
        <div class="field">
            <label class="label" for="email">Email :</label>
            <div class="control">
                <input class="input" type="text" id="email" name="email" required>
            </div>
        </div>

        <div class="field">
            <label class="label" for="password">Mot de passe :</label>
            <div class="control">
                <input class="input" type="password" id="password" name="password" required>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">Se connecter</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>