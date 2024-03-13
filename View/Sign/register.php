<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
</head>
<body>
<div class="container">
    <h1 class="title">Register You</h1>
    <form action="/Cogip/index.php?page=register" method="POST">
        <div class="field">
            <label class="label" for="firstname">First Name :</label>
            <div class="control">
                <input class="input" type="text" id="firstname" name="firstname" required>
            </div>
        </div>

        <div class="field">
            <label class="label" for="lastname">Name :</label>
            <div class="control">
                <input class="input" type="text" id="lastname" name="lastname" required>
            </div>
        </div>
        <div class="field">
            <label class="label" for="email">Email :</label>
            <div class="control">
                <input class="input" type="text" id="email" name="email" required>
            </div>
        </div>
        <div class="field">
            <label class="label" for="password">Password :</label>
            <div class="control">
                <input class="input" type="password" id="password" name="password" required>
            </div>
        </div>
      
        <div class="field">
            <div class="control">
                <button type="submit">Register</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>