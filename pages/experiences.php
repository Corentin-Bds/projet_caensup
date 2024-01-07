<section id="experiences">
    <div class="container">
        <?php foreach ($data["experiences"] as $expe) {
            echo "<div><h3>" . $expe['poste'] . "</h3>"; 
            echo "<p><span>Entreprise </span>:". $expe['entreprise']. "</p>";
            echo "<p><span>Date début </span>:".$expe['dated']."</p>";
            echo "<p><span>Date de fin </span>:".$expe['datef']."</p>";
            echo "<p><span>Lieu </span>:".$expe['lieu']."</p>";
            echo "<p><span>Tâches </span>:".$expe['tache']."</p></div>";
        }
        ?>
    </div>
</section>