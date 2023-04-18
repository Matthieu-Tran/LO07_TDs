<?php

require_once './Module.php';
session_start();
class Cursus
{
    private $listeModules;
    public function __construct()
    {
        if (isset($_SESSION['SESSION_cursus'])) {
            $this->listeModules = unserialize($_SESSION['SESSION_cursus']);
        } else {
            $this->listeModules = [];
        }
    }
    public function addModules($module)
    {
        $this->listeModules[$module->getSigle()] = $module;
        $_SESSION['SESSION_cursus'] = serialize($this->listeModules);
    }
    public function __toString()
    {
        $result = '';
        foreach ($this->listeModules as $module) {
            $result .= "Module (" . $module->getSigle() . ", " . $module->getLabel() . ", " . $module->getCategorie() . ", " . $module->getEffectif() . ")<br />";
        }
        return $result;
    }

    public function affiche()
    {
        foreach ($this->listeModules as $sigle => $module) {
            echo $module . "\n";
        }
    }
}
