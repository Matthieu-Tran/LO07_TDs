<!-- ----- debut ControllerProd -->
<?php
require_once '../model/ModelProd.php';

class ControllerProd
{
    // --- Liste des prods
    public static function prodReadAll()
    {
        $results = ModelProd::getAll();
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/producteur/viewAll.php';
        if (DEBUG)
            echo ("ControllerProd : prodReadAll : vue = $vue");
        require($vue);
    }

    // Affiche un formulaire pour sélectionner un id qui existe
    public static function prodReadId()
    {
        $results = ModelProd::getAllId();

        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/producteur/viewId.php';
        require($vue);
    }

    // Affiche un prod particulier (id)
    public static function prodReadOne()
    {
        $prod_id = $_GET['id'];
        $results = ModelProd::getOne($prod_id);

        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/producteur/viewAll.php';
        require($vue);
    }

    // Affiche le formulaire de creation d'un prod
    public static function prodCreate()
    {
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/producteur/viewInsert.php';
        require($vue);
    }

    // Affiche un formulaire pour récupérer les informations d'un nouveau prod.
    // La clé est gérée par le systeme et pas par l'internaute
    public static function prodCreated()
    {
        // ajouter une validation des informations du formulaire
        $results = ModelProd::insert(
            htmlspecialchars($_GET['nom']),
            htmlspecialchars($_GET['prenom']),
            htmlspecialchars($_GET['region'])
        );
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/producteur/viewInserted.php';
        require($vue);
    }

    //Affiche les régions sans les doublons
    public static function prodReadSingle()
    {
        $results = ModelProd::getSingle();

        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/producteur/viewRegion.php';
        require($vue);
    }

    //Affiche le nombre de producteur par région
    public static function prodNumber()
    {
        $results = ModelProd::getNumber();

        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/producteur/viewNumber.php';
        require($vue);
    }
}
?>
<!-- ----- fin ControllerProd -->