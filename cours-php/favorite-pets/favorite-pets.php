<?php
    require "./data/database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>favorite pets</title>
    <link rel="stylesheet" href="style.css" >
</head>
<body>
    <main class="main">
        <section class="grid">
            <div class="cell">
            <?php for($i=0; $i < $notation['dog']['note']; $i++) : ?>
                <img src="./images/<?= $notation['dog']['footprint'] ?>" alt="">
            <?php endfor ?>
            </div>
            <div class="cell">
                <?php for($i=1; $i <= $notation['cat']['note'];$i++): ?>
                    <img src="./images/<?= $notation['cat']['footprint'] ?>" alt="">
                <?php endfor ?>
            </div>
            <div class="cell">
                <?php for($i=1; $i <= $notation['fish']['note'];$i++): ?>
                    <img src="./images/<?= $notation['fish']['footprint'] ?>" alt="">
                <?php endfor ?>
            </div>
            <div class="cell">
                <?php for($i=1; $i <= $notation['rabbit']['note'];$i++): ?>
                    <img src="./images/<?= $notation['rabbit']['footprint'] ?>" alt="">
                <?php endfor ?>
            </div>
            <div class="cell">
                <?php for($i=1; $i <= $notation['bird']['note'];$i++): ?>
                    <img src="./images/<?= $notation['bird']['footprint'] ?>" alt="">
                <?php endfor ?>
            </div>
        </section>

            <!-- credit freepik -->
            <a class="freepik" href="https://fr.freepik.com/vecteurs-libre/compter-nombre-animaux-favoris_4543672.htm#page=5&query=counting%20animals&position=22&from_view=search&track=ais&uuid=881e1f13-6e74-4426-9ea9-84289c3bc8dd">
                Image de brgfx sur freepik
            </a>

    </main>
</body>
</html>