<?php

// biliotheque fonctions formulaire avec bootstrap
// --------------------------------------------------
// form_begin
// --------------------------------------------------

function listeJourLabel() {
    $arr = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
  return $arr;
}

function listeJourIndice() {
  return range(1,31);
}
function listeMois() {
    $arr = array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");
  return $arr;
}

function listeSeance(){
  $arr= [];
  for($i=8; $i<18;$i++){
    for($j=0;$j<6;$j+=2){
      $heure = $i."h".$j."0";
      array_push($arr, $heure);
    }
  }
  return $arr;
}

?>
