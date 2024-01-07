<section id="formations">
    <div class="container">
            <?php foreach ($data["formations"] as $forma) {
                echo "<div><h3>" . $forma['nom'] . "</h3>"; 
                echo "<p><span>Entreprise </span>:". $forma['etablissement']. "</p>";
                echo "<p><span>Date début </span>:".$forma['dated']."</p>";
                echo "<p><span>Date de fin </span>:".$forma['datef']."</p>";
                echo "<p><span>Lieu </span>:".$forma['lieu']."</p>";
                echo "<p><span>Tâches </span>:".$forma['contenu']."</p></div>";
            }
            ?>
    </div>
</section>