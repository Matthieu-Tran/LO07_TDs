<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TODO</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap53.min.css" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="my_css.css">

  </head>
  <body>
    <div class="container">
      <h1>TD</h1>
      <script 
          src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
      </script>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 1 : Squelette de la page avec modification du navbar -->
      <!-- ================================================================================================================ -->

      <nav class="navbar navbar-expand-lg bg-primary fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">LO07 TD03</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item"><a class="nav-link" href="#exercice1">Exercice 1</a></li>
              <li class="nav-item"><a class="nav-link" href="#exercice2">Exercice 2</a></li>
              <li class="nav-item"><a class="nav-link" href="#exercice3">Exercice 3</a></li>
              <li class="nav-item"><a class="nav-link" href="#exercice4">Exercice 4</a></li>

              <!-- ===== Documentation ===== -->

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Documentation</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="">Ajouter vos sites personnels de documentation (>3)</a></li>
                </ul>
              </li>

            </ul>
          </div>
        </div>
      </nav> 

      <!-- ================================================================================================================ -->
      <!-- ===== Les jumbotrons de BT3 n'existe plus et sont remplacés par de simple div ===== -->       

      <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>Introduction à PHP</h1>
        <p>PHP est un langage de scripts généraliste et Open Source spécialement conçu pour le développement d'applications web.</p>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 1 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <a id='exercice1'/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 1 : réparation et validation</h5>

          <div class='mx-lg-3'> 

            <?php
              echo "Bonjour à tous";
            ?>

          </div>
        </div>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 2 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <a id='exercice2'/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 2 : variables PHP</h6>
            <div class='mx-lg-3'> 

            <?php
              $nom = "Tran";
              $prenom = "Matthieu";
              $age = 21;
              $ingenieur = 1;
            ?>    
            <div class="list-group">
              <a href="#" class="list-group-item list-group-item-action">Nom = <?php echo $nom ?></a>
              <a href="#" class="list-group-item list-group-item-action">Prenom = <?php echo $prenom ?></a>
              <a href="#" class="list-group-item list-group-item-action">Age = <?php echo $age ?></a>
              <a href="#" class="list-group-item list-group-item-action">Ingénieur = <?php echo $ingenieur ?></a>
            </div>

            </div>
        </div>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 3 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <a id='exercice3'/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 3 : tableaux PHP</h6>
            <div class='mx-lg-3'> 

            <?php
              $tabCapitales = array("Vienne", "Sofia", "Nicosie", "Copehenhague", "Helsinki", "Vilnius", "Bratislava","Ljubljana", "Riga", "Varsovie");
              unset($tabCapitales[4]);
            ?>   
            <pre>
              <?php 
                print_r($tabCapitales)
              ?>
            </pre>
            <ul class="list-group">
              <?php 
              foreach($tabCapitales as $capitale) {
                echo "<li class='list-group-item'>$capitale</li>";
              }
              ?>
            </ul>
            
            <p/><hr/>


            <h3>Implode</h3>
            <ul class="list-group">
              <li class='list-group-item bg-warning'>
                <?php 
                echo implode("; ",$tabCapitales)
                ?>
              </li>
            </ul>

            <p/><hr/>

            <h3>Accès aux données</h3>
            <ul class="list-group">
              <li class="list-group-item bg-primary">
                <?php
                echo "Nombre d'éléments: " . sizeof($tabCapitales);
                ?>
              </li>
              <li class='list-group-item bg-warning'>
                <?php 
                sort($tabCapitales);
                echo "Tableau trié = " . implode(", ",$tabCapitales);
                ?>
              </li>
            </ul>
            

            </div>      
        </div>
      </div>

    


      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 4 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <a id='exercice4'/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 4 : Tableaux associatifs</h6>
          <p/><hr/>
          <?php
          $hashCapitales = array("Bulgarie"=>"Sofia", "Chypre"=>"Nicosie", "Estonie"=>"Tallinn" , "Lettonie"=>"Riga", "Lituanie"=>"Vilnius", "Roumanie"=>"Bucarest");
          ?>
          <h3>Estonie ?</h3>

          <!-- Affichage d'un élément dans le tableau -->

          <ul class="list-group">
            <li class='list-group-item bg-warning'>
              <?php
                echo $hashCapitales["Estonie"];
              ?>
            </li>
          </ul>

          <!-- Ajout d'un élément dans le tableau -->

          <?php 
          $hashCapitales["Estonie"] = "Narva";
          ?>
          <p/><hr/>
          <h3>Bilan d'un ajout</h3>

          <!-- Affichage d'un élément dans le tableau -->

          <ul class="list-group">
            <li class='list-group-item bg-warning'>
              <?php
                echo $hashCapitales["Estonie"];
              ?>
            </li>
          </ul>

          <p/><hr/>
          <h3>print_r</h3>

          <pre>
            <?php 
              print_r($hashCapitales)
            ?>
          </pre>

          <p/><hr/>

          <h3>Foreach</h3>

          <ul class="list-group">
            <?php 
              foreach($hashCapitales as $key => $value) {
                echo "<li class='list-group-item'>$key => $value</li>";
              }
            ?>
          </ul>

          <p/><hr/>

          <h3>Accès aux données</h3>
          <ul class="list-group">
          <li class="list-group-item">
            Liste des clés = 
            <?php
              $keys = array_keys($hashCapitales);
              echo "<pre>";
              print_r($keys);
              echo "</pre>";
            ?>
          <p/><hr/>
            Liste des valeurs = 
            <?php
              $values = array_values($hashCapitales);
              echo "<pre>";
              print_r($values);
              echo "</pre>";
            ?>
          </li>
          
          </ul>

          </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 5 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <a id='exercice5'/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 5 : Fonctions PHP</h5>
          <?php
            function badge($label, $compteur) {
              $html = '<button class="btn btn-primary m-1">';
              $html .= $label . ' <span class="badge bg-warning">' . $compteur . '</span>';
              $html .= '</button>';
              return $html;
            }
            echo "<h3>Test de la fonction Web, 6</h3>";
            echo badge("Web",6);
            echo "<p/><hr/>";

            foreach($tabCapitales as $capitale) {
              echo badge($capitale, strlen($capitale));
            }
          ?>
          
          
            
        </div>
      </div>

                      
            
        
      </div>
    </div>
    <!-- ================================================================================================================ -->
    <p/><hr/><p/>
    <small>Page de Matthieu Tran rédigée le 05/03/2023</small>
    <p/><hr/><p/>
  </body>
</html>