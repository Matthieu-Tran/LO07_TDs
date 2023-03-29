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
        <h1 class="mb-2">TD4</h1>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>

        <!-- ================================================================================================================ -->
        <!-- ===== Exercice 1 : Squelette de la page avec modification du navbar -->
        <!-- ================================================================================================================ -->

        <nav class="navbar navbar-expand-lg bg-primary fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="./td05_tournoi_form1.php">TRAN Matthieu</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <p />
        <hr />
        <a id='exercice1' />
        <div class="card">
            <div class="card-body bg-info">
                <h5 class="card-title">Exercice 3 : Formulaire de sondage et méthode POST</h6>
                    <div class='mx-lg-3'>
                        <form action="td05_tournoi_action.php" method="GET">
                            <?php
                            $nbJoueur = $_GET['nbPlayers'];
                            for ($i = 1; $i <= $nbJoueur; $i++) {
                            ?>
                                <div class="form-group mb-3 col-4">
                                    <label for="Nom">Nom joueur <?php echo $i ?></label>
                                    <input type="text" class="form-control" name="nom_<?php echo $i ?>" required>
                                </div>
                                <div class="form-group mb-3 col-4">
                                    <label for="Prénom">Prénom joueur <?php echo $i ?></label>
                                    <input type="text" class="form-control" name="prénom_<?php echo $i ?>" required>
                                </div>
                                <div class="form-group mb-3 col-4">
                                    <label for="email">Email joueur <?php echo $i ?></label>
                                    <input type="email" class="form-control" name="email_<?php echo $i ?>" required>
                                </div>
                            <?php
                            }
                            ?>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                        </form>



                    </div>
            </div>
        </div>



        <!-- ================================================================================================================ -->
        <p />
        <hr />
        <p />
        <small>Page de Matthieu Tran rédigée le 21/03/2023</small>
        <p />
        <hr />
        <p />
</body>

</html>