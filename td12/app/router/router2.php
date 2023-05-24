<!-- ----- debut router2 -->
<?php
require('../controller/ControllerVin.php');
require('../controller/ControllerProd.php');
require('../controller/ControllerCave.php');
require('../controller/ControllerRecolte.php');

// --- récupération de l'action passée dans l'URL
$query_string = $_SERVER['QUERY_STRING'];

// fonction parse_str permet de construire 
// une table de hachage (clé + valeur)
parse_str($query_string, $param);

// --- $action contient le nom de la méthode statique recherchée
$action = htmlspecialchars($param["action"]);

// --- On supprime l'élément action de la structure 
unset($param['action']);

// --- tout ce qui reste sont des arguments 
$args = $param;

// --- Liste des méthodes autorisées
switch ($action) {
  case "vinReadAll":
  case "vinReadOne":
  case "vinReadId":
  case "vinCreate":
  case "vinCreated":
  case "vinDeleted":
    ControllerVin::$action($args);
    break;

  case "prodReadAll":
  case "prodReadOne":
  case "prodReadId":
  case "prodCreate":
  case "prodCreated":
  case "prodReadSingle":
  case "prodNumber":
  case "prodDeleted":
    ControllerProd::$action($args);
    break;

  case "recolte":
  case "recolte2":
  case "ajoutRecolte":
  case "recolteInserted":
    ControllerRecolte::$action();
    break;

  case "proposition":
    ControllerCave::$action();
    break;

    // Tache par défaut
  default:
    $action = "caveAccueil";
    ControllerCave::$action();
}
?>
<!-- ----- Fin router2 -->