<section id="competences">
    <div class="name">
        <h2>Compétences</h2>
        <?php foreach ($data["programmation"] as $prog) {
            echo '<span>' . $prog["nom"] . '</span>'; 
            echo "<p>". $prog['niveau']. "% </p>";
            }
        ?>
    </div>
</section>