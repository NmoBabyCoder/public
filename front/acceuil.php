<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Bienvenue sur le site</title>
</head>

<body>
    <header>

        <nav id="home">
            <h2 class="home_title">Acceuil</h2>
            <hr width="60%">
            <ul>
                <a href="./acceuil.php">
                    <div class="nav_link">
                        <p class="acceuil_btn">Acceuil </p>
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
                        <p class="connexion_btn">Connexion </p>
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
            <h1 class="title">Vite & Gourmand</h1>
        </div>
    </header>
    <main class="main_acceuil">

        <div id="presentation" class="text_home_page">
            <article>
                <h2>Qui sommes-nous ?</h2>
                <hr>
                <p>Nous sommes traiteur depuis 25 ans dans la ville de Bordeaux. Nos plâts conviennent à tous types d'événements (simple, pâque, noël...).</p>
            </article>
        </div>
        <div class="image_container">
            <img class="main_img" src="../img/plat_page acceuil_cut.jpg" alt="image d'un plat de beauf avec du riz et des oignons">
        </div>
    </main>
    <footer></footer>
    <script src="./script.js"></script>
</body>

</html>