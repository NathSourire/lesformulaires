<?php
$error_lastname = '';
$error_firstname = '';
if (isset($_GET['lastname'])) {
    if (!empty($_GET['lastname'])) {
        $lastname = filter_input(INPUT_GET, 'lastname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    } else {
        $error_lastname = 'Pas de nom renseigné';
    }
} else {
    $error_lastname = 'Pas de nom';
}
if (isset($_GET['firstname'])) {
    if (!empty($_GET['firstname'])) {
        $firstname = filter_input(INPUT_GET, 'firstname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    } else {
        $error_firstname = 'Pas de prénom renseigné';
    }
} else {
    $error_firstname = 'Pas de prénom';
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <title>PHP exo 3</title>
</head>

<body>
    <header class="container-fluid">
        <div class="row">
            <img class="imgLogo col-3" src="./public/assets/img/PHP-logo.png" alt="Logo PHP">
            <h1 class="col-7">Exercice 3</h1>
            <p>Avec le formulaire de l'exercice 1, afficher dans la page user.php les données du formulaire transmis.
            </p>
        </div>
    </header>
    <main class="container-fluid">
        <div class="row">
            <div class="results position-absolute top-50 start-50 translate-middle ">
                <p>
                    <?= ($error_lastname) ? $error_lastname : '' ?>

                    <?= ($error_firstname) ? $error_firstname : '' ?>
                    <?= $error_firstname || $error_lastname ? '' : 'Bonjour,' . $lastname . ' ' . $firstname ?>
                </p>
                </form>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>