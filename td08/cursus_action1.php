<?php
session_start();
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TD08</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap53.min.css" type="text/css" />

</head>

<body>
    <div class="container">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
        <?php
        include './nav.php';
        ?>
        <p />
        <hr />
        <div class="card mt-5">
            <div class="card-body bg-info">
                <div class='mx-lg-3'>
                    <?php
                    require_once './Module.php';
                    require_once './Cursus.class.php';
                    session_start();
                    $Module = new Module($_GET["sigle"], $_GET["label"], $_GET["categorie"], $_GET["effectif"]);
                    if ($Module->valide()) {
                        $Module->pageOK();
                        $cursus = new Cursus();
                        $cursus->addModules($Module);
                        echo "<h1> Définition des modules </h1>";
                        echo $cursus;
                        echo "<h1> Définition d'un cursus </h1>";
                        $cursus->affiche();
                        echo "<h1> Affichage d'un cursus </h1>";
                        echo "<pre>";
                        print_r($cursus);
                        echo "</pre>";
                        $Module->pageFoot();
                    } else {
                        $Module->pageKO();
                    }

                    ?>
                </div>
            </div>
        </div>

    </div>
</body>

</html>