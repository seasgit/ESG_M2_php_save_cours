<?php
    require "./data/database.php";

    if ($percent >= 40) {
        $msg = "BUY NOW !";
    }else{
        $msg = "Let's go !";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunday super sale</title>
    <link rel="stylesheet" href="./stylefonts.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <main class="main">
        <div class="promo">
            <p class="number"><?= $percent ?></p>
            <p class="peroff">
                <span>%</span>
                <span>off</span>
            </p>
        </div>

        <!-- mix entre du html et du php -->
        <?php if($percent >= 40 ): ?>
            <p class="texte anim"><?= $msg ?></p>
        <?php else: ?>
            <p class="texte"><?= $msg ?></p>
        <?php endif ?>

            <!-- credit freepik -->
            <a class="freepik" href="https://fr.freepik.com/psd-gratuit/banniere-offre-super-vente-du-dimanche-rendu-3d-du-modele-texte-modifiable_33005023.htm#page=2&query=promo&position=39&from_view=search&track=sph">
                Image de xvector sur freepik
            </a>

            
    </main>
    
</body>
</html>