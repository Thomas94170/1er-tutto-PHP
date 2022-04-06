<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="formations.php">Formations</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Catégories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="formationsCategorie.php?categorie=PHP">PHP</a></li>
                            <li><a class="dropdown-item" href="formationsCategorie.php?categorie=Javascript">Javascript</a></li>
                            <li><a class="dropdown-item" href="formationsCategorie.php?categorie=HTML/CSS">HTML/CSS</a></li>
                            <li><a class="dropdown-item" href="formationsCategorie.php?categorie=SQL">SQL</a></li>
                            <li><a class="dropdown-item" href="formationsCategorie.php?categorie=Wordpress">Wordpress</a></li>
                            <li><a class="dropdown-item" href="formationsCategorie.php?categorie=Bureautique">Bureautique</a></li>
                            <li><a class="dropdown-item" href="formationsCategorie.php?categorie=Algorithmique">Algorithmique</a></li>
                            <li><a class="dropdown-item" href="formationsCategorie.php?categorie=Analyse-Conception">Analyse-Conception</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php echo $content ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>

<!-- les liens de ma nav bar par categorie ne fonctionnent pas car ce n est pas mon localhost que j ai renseigné mais l adresse en ligne du tutto -->