<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TODO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap53.min.css" type="text/css" />

</head>

<body>
    <div class="container">
        <h1>TD</h1>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>

        <!-- ================================================================================================================ -->
        <!-- ===== Exercice 1 : Squelette de la page avec modification du navbar -->
        <!-- ================================================================================================================ -->

        <nav class="navbar navbar-expand-lg bg-primary fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Matthieu Tran</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <!-- ================================================================================================================ -->
        <!-- ===== Les jumbotrons de BT3 n'existe plus et sont remplacés par de simple div ===== -->

        <div class="mt-4 p-5 bg-primary text-white rounded">
            <h1>Exercice 3 : Constitution d`équipes de joueurs pour le tournoi LO07</h1>
        </div>

        <p />
        <hr />
        <a id='exercice1' />
        <div class="card">
            <div class="card-body bg-info">
                <h5 class="card-title">Exercice 1 : réparation et validation</h5>

                <div class='mx-lg-3'>

                    <form action="td05_tournoi_form2.php" method="GET">
                        <div class="form-group mb-3 col-4">
                            <label for="login">Combien de joueurs (Entre 2 et 5)</label>
                            <input type="number" class="form-control" name="nbPlayers" min="2" max="5" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                    </form>

                </div>
            </div>
        </div>



    </div>


    <!-- ================================================================================================================ -->
    <p />
    <hr />
    <p />
    <small>Page de ??? rédigée le ???</small>
    <p />
    <hr />
    <p />
</body>

</html>