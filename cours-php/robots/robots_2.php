<?php
    require "./data/database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>robots</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <main class="main">
        <?php for($i=1; $i<=12; $i++) : ?>
            <figure>
                <img src="https://robohash.org/<?= $i ?>" alt="">
                <p><?= $tabNames[$i-1] ?></p>
            </figure>
        <?php endfor ?>                
    </main>
</body>
</html>