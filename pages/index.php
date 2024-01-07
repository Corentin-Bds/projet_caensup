<?php 
    require_once("../yaml/yaml.php");

    $data=yaml_parse_file('../data/data.yaml');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Projet caensup</title>
</head>
<body>
    <header>
        <div id="content">
            <ul>
                <li><a href="#accueil">Accueil</a></li>
                <li><a href="#propos">A propos</a></li>
                <li><a href="#competences">Compétences</a></li>
                <li><a href="#experiences">Expériences</a></li>
                <li><a href="#formations">Formations</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </header>
    <?php 
    include "accueil.php";
    include "propos.php";
    include "competences.php";
    include "experiences.php";
    include "formations.php";
    include "contact.php";
    ?>

</body>
</html>