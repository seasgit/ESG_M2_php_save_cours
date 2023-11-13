<?php
    // le fichier courant a besoin de charger un fichier de données
    require "./data/database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <main class="main">
            <p class="time"><?= $time ?></p>
            <div class="date">
                <p class="month"><?= $month ?></p>
                <p class="day"><?= $day ?></p>
            </div>
            <div class="artist">
                <p><?= $artist ?></p>
                <p><?= $artist2 ?></p>
            </div>

            <!-- credit freepik -->
            <div class="freepik">
                <a href="https://fr.freepik.com/psd-gratuit/modele-impression-concert-jazz_17253621.htm#query=concert&position=3&from_view=search&track=sph">
                    <img src="./images/by_freepik.png" alt="">
                </a> 
            </div>
    </main>
</body>
</html>

<!-- 
    Cette page web est statique. 
    Toute modification des données textuelles nécessite de modifier le code html

    On pourrait avoir d'autres artistes pour d'autres dates

 -->