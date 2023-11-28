<?php
    require "./data/database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bucket list</title>
    <link rel="stylesheet" href="./bucket.css">
</head>
<body>
    <main class="main">
        <header class="top">
            <h1>My Bucket <span>List</span></h1>
        </header>
        <section class="grid">
        <!-- on répète 10 fois la construction du bloc de classe .cell -->
        <?php for($i=0;$i<count($tabList); $i++) : ?>
            <div class="cell">
                <p class="pcheck"><span>&#10003;</span></p>
                <p class="item"><?= $tabList[$i] ?></p>
            </div> 
        <?php endfor ?>

        </section>
        <footer class="bottom"></footer>
    </main>
</body>
</html>