<?php

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <title>PHP exo 8</title>
</head>

<body>
    <header class="container-fluid">
        <div class="row">
            <img class="imgLogo col-3" src="./public/assets/img/PHP-logo.png" alt="Logo PHP">
            <h1 class="col-7">Exercice 8</h1>
            <p>Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédent, vérifier
                que le fichier transmis est bien un fichier pdf.</p>
        </div>
    </header>
    <main class="container-fluid">
        <div class="row">
            <div class="results position-absolute top-50 start-50 translate-middle ">
            <?php
            if (isset($_POST['civility']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_FILES['case'])){
                $infosfichier = pathinfo($_FILES['case']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('pdf'); 
            
                if (in_array($extension_upload, $extensions_autorisees)){
                echo strtoupper ('Civilite : ' .$_POST['civility'].'<br> Nom : '. $_POST['firstname']. '<br> Prenom : '. $_POST['lastname']. '<br> nom du fichier : '. $_FILES['case']['name']. '<br>'. $_FILES['case']['type']);
                } else {
                    echo 'Met un fichier valide avec une extension .pdf';
            } 
        }
            else { ?>
                <form class="row justify-content-center" method="post" action="index.php" enctype="multipart/form-data">
                    <div class="col-6">
                        <div class="row">
                            <label class="col-12" for="civilité">Civilité</label>
                            <select class="col-6 form-control" name="civility">
                                <option disabled selected>Entrez un genre !</option>
                                <option value="Mr">Mr</option>
                                <option value="Mme">Mme</option>
                            </select>
                            <label class="col-12" for="nom">Nom</label>
                            <input class="firstnameEl col-6 form-control" type="text" name="firstname">
                            <label class="col-12" for="prénom">Prénom</label>
                            <input class="lastnameEl col-6 form-control" type="text" name="lastname">
                            <label class="col-12" for="Envoie de fichier">Envoie de fichier</label>
                            <input class="col-6 form-control" type="file" name="case">
                            <input class="col-6 w-100 my-2" type="submit" value="Envoie">
                        </div>
                    </div>
                </form>
            <?php
            } ?>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>