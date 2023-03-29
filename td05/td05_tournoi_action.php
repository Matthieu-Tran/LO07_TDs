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

        <!-- ================================================================================================================ -->
        <!-- ===== Les jumbotrons de BT3 n'existe plus et sont remplacés par de simple div ===== -->

        <div class="mt-4 p-5 bg-primary text-white rounded">
            <h1>Formulaire 1 avec Bootstrap 5</h1>
        </div>

        <!-- ================================================================================================================ -->
        <!-- ===== Exercice 1 ===== -->
        <!-- ================================================================================================================ -->

        <p />
        <hr />
        <a id='exercice1' />
        <div class="card">
            <div class="card-body bg-info">
                <h5 class="card-title">Exercice 3 : Constitution d'équipes de joueurs pour le tournoi LO07</h5>
                <div class='mx-lg-3'>
                    <h3>SuperGlobale GET</h3>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">name</th>
                                <th scope="col">valeur(s)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($_GET as $key => $value) {
                                echo ("<tr><th scope='row'>$key</th>");
                                if (is_array($value)) {
                                    echo ("<td>" . implode(', ', $value) . "</td></tr>");
                                } else {
                                    echo ("<td>$value</td></tr>");
                                }
                            }
                            ?>
                        </tbody>
                    </table>
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