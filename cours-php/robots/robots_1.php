<?php

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
        <?php for($i=1; $i<=20; $i++) : ?>
        <img src="https://robohash.org/<?= $i ?>" alt="">
        <?php endfor ?>                
    </main>
</body>
</html>