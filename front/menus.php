<?php
include_once '../back/session.php';
require_once '../back/functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Menus</title>
</head>

<body>
    <?php
    $page = 'Nos Menus';
    include_once 'header.php';
    ?>

    <main class="main_menu">
        <?php
        $menus = getAllMenus();
        foreach ($menus as $data): ?>
            <div class="menu_card">
                <h3><?php showMenuInfo($data, 'title') ?></h3>
                <p><?php showMenuInfo($data, 'description') ?></p>
                <div class="menu_card_img" style="background-image: url(<?php showMenuInfo($data, 'image') ?>);"></div>
                <div class="buy_menu">
                    <p><?php showMenuInfo($data, 'price') ?> €</p>
                    <button>Commander</button>
                </div>
            </div>
        <?php endforeach; ?>
    </main>



    <?php include_once 'footer.php'; ?>
    <script src="./script.js"></script>
</body>

</html>