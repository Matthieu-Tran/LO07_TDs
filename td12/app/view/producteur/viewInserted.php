<!-- ----- début viewInserted -->
<?php
require($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentCaveMenu.html';
        include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
        ?>
        <!-- ===================================================== -->
        <?php
        if ($results) {
            echo ("<h3>Le nouveau producteur a été ajouté </h3>");
            echo ("<ul>");
            echo ("<li>Nom = " . $_GET['nom'] . "</li>");
            echo ("<li>Prenom = " . $_GET['prenom'] . "</li>");
            echo ("<li>Region = " . $_GET['region'] . "</li>");
            echo ("</ul>");
        } else {
            echo ("<h3>Problème d'insertion du Producteur</h3>");
            echo ("id = " . $_GET['nom']);
        }

        echo ("</div>");

        include $root . '/app/view/fragment/fragmentCaveFooter.html';
        ?>
        <!-- ----- fin viewInserted -->