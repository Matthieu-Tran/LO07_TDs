<?php
if (isset($_GET['nameOrg']) && isset($_GET['adressOrg']) && isset($_GET['creationDateOrg'])) {
    $nameOrg = $_GET['nameOrg'];
    $adressOrg = $_GET['adressOrg'];
    $creationDateOrg = $_GET['creationDateOrg'];
    setcookie("nameOrg", $nameOrg, time() + 60, '/');
    setcookie("adressOrg", $adressOrg, time() + 60, '/');
    setcookie("creationDateOrg", $creationDateOrg, time() + 60, '/');
}
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
                    <form action="td07_e3_f3_cookies.php" method="GET">
                        <div class="form-group">
                            <label for="nameRespOrg">Nom et prénom du responsable de l'organisation</label>
                            <input type="text" class="form-control" name="nameRespOrg" value="COLLET Christophe">
                        </div>
                        <div class=" form-group">
                            <label for="nameRespTrait">Nom et prénom du responsable du traitement</label>
                            <input type="text" class="form-control" name="nameRespTrait" value="LEMERCIER Marc">
                        </div>
                        <div class="form-group mb-3">
                            <label for="nameProtec">Nom et prénom du délégué à la protection des données</label>
                            <input type="text" class="form-control" name="nameProtec" value="NIGRO Jean-Marc">
                        </div>
                        <input type="hidden" name="nameOrg" value="<?php echo $nameOrg; ?>">
                        <input type="hidden" name="adressOrg" value="<?php echo $adressOrg; ?>">
                        <input type="hidden" name="creationDateOrg" value="<?php echo $creationDateOrg; ?>">
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