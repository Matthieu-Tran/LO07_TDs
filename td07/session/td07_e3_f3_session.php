<?php
session_start();
$nameRespOrg = $_GET['nameRespOrg'];
$nameRespTrait = $_GET['nameRespTrait'];
$nameProtec = $_GET['nameProtec'];
$_SESSION["nameRespOrg"] = $nameRespOrg;
$_SESSION["nameRespTrait"] = $nameRespTrait;
$_SESSION["nameProtec"] = $nameProtec;
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TD07</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap53.min.css" type="text/css" />

</head>

<body>
    <div class="container">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
        <?php
        include '../nav.php';
        ?>
        <p />
        <hr />
        <div class="card mt-5">
            <div class="card-body bg-info">
                <div class='mx-lg-3'>
                    <form action="../lo07_analyse_superglobales2.php" method="GET">
                        <div class="form-group">
                            <label for="nameTraitement">Nom du traitement</label>
                            <input type="text" class="form-control" name="nameTraitement" value="DRH salaire">
                        </div>
                        <div class=" form-group">
                            <label for="finalTraitement">Finalité du traitement</label>
                            <input type="text" class="form-control" name="finalTraitement" value="Calcul de la prime de noël">
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="traitementDCP">
                            <label class="form-check-label" for="traitementDCP">
                                Traitement de données personelles
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="traitementSensibles">
                            <label class="form-check-label" for="traitementSensibles">
                                Traitement de données sensibles
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="traitementUE">
                            <label class="form-check-label" for="traitementUE">
                                Traitement avec transfert de données hors UE
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                        <button type="reset" class="btn btn-warning">Effacer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    </div>
</body>

</html>