<?php
$formations = json_decode(file_get_contents("http://dev.h2prog.com/API_TEST/formation/" . $_GET['numero']));
// http://localhost/Projet-Api-PHP/API/formations
// http://dev.h2prog.com/API_TEST/formations
// print_r($formations);
ob_start();
?>
<h1>Formation H2Prog :<?= $formation->libelle ?> </h1>
<br>
<br>
<div>
    <?= $formation->description ?>
</div>
<div>
    <?= $formation->categorie ?>
</div>
<img src="<?= $formation->image ?>" width="100px" width="100px" alt="img formation">


<?php
$content = ob_get_clean();
require_once("template.php");
?>


<!-- le foreach est une boucle que nous créons pour amener tte les formations a s 'afficher sur notre page -->
<!-- Nous allons donc récupérer ces objets qui sont dans notre JSON -->
<!-- nous mettons une balise php et nous recup l objet avec notre variable formation ou nous voulons l id ($formation ->id) -->
<!-- le lien vers les formations ne marchent pas car ce n est pas mon adrersse en local que je recupere mais l adresse en ligne du tuto elle n est donc pas presente sur mon serveur -->