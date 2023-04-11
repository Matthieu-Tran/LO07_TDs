<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>lo07_analyse_formulaire version 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="my_css.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container">
        <h1>xxx</h1>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
        <?php
        include 'nav.php';
        ?>

        <p />
        <div id='exercice1' class="card ">
            <div class="card-body bg-info rounded m-3">
                <h5 class="card-title ">Premier lien:</h5>
                <a href="./lo07_analyse_superglobales2.php?ville=troyes&effectif=3000">./lo07_analyse_superglobales2.php?ville=troyes&effectif=3000</a>
            </div>
            <div class="card-body bg-info rounded m-3">
                <h5 class="card-title ">Deuxieme lien:</h5>
                <a href="./lo07_analyse_superglobales2.php?ville=Paris&effectif=50">./lo07_analyse_superglobales2.php?ville=Paris&effectif=50</a>
            </div>
            <div class="card-body bg-info rounded m-3">
                <h5 class="card-title ">Troisième lien:</h5>
                <a href="./lo07_analyse_superglobales2.php?ville=Tokyo&effectif=6000">./lo07_analyse_superglobales2.php?ville=Tokyo&effectif=6000</a>
            </div>
        </div>


    </div>

</body>

</html>