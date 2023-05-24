<!-- ----- debut ControllerProd -->
<?php
require_once '../model/ModelRecolte.php';
require_once '../model/ModelProd.php';
require_once '../model/ModelVin.php';
class ControllerRecolte
{

    public static function recolte()
    {
        $results = ModelRecolte::getAll();
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/recolte/viewAll.php';
        if (DEBUG)
            echo ("ControllerRecolte : recolte : vue = $vue");
        require($vue);
    }

    public static function recolte2()
    {
        $results = ModelRecolte::getAll2();
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/recolte/viewAll.php';
        if (DEBUG)
            echo ("ControllerRecolte : recolte : vue = $vue");
        require($vue);
    }
    public static function ajoutRecolte()
    {
        $resultsVin = ModelVin::getAll();
        $resultsProd = ModelProd::getAll();
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/recolte/viewInsert.php';
        if (DEBUG)
            echo ("ControllerRecolte : recolte : vue = $vue");
        require($vue);
    }

    public static function recolteInserted()
    {
        // ajouter une validation des informations du formulaire
        $results = ModelRecolte::insert(
            htmlspecialchars($_GET['vin_id']),
            htmlspecialchars($_GET['producteur_id']),
            htmlspecialchars($_GET['quantite'])
        );
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/recolte/viewInserted.php';
        require($vue);
    }
}
?>
<!-- ----- fin ControllerProd -->