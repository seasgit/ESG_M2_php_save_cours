<?php
# Etape 1 Connexion
require "database/auth.php";

# Tentativ de connexion avec PDO
try{
    $dbh = new PDO(DSN, USER, PWD);
}catch(PDOException $e){
    exit("<h1>Erreur connexion serveur</h1>");
}
# Etape 2 requête brute dansla table musiciens
$query =  $dbh->query("SELECT * FROM musiciens");

// Etape 3 transformer la requete en Type de donnée exploitable pour l'affichage
$tab =  $query->fetchAll(PDO::FETCH_ASSOC);

// test
//echo "<pre>" ;
//var_dump($tab);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page des musiciens</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <h1>Artistes guitaristes</h1>
    <main class="main-section">
        <nav class="menu">
            <?php for($i=0;$i< count($tab);$i++): ?>
                <p><?= $tab[$i]['nom'] ?></p>
            <?php endfor ?>
        </nav>
        <section class="detail">

        </section>
    </main>
</body>
</html>

<!-- 
    Objectif
    1. placer dans le menu les noms des artistes
    2. dans la section detail , toutes les données relatives à la sélection faite dans le menu

 -->