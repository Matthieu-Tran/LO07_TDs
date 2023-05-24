<!-- ----- début viewAll -->
<?php

require($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentCaveMenu.html';
        include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
        ?>

        <table class="table table-striped table-bordered">

            <thead>
                <tr>
                    <?php
                    $attributes = $results['attributes'];
                    $tuples = $results['tuples'];
                    foreach ($attributes as $attribute) {
                        echo "<th scope='col'>" . $attribute . "</th>";
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                // La liste des vins est dans une variable $results  
                foreach ($tuples as $tuple) {
                    echo "<tr>";
                    foreach ($tuple as $value) {
                        echo "<td>" . $value . "</td>";
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

    <!-- ----- fin viewAll -->