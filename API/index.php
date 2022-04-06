<?php
require_once("./api.php");

try {
    if (!empty($_GET['demande'])) {
        $url = explode("/", filter_var($_GET['demande'], FILTER_SANITIZE_URL));
        switch ($url[0]) {
            case "formations":
                if (empty($url[1])) {
                    getFormations();
                } else {
                    getFormationsByCategorie($url[1]);
                }
                break;
            case "formation":
                if (empty($url[1])) {
                    getFormationById($url[1]);
                } else {
                    throw new Exception("Numéro de formation manquant!");
                }
                break;
            default:
                throw new Exception("Demande non validée! Vérifiez l'URL");
        }
    } else {
        throw new Exception("Problème de récupération de données.");
    }
} catch (Exception $e) {
    $erreur = [
        "messsage" => $e->getMessage(),
        "code" => $e->getCode()
    ];
    print_r($erreur);
}
