<section id="propos">
    <div>
    <img src="../assets/pics/illustration.png" alt="Photo d'illustration développeur">
    <?php 
        foreach($data["propos"] AS $props){
            echo "<p id='accroche'>".ucfirst($props["accroche"])."</p>\n";
            echo "<p id=>".$props["presentation"]."</p></div>";
        }
    ?>
</section>