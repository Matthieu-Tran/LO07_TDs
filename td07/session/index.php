<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TD04</title>
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
                    <form action="td07_e3_f2_session.php" method="GET">
                        <div class="form-group">
                            <label for="nameOrg">Nom de l'organisation</label>
                            <input type="text" class="form-control" name="nameOrg" value="Université Technologique de Troyes">
                        </div>
                        <div class="form-group">
                            <label for="adressOrg">Adresse de l'organisation</label>
                            <input type="text" class="form-control" name="adressOrg" value="12 rue Marie Curie">
                        </div>
                        <div class="form-group mb-3">
                            <label for="creationDateOrg">Date de création du registre</label>
                            <input type="text" class="form-control" name="creationDateOrg" value="1994">
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