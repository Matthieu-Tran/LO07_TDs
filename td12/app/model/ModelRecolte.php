<!-- ----- debut ModelProd -->

<?php
require_once 'Model.php';

class ModelRecolte
{
    private $producteur_id, $vin_id, $quantite;

    // pas possible d'avoir 2 constructeurs
    public function __construct($producteur_id = NULL, $vin_id = NULL, $quantite = NULL)
    {
        // valeurs nulles si pas de passage de parametres
        if (!is_null($producteur_id)) {
            $this->producteur_id = $producteur_id;
            $this->vin_id = $vin_id;
            $this->quantite = $quantite;
        }
    }

    function getProdId()
    {
        return $this->producteur_id;
    }


    function getVinId()
    {
        return $this->vin_id;
    }

    function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }

    function getQuantite()
    {
        return $this->quantite;
    }


    public static function getAll()
    {
        try {
            /*
            SELECT vin.id as vinID, producteur.id as prodID, region, cru, nom, prenom, quantite from vin,
            producteur, recolte where recolte.vin_id = vin.id and recolte.producteur_id =
            producteur.id order by vinID, prodID
            */
            $database = Model::getInstance();
            $query = "SELECT region, cru, annee, degre, nom, prenom, quantite from vin,
            producteur, recolte where recolte.vin_id = vin.id and recolte.producteur_id =
            producteur.id order by region";
            $statement = $database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_ASSOC);
            $attributes = array_keys($results[0]); // Obtient les noms des attributs
            $data = array(
                'attributes' => $attributes,
                'tuples' => $results
            );
            return $data;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function getAll2()
    {
        try {
            $database = Model::getInstance();
            $query = "SELECT vin.id as vinID, producteur.id as prodID, region, cru, nom, prenom, quantite from vin,
            producteur, recolte where recolte.vin_id = vin.id and recolte.producteur_id =
            producteur.id order by vinID, prodID";
            $statement = $database->prepare($query);
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_ASSOC);
            $attributes = array_keys($results[0]); // Obtient les noms des attributs
            $data = array(
                'attributes' => $attributes,
                'tuples' => $results
            );
            return $data;
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }

    public static function insert($vin_id, $prod_id, $quantite)
    {
        try {
            $database = Model::getInstance();
            $vin_id = substr($vin_id, 0, 1);
            $prod_id = substr($prod_id, 0, 1);
            $query = "SELECT * from recolte where vin_id = :vin_id and producteur_id = :prod_id ";
            $statement = $database->prepare($query);
            $statement->execute([
                'vin_id' => $vin_id,
                'prod_id' => $prod_id,
            ]);
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelRecolte");
            if ($results) {
                // Si le tuple existe alors on update la quantite
                $query = "UPDATE recolte SET quantite = :quantite where vin_id = :vin_id and producteur_id = :prod_id ;";
                $statement = $database->prepare($query);
                $statement->execute([
                    'vin_id' => $vin_id,
                    'prod_id' => $prod_id,
                    'quantite' => $quantite,
                ]);
                return true;
            } else {
                // Si le tuple n'existe pas alors on l'ajoute 
                $query = "INSERT into recolte value (:vin_id, :prod_id, :quantite)";
                $statement = $database->prepare($query);
                $statement->execute([
                    'vin_id' => $vin_id,
                    'prod_id' => $prod_id,
                    'quantite' => $quantite,
                ]);
                return false;
            }
        } catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return -1;
        }
    }
}
?>
<!-- ----- fin ModelProd -->