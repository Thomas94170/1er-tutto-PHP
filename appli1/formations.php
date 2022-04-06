<?php
$formations = json_decode(file_get_contents("http://dev.h2prog.com/API_TEST/formations"));
// http://localhost/Projet-Api-PHP/API/formations
// http://dev.h2prog.com/API_TEST/formations
// print_r($formations);
ob_start();
?>
<h1>Bienvenue sur un site listant les formations H2Prog</h1>
<br>
<br>
<table class="table">
    <tr>
        <td>Id</td>
        <td>Nom</td>
        <td>Description</td>
        <td>Image</td>
        <td>Catégorie</td>
    </tr>
    <?php foreach ($formations as $formation) : ?>
        <tr>
            <td><?= $formation->id ?></td>
            <td><a href="formation.php?numero=<?= $formation->id ?>"><?= $formation->libelle ?></a></td>
            <td><?= $formation->description ?></td>
            <td><img src="<?= $formation->image ?>" width="100px" width="100px" alt="img formation"></td>
            <td><a href="formationsCategorie.php?categorie=<?= $formation->categorie ?>"><?= $formation->categorie ?></a></td>
        </tr>
    <?php endforeach; ?>

</table>



<?php
$content = ob_get_clean();
require_once("template.php");
?>


<!-- le foreach est une boucle que nous créons pour amener tte les formations a s 'afficher sur notre page -->
<!-- Nous allons donc récupérer ces objets qui sont dans notre JSON -->
<!-- nous mettons une balise php et nous recup l objet avec notre variable formation ou nous voulons l id ($formation ->id) -->
<!-- le lien vers les formations ne marchent pas car ce n est pas mon adrersse en local que je recupere mais l adresse en ligne du tuto elle n est donc pas presente sur mon serveur -->