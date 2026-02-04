<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Connexion</title>
</head>

<body id="inscription">
    <main class="main_inscription">

        <h2>Créez votre compte</h2>
        <form action="" id="form_newa">
            <br>
            <label for="newa_email">Entrez votre adresse email</label>
            <input type="email" name="newa_email" id="newa_email" required>
            <br>
            <label for="newa_password">Entrez un mot de passe:</label>
            <input type="password" name="newa_password" id="newa_password" required>
            <br>
            <label for="newa_password_check">Confirmez votre mot de passe:</label>
            <input type="password" name="newa_password_check" id="newa_password_check" required>
            <br>
            <button class="register_btn">Enregistrer</button>
            <a href="./connexion.php" class="back_btn">annuler</a>
        </form>
    </main>


    <script src="./script.js"></script>
</body>

</html>