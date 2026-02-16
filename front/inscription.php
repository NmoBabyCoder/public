<?php
require_once '../back/db_connect.php';
require_once '../back/functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['newa_email'];
    $password = $_POST['newa_password'];
    $password_check = $_POST['newa_password_check'];

    if ($password === $password_check) {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        try {
            createUser($email, $password_hash);
        } catch (PDOException $e) {
            echo 'Un compte existe déjà sur cette adresse mail';
        }
    } else {
        echo 'Le mot de passe doit correspondre';
    }
}
?>


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
        <form method="POST" id="form_newa">
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