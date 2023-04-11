<?php
// Créez une variable avec le chemin relatif vers le fichier de l'exercice 2 en utilisant la constante magique __DIR__
$exercice2_url = "http://" . $_SERVER['HTTP_HOST'] . "/lo07_tds/td07/td07_e2_url_long.php";
$hidden_url = "http://" . $_SERVER['HTTP_HOST'] . "/lo07_tds/td07/champsCaches/index.php";
$cookies_url = "http://" . $_SERVER['HTTP_HOST'] . "/lo07_tds/td07/cookies/index.php";
$session_url = "http://" . $_SERVER['HTTP_HOST'] . "/lo07_tds/td07/session/index.php";

?>

<nav class="navbar navbar-expand-lg bg-primary fixed-top">

  <div class="container-fluid">
    <a class="navbar-brand" href="#">Matthieu Tran</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $exercice2_url; ?>" rel="noreferrer">Exercice 2</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Exercice 3</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo $hidden_url; ?>" rel="noreferrer">Formulaires avec des champs cachés</a></li>
            <li><a class="dropdown-item" href="<?php echo $cookies_url; ?>" rel="noreferrer">Formulaire avec des cookies</a></li>
            <li><a class="dropdown-item" href="<?php echo $session_url; ?>" rel="noreferrer">Formulaire avec des variables de sessions</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>