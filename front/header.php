<header>
    <nav id="home">
        <h2 class="home_title"><?php echo $page ?></h2>
        <hr width="60%">
        <ul>
            <a href="./index.php">
                <div class="nav_link">
                    <p class="acceuil_btn">Accueil </p>
                    <p class="home_arrow">▶</p>
                </div>
            </a>
            <a href="./menus.php">
                <div class="nav_link">
                    <p class="menus_btn">Menus </p>
                    <p class="home_arrow">▶</p>
                </div>
            </a>
            <?php if (isLoggedIn()): ?>
                <a href="logout.php">
                    <div class="nav_link">
                        <p class="connexion_btn">
                            Déconnexion
                        </p>
                        <p class="home_arrow">▶</p>
                    </div>
                </a>
            <?php else: ?>
                <a href="connexion.php">
                    <div class="nav_link">
                        <p class="connexion_btn">
                            Connexion
                        </p>
                        <p class="home_arrow">▶</p>
                    </div>
                </a>
            <?php endif; ?>
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