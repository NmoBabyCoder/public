<?php
require_once '../back/db_connect.php';
include_once '../back/session.php';
require_once '../back/functions.php';
?>
<html lang="fr">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Connectez vous</title>
</head>

<body>
    <?php
    $page = 'Connexion';
    include 'header.php';
    ?>
    <main class="main_connexion">
        <form class="form_connexion" method="POST">

            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $email = $_POST['email'];
                $password = $_POST['password'];

                $user = getUserByEmail($email);
                if ($user and password_verify($password, $user['password'])) {
                    $_SESSION['id'] = $user['id'];
                    header('Location: acceuil.php');
                } else {
                    $msg = 'Identifiant ou mot de passe incorect';
                }
            }
            ?>
            <p class="error_log_msg"><?php echo ($msg) ?></p>
            <label for="email">email</label>
            <input type="email" name="email" id="email" required>
            <label for="password">mot de passe</label>
            <input type="password" name="password" id="password" required>
            <button type="submit" class="connexion_btn">Valider</button>
            <a href="./inscription.php">Pas de compte ?</a>
        </form>
    </main>
    <?php include_once 'footer.php'; ?>
    <script src="./script.js"></script>
</body>

</html>