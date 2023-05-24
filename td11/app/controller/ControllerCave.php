<!-- ----- debut ControllerProd -->
<?php

class ControllerCave
{
    // --- Liste des prods
    public static function caveAccueil()
    {
        include 'config.php';
        $vue = $root . '/app/view/viewCaveAccueil.php';
        if (DEBUG)
            echo ("ControllerCave : caveAccueil : vue = $vue");
        require($vue);
    }

    public static function proposition()
    {
        include 'config.php';
        $vue = $root . '/app/view/mesPropositions.php';
        require($vue);
    }
}
?>
<!-- ----- fin ControllerProd -->