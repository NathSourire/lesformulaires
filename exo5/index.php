<?php
$name = 'Nathalie';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <title>PHP exo 5</title>
</head>

<body>
    <header class="container-fluid">
        <div class="row">
            <img class="imgLogo col-3" src="./public/assets/img/PHP-logo.png" alt="Logo PHP">
            <h1 class="col-7">Exercice 5</h1>
            <p>Créer un formulaire sur la page index.php avec :
                Une liste déroulante pour la civilité (Mr ou Mme)
                Un champ texte pour le nom
                Un champ texte pour le prénom
                Ce formulaire doit rediriger vers la page index.php.
                Vous avez le choix de la méthode.</p>
        </div>
    </header>
    <main class="container-fluid">
        <div class="results">
            <form class="row justify-content-center" method="post" action="index.php">
                <div class="col-6">
                    <div class="row">
                        <label class="col-12" for="civilité">Civilité</label>
                        <select class="col-6 form-control" name="civility">
                            <option disabled selected>Entrez un genre !</option>
                            <option value="Mr">Mr</option>
                            <option value="Mme">Mme</option>
                        </select>
                        <label class="col-12" for="nom">Nom</label>
                        <input class="col-6 form-control" type="text" name="firstname">
                        <label class="col-12" for="prénom">Prénom</label>
                        <input class="col-6 form-control" type="text" name="lastname">
                        <input class="col-6 w-100 my-2" type="submit" value="Envoie">
                    </div>
                </div>
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>