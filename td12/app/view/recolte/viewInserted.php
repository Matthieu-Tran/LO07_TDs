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
        $stringVin = $_GET['vin_id'];
        $stringProd = $_GET['producteur_id'];
        // Séparer la chaîne en utilisant le caractère de séparation "+"
        $partsVin = explode(" ", $stringVin);
        $partsProd = explode(" ", $stringProd);
        // Assigner les parties séparées aux variables correspondantes
        $vin_id = $partsVin[0];
        $prod_id = $partsProd[0];

        if ($results) {
            echo ("<h3>La récolte a été mise à jour </h3>");
            echo ("<ul>");
            echo ("<li>vin_id = " . $vin_id . "</li>");
            echo ("<li>prod_id = " . $prod_id . "</li>");
            echo ("<li>quantite = " . $_GET['quantite'] . "</li>");
            echo ("</ul>");
        } else {
            echo ("<h3>La nouvelle récolte a été ajouté </h3>");
            echo ("<ul>");
            echo ("<li>vin_id = " . $vin_id . "</li>");
            echo ("<li>prod_id = " . $prod_id . "</li>");
            echo ("<li>quantite = " . $_GET['quantite'] . "</li>");
            echo ("</ul>");
        }

        echo ("</div>");

        include $root . '/app/view/fragment/fragmentCaveFooter.html';
        ?>
        <!-- ----- fin viewInserted -->