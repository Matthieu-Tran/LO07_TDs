<?php
require_once './Module.php';
class Cursus
{
    private $listeModules;
    public function __construct()
    {
        $this->listeModules = [];
    }
    public function addModules($module)
    {
        $this->listeModules[$module->getSigle()] = $module;
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
