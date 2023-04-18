<?php
require_once './Charte.class.php';
require_once './WebBean.interface.php';
class Module implements WebBean
{
    private $sigle;
    private $label;
    private $categorie;
    private $effectif;
    private $listeErreurs = array();
    public function __construct($sigle, $label, $categorie, $effectif)
    {
        $this->setSigle($sigle);
        $this->setLabel($label);
        $this->setCategorie($categorie);
        $this->setEffectif($effectif);
    }
    public function getSigle()
    {
        return $this->sigle;
    }
    public function getLabel()
    {
        return $this->label;
    }
    public function getCategorie()
    {
        return $this->categorie;
    }
    public function getEffectif()
    {
        return $this->effectif;
    }
    public function setSigle($sigle)
    {
        $this->sigle = $sigle;
    }
    public function setLabel($label)
    {
        $this->label = $label;
    }
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }
    public function setEffectif($effectif)
    {
        $this->effectif = $effectif;
    }
    public function __toString()
    {
        return ">>module($this->sigle,$this->label,$this->categorie,$this->effectif) <br />\n";
    }

    //Fonctions de l'interface

    public function valide()
    {
        $resultat = TRUE;
        $sigle = filter_input(INPUT_GET, "sigle");
        $label = filter_input(INPUT_GET, "label");
        $categorie = filter_input(INPUT_GET, "categorie");
        $effectif = filter_input(INPUT_GET, "effectif");
        if (strlen($sigle) == 0) {
            $resultat = FALSE;
            $this->listeErreurs["sigle"] = "Sigle n'est pas défini.";
        } elseif (strlen($label) == 0) {
            $resultat = FALSE;
            $this->listeErreurs["label"] = "Label n'est pas défini.";
        } elseif (strlen($categorie) == 0) {
            $resultat = FALSE;
            $this->listeErreurs["categorie"] = "Categorie n'est pas défini.";
        } elseif (strlen($effectif) == 0) {
            $resultat = FALSE;
            $this->listeErreurs["effectif"] = "Effectif n'est pas défini.";
        }
        return $resultat;
    }

    public function pageKO()
    {
        $html = Charte::html_head_bootstrap3("Page KO");
        $html .= "<p>Il y a eu une erreur lors du traitement de la page.</p>\n";
        foreach ($this->listeErreurs as $key => $value) {
            $html .= "$key => $value <br />\n";
        }
        echo $html;
    }

    public function pageOK()
    {
        $html = Charte::html_head_bootstrap3("Page OK");
        $html .= "<p>La page a été correctement traitée.</p>\n";
        foreach ($_GET as $key => $value) {
            $html .= "$key => $value <br />\n";
        }
        echo $html;
    }
    public function sauveTXT()
    {
        $resultat = $this->sigle . ";";
        $resultat .= $this->label . ";";
        $resultat .= $this->categorie . ";";
        $resultat .= $this->effectif . ";";
        return $resultat;
    }
    public function sauveBDR($table)
    {
        return "Insert into $table values('LO07','Web','CS,87)";
    }
    public function sauveXML($file)
    {
        return "xml";
    }
    public function createTable($table)
    {
        return "create table $table ('sigle varchar(6) not null, categorie varchar(2) check categorie in ('CS', 'TM', 'EC',
        'ME', 'CT'), label varchar(40) not null, effectif integer, primary key (sigle))";
    }
    public function pageFoot()
    {
        $html = Charte::html_foot_bootstrap3();
        $html .= Charte::html_foot_bootstrap5();
        echo $html;
    }
}
