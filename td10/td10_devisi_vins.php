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
    <?php
    include 'nav.php';
    ?>
    <p></p>
    <hr>
    <p>
    <p></p>
    <hr>
    <p>
    <p></p>
    <hr>
    <p>
    <p></p>
    <hr>
    <p>
    <div class="container">
        <div class="mt-4 p-5 bg-primary text-white rounded">
            <h1>bddection à ma base sur php my admin</h1>
            <ul>
                <li>dsn = mysql:dbname=vin;host=localhost;charset=utf8</li>
                <li>username = root</li>
                <li>password = *******</li>
            </ul>
            <?php
            // attributs de la classe bddexion paramètres de bddexion à la base
            $hostname = 'localhost';
            $database = 'vin';
            $login = 'root';
            $password = 'root';

            $h = $hostname;
            $d = $database;
            $l = $login;
            $p = $password;
            $t = $tabUTF8;
            try {
                $bdd = new PDO("mysql:host=$h;dbname=$d", $l, $p, $t);
                // Activer le mode d'exception pour PDO
                $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Erreur de bddexion !";
            } ?>
        </div>
        <hr>
        <p>
        <div class="mt-4 p-5 bg-primary text-white rounded">
            <div class="mb-1 p-2 bg-success text-white rounded">
                Insertion d'un tuple : "insert into vin values (3001, 'Champagne de Troyes', 1976, 11.45)"
            </div>
            <?php
            $requete1 = "insert into vin values (3001, 'Champagne de Troyes', 1976, 11.45)";
            $pdo = exec($requete1);
            if ($pdo) {
                echo "Nombre de tuple ajoutées = 1";
            } else {
                echo "Nombre de tuple ajoutées = 0";
            }
            ?>
        </div>
        <hr>
        <p>
        <div class="mt-4 p-5 bg-primary text-white rounded">
            <div class="mb-1 p-2 bg-success text-white rounded">
                Requête SQL : query "select * from vin where annee = 1976"
            </div>
            <?php
            $requete = "SELECT * FROM vin WHERE annee = 1976";
            $statement = $bdd->query($requete);
            // Utilisez la méthode fetch pour récupérer les résultats de la requête
            echo "<ul>";
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                // Manipulez chaque ligne de résultat ici
                printf("<li>vin(%d, %s, %d, %.2f)</li>\n", $row['id'], $row['cru'], $row['annee'], $row['degre']);
            }
            echo "</ul>";
            ?>
        </div>
        <hr>
        <p>
        <div class="mt-4 p-5 bg-primary text-white rounded">
            <div class="mb-1 p-2 bg-success text-white rounded">
                Résultat dans un tableau Bootstrap avec "select * from vin where annee = 1976"
            </div>
            <table class="table table-bordered table-striped table-secondary">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Cru</th>
                        <th>Année</th>
                        <th>Degré</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $requete = "SELECT * FROM vin WHERE annee = 1976";
                    $statement = $bdd->query($requete);
                    // Utilisez la méthode fetch pour récupérer les résultats de la requête
                    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                        // Manipulez chaque ligne de résultat ici
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['cru'] . "</td>";
                        echo "<td>" . $row['annee'] . "</td>";
                        echo "<td>" . $row['degre'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="mt-4 p-5 bg-primary text-white rounded">
            <div class="mb-1 p-2 bg-success text-white rounded">
                Récupération des noms des attributs avec "select id, cru from vin where annee = 1976"
            </div>
            <table class="table table-bordered table-striped table-secondary">
                <thead>
                    <tr>
                        <?php
                        $requete = "SELECT id, cru FROM vin WHERE annee = 1976";
                        $statement = $bdd->query($requete);

                        // Récupérer le nombre de colonnes
                        $columnCount = $statement->columnCount();

                        // Boucle pour afficher les en-têtes des colonnes dynamiquement
                        for ($i = 0; $i < $columnCount; $i++) {
                            $columnMeta = $statement->getColumnMeta($i);
                            $columnName = $columnMeta['name'];
                            echo "<th>$columnName</th>";
                        }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Utilisez la méthode fetch pour récupérer les résultats de la requête
                    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>";
                        // Boucle pour afficher les valeurs des colonnes dynamiquement
                        for ($i = 0; $i < $columnCount; $i++) {
                            $columnMeta = $statement->getColumnMeta($i);
                            $columnName = $columnMeta['name'];
                            echo "<td>" . $row[$columnName] . "</td>";
                        }
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>


        <div class="mt-4 p-5 bg-primary text-white rounded">
            <div class="mb-1 p-2 bg-success text-white rounded">
                Récupération des noms des attributs avec"select cru, annee from vin where annee = ?"
            </div>
            <table class="table table-bordered table-striped table-secondary">
                <thead>
                    <tr>
                        <th>Cru</th>
                        <th>Année</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $requete = "SELECT cru, annee FROM vin WHERE annee = ?";
                    $statement = $bdd->prepare($requete);

                    // Définir la valeur du paramètre
                    $annee = 1980;

                    // Exécuter la requête avec le paramètre
                    $statement->execute([$annee]);

                    // Utiliser la méthode fetch pour récupérer les résultats de la requête
                    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>";
                        echo "<td>" . $row['cru'] . "</td>";
                        echo "<td>" . $row['annee'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>


        <div class="mt-4 p-5 bg-primary text-white rounded">
            <div class="mb-1 p-2 bg-success text-white rounded">
                Paramètres nommés
            </div>
            <table class="table table-bordered table-striped table-secondary">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Cru</th>
                        <th>Année</th>
                        <th>Degré</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $requete = "SELECT * FROM vin WHERE annee = :an AND degre = :dg";
                    $statement = $bdd->prepare($requete);

                    // Définir les valeurs des paramètres nommés
                    $params = [
                        'an' => 1980,
                        'dg' => 10.00
                    ];

                    // Exécuter la requête avec les paramètres nommés
                    $statement->execute($params);

                    // Utiliser la méthode fetch pour récupérer les résultats de la requête
                    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['cru'] . "</td>";
                        echo "<td>" . $row['annee'] . "</td>";
                        echo "<td>" . $row['degre'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="mt-4 p-5 bg-primary text-white rounded">
            <div class="mb-1 p-2 bg-success text-white rounded">
                Gestion des transactions
            </div>
            <?php
            try {
                // Démarrer la transaction
                $bdd->beginTransaction();

                // Requête d'insertion
                $requete = "INSERT INTO vin (id, cru, annee, degre) VALUES (2000, 'Champagne de Troyes', 2019, 11.45)";

                // Exécuter la première insertion
                $bdd->exec($requete);

                // Exécuter la deuxième insertion
                $bdd->exec($requete);

                // Valider la transaction
                $bdd->commit();

                echo "La transaction a été exécutée avec succès.";
            } catch (PDOException $e) {
                // En cas d'erreur, annuler la transaction
                $bdd->rollback();

                echo "Erreur lors de l'exécution de la transaction : " . $e->getMessage();
            }
            ?>
        </div>

        <hr>
        <p>
        <div class="mt-4 p-5 bg-primary text-white rounded">
            <div class="mb-1 p-2 bg-success text-white rounded">
                Supression des instructions nécessaires pour supprimer tous les vins dont l'id est supérieur à 2500
            </div>
            <?php
            $requeteSuppression = "DELETE FROM vin WHERE id > 2500";
            $bdd->exec($requeteSuppression);
            ?>
        </div>


    </div>
    <p></p>
    <hr>
    <p>
        <small>Page de Matthieu Tran rédigée le 16 05 2023</small>
    </p>
    <p></p>
    <hr>
    <p>



    </p>
</body>

</html>