<?php
ob_start();
?>
<h1>Bienvenue sur un site listant les formations H2Prog</h1>
<?php
$content = ob_get_clean();
require_once("template.php");
?>