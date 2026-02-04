<?php
?>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Connectez vous</title>
</head>

<body>
    <header>

        <nav id="home">
            <h2 class="home_title">Connexion</h2>
            <hr width="60%">
            <ul>
                <a href="./acceuil.php">
                    <div class="nav_link">
                        <p class="acceuil_btn">Acceuil</p>
                        <p class="home_arrow">▶</p>
                    </div>
                </a>
                <a href="./menus.php">
                    <div class="nav_link">
                        <p class="menus_btn">Menus </p>
                        <p class="home_arrow">▶</p>
                    </div>
                </a>
                <a href="./connexion.php">
                    <div class="nav_link">
                        <p>Connexion </p>
                        <p class="home_arrow">▶</p>
                    </div>
                </a>
                <a href="./contact.php">
                    <div class="nav_link">
                        <p class="contact_btn">Contact </p>
                        <p class="home_arrow">▶</p>
                    </div>
                </a>
            </ul>
        </nav>

        <div id="title">
            <h1 class="title">Connectez vous</h1>
        </div>
    </header>
    <main class="main_connexion">
        <form class="form_connexion">
            <label for="email">email</label>
            <input type="email" name="email" id="email" required>
            <label for="password">mot de passe</label>
            <input type="password" name="password" id="password" required>
            <button class="connexion_btn">Valider</button>
            <a href="./inscription.php">Pas de compte ?</a>
        </form>
    </main>
    <footer></footer>
    <script src="./script.js"></script>
</body>

</html>