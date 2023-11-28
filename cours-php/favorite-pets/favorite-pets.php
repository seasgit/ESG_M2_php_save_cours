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
                <img src="./images/cat-footprint.png" alt="">
                <img src="./images/cat-footprint.png" alt="">
                <img src="./images/cat-footprint.png" alt="">
                <img src="./images/cat-footprint.png" alt="">
            </div>
            <div class="cell">
                <img src="./images/bubble.png" alt="">
                <img src="./images/bubble.png" alt="">
            </div>
            <div class="cell">
                <img src="./images/rabbit-footprint.png" alt="">
                <img src="./images/rabbit-footprint.png" alt="">
                <img src="./images/rabbit-footprint.png" alt="">
            </div>
            <div class="cell">
                <img src="./images/bird-footprint.png" alt="">
                <img src="./images/bird-footprint.png" alt="">
                <img src="./images/bird-footprint.png" alt="">
            </div>
        </section>

            <!-- credit freepik -->
            <a class="freepik" href="https://fr.freepik.com/vecteurs-libre/compter-nombre-animaux-favoris_4543672.htm#page=5&query=counting%20animals&position=22&from_view=search&track=ais&uuid=881e1f13-6e74-4426-9ea9-84289c3bc8dd">
                Image de brgfx sur freepik
            </a>

    </main>
</body>
</html>