<!-- ----- début viewInsert -->

<?php
require($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentCaveMenu.html';
        include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
        ?>

        <form role="form" method='get' action='router2.php'>
            <div class="form-group">
                <input type="hidden" name='action' value='recolteInserted'>
                <label for="vin_id">Sélectionnez un vin: </label>
                <select class="form-control" id='vin_id' name='vin_id' style="width: 200px">
                    <?php
                    foreach ($resultsVin as $element) {
                        echo "<option>" . $element->getId() . " " . $element->getCru() . " " . $element->getAnnee() . " " . $element->getDegre() . "</option>";
                    }
                    ?>
                </select>
                <label for="producteur_id">Sélectionnez un producteur: </label>
                <select class="form-control" id='producteur_id' name='producteur_id' style="width: 200px">
                    <?php
                    foreach ($resultsProd as $element) {
                        echo "<option>" . $element->getId() . " " . $element->getNom() . " " . $element->getPrenom() . " " . $element->getRegion() . "</option>";
                    }
                    ?>
                </select>
                <label class='w-25' for="id">Quantite : </label><br /><input type="text" step='any' name='quantite' value='10'> <br />
            </div>
            <p />
            <br />
            <button class="btn btn-primary" type="submit">Go</button>
        </form>
        <p />
    </div>
    <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

    <!-- ----- fin viewInsert -->