
<?php 
echo "<section id='accueil'>";
echo "<div id='test'><img src='../assets/pics/avatar.png'>";
foreach($data["presentation"] AS $pres){
	echo "<p id='nom'>".ucfirst($pres["nom"])." ".ucfirst($pres["prenom"])."</p>\n";
	echo "<p id='accroche'>".$pres["accroche"]."</p></div>";
}
echo "</section>";
?>
