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
                <a class="navbar-brand" href="#">TRAN Matthieu</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="???">Exercice 1</a></li>

                        <!-- ===== Documentation ===== -->

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Documentation</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Ajouter vos sites personnels de documentation (>3)</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
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
                <h5 class="card-title">Exercice 1 : Formulaire de login et méthode GET</h5>

                <div class='mx-lg-3'>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "GET") {
                        $login = $_GET["login"];
                        $password = $_GET["password"];
                    }
                    ?>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Clé</th>
                                <th scope="col">Valeurs</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>
                                    Login
                                </td>
                                <td>
                                    <?php echo $login ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>
                                    Mot de passe
                                </td>
                                <td>
                                    <?php echo $password ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- ================================================================================================================ -->
        <!-- ===== Exercice 2 ===== -->
        <!-- ================================================================================================================ -->

        <p />
        <hr />
        <a id='exercice2' />
        <div class="card">
            <div class="card-body bg-info">
                <h5 class="card-title">Exercice 2 : Formulaire de login et méthode POST</h6>
                    <div class='mx-lg-3'>

                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $loginPOST = $_POST["login"];
                            $passwordPOST = $_POST["password"];
                        }
                        ?>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Clé</th>
                                    <th scope="col">Valeurs</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>
                                        Login
                                    </td>
                                    <td>
                                        <?php echo $loginPOST ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>
                                        Mot de passe
                                    </td>
                                    <td>
                                        <?php echo $passwordPOST ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
            </div>
        </div>


        <!-- ================================================================================================================ -->
        <!-- ===== Exercice 3 ===== -->
        <!-- ================================================================================================================ -->

        <p />
        <hr />
        <a id='exercice3' />
        <div class="card">
            <div class="card-body bg-info">
                <h5 class="card-title">Exercice 3 : Sondage méthode POST</h6>
                    <div class='mx-lg-3'>
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "GET") {
                            $nom = $_POST["nom"];
                            $prenom = $_POST["prenom"];
                            $genre = $_POST["genre"];
                            $vehicule = $_POST["vehicule"];
                            $UT = $_POST["UT"];
                            $letter = $_POST["letter"];
                            $remboursement = $_POST["remboursement"];
                        }
                        echo implode("; ", $_GET)
                        ?>

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Clé</th>
                                    <th scope="col">Valeurs</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($_POST as $key => $value) {
                                ?>
                                    <tr>
                                        <th scope="row"><?php echo $i++; ?></th>
                                        <td><?php echo $key; ?></td>

                                        <td><?php echo $value ?></td>
                                    </tr>
                                <?php
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