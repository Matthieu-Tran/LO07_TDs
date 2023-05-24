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
            echo ("<h3>Le producteur a été supprimé </h3>");
        } else {
            echo ("<h3>Il y a eu un problème de supression d'un producteur.</h3>");
        }

        echo ("</div>");

        include $root . '/app/view/fragment/fragmentCaveFooter.html';
        ?>
        <!-- ----- fin viewInserted -->