<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TD04</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/bootstrap53.min.css" type="text/css" />

</head>

<body>
  <div class="container">
    <h1>TD</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    <!-- ================================================================================================================ -->
    <!-- ===== Exercice 1 : Squelette de la page avec modification du navbar -->
    <!-- ================================================================================================================ -->

    <nav class="navbar navbar-expand-lg bg-primary fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">TRAN Matthieu</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link" href="???">Exercice 1</a></li>

            <!-- ===== Documentation ===== -->

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Documentation</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Ajouter vos sites personnels de documentation (>3)</a></li>
              </ul>
            </li>

          </ul>
        </div>
      </div>
    </nav>

    <!-- ================================================================================================================ -->
    <!-- ===== Les jumbotrons de BT3 n'existe plus et sont remplacés par de simple div ===== -->

    <div class="mt-4 p-5 bg-primary text-white rounded">
      <h1>TD04: Formulaire PHP avec Bootstrap 5</h1>
    </div>

    <!-- ================================================================================================================ -->
    <!-- ===== Exercice 1 ===== -->
    <!-- ================================================================================================================ -->

    <p />
    <hr />
    <a id='exercice1' />
    <div class="card">
      <div class="card-body bg-info">
        <h5 class="card-title">Exercice 1 : Formulaire de login et méthode GET</h5>

        <div class='mx-lg-3'>
          <form action="td04_e1_action_get.php" method="GET">
            <div class="form-group">
              <label for="login">Login</label>
              <input type="text" class="form-control" name="login">
            </div>
            <div class="form-group mb-3">
              <label for="exampleInputPassword1">Emtrez votre mot de passe</label>
              <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-warning">Reset</button>
          </form>
        </div>
      </div>
    </div>

    <!-- ================================================================================================================ -->
    <!-- ===== Exercice 2 ===== -->
    <!-- ================================================================================================================ -->

    <p />
    <hr />
    <a id='exercice2' />
    <div class="card">
      <div class="card-body bg-info">
        <h5 class="card-title">Exercice 2 : Formulaire de login et méthode POST</h6>
          <div class='mx-lg-3'>

            <form action="td04_e1_action_get.php" method="POST">
              <div class="form-group">
                <label for="login">Login</label>
                <input type="text" class="form-control" name="login">
              </div>
              <div class="form-group mb-3">
                <label for="exampleInputPassword1">Emtrez votre mot de passe</label>
                <input type="password" class="form-control" name="password">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-warning">Reset</button>
            </form>

          </div>
      </div>
    </div>

    <!-- ================================================================================================================ -->
    <!-- ===== Exercice 3 ===== -->
    <!-- ================================================================================================================ -->

    <p />
    <hr />
    <a id='exercice3' />
    <div class="card">
      <div class="card-body bg-info">
        <h5 class="card-title">Exercice 3 : tableaux PHP</h6>
          <div class='mx-lg-3'>

            <form action="td04_e1_action_get.php" method="GET">
              <div class="form-group">
                <label for="Nom">Nom</label>
                <input type="text" class="form-control" name="nom">
              </div>
              <div class="form-group mb-3">
                <label for="prenom">Prenom</label>
                <input type="text" class="form-control" name="prenom">
              </div>
              <div class="form-group">
                <label for="Genre" class=>Selectionnez votre genre</label>
                <p />
                <div class="form-check-inline">
                  <input class="form-check-input" type="radio" name="genre" value="H">
                  <label class="form-check-label">
                    Homme
                  </label>
                </div>
                <div class="form-check-inline">
                  <input class="form-check-input" type="radio" name="genre" value="F">
                  <label class="form-check-label">
                    Femme
                  </label>
                </div>
              </div>


              <div class="form-group mt-3">
                <label for="Statut" class=>Selectionnez votre statut</label>
                <p />

                <input type="radio" class="btn-check" name="status" id="Etudiant">
                <label class="btn btn-secondary" for="Etudiant">Etudiant</label>

                <input type="radio" class="btn-check" name="status" id="Doctorant">
                <label class="btn btn-secondary" for="Doctorant">Doctorant</label>

                <input type="radio" class="btn-check" name="status" id="Administratif">
                <label class="btn btn-secondary" for="Administratif">Admnistratif</label>

                <input type="radio" class="btn-check" name="status" id="Enseignant">
                <label class="btn btn-secondary" for="Enseignant">Ensignant</label>
              </div>


              <div class="form-group mb-3">
                <label for="véhicule">Sélectionnez un véhicule</label>
                <select class="form-control" id="véhicule" name="vehicule">
                  <option>Twingo</option>
                  <option>Clio</option>
                  <option>Captur</option>
                  <option>Espace</option>
                  <option>Modèle S</option>
                  <option>Modèle 3</option>
                  <option>Modèle X</option>
                  <option>Modèle Y</option>
                </select>
              </div>

              <div class="form-group mb-3">
                <label for="exampleFormControlSelect2">Sélectionnez vos UT (plusieurs choix)</label>
                <select class="form-control" name="UT" multiple>
                  <option>UTBM</option>
                  <option>UTC</option>
                  <option>UTT</option>
                  <option>UTSEUS</option>
                  <option>UTM (Martinique)</option>
                  <option>UTG (Guyane)</option>
                </select>
              </div>


              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="letter">
                <label class="form-check-label" for="flexCheckDefault">
                  Je souhaite recevoir la newsletter
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remboursement">
                <label class="form-check-label" for="flexCheckChecked">
                  Je souhaite recevoir le remboursement du déplacement
                </label>
              </div>

              <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-warning">Reset</button>
              </div>
            </form>

          </div>
      </div>
    </div>

  </div>


  <!-- ================================================================================================================ -->
  <p />
  <hr />
  <p />
  <small>Page de Matthieu Tran rédigée le 21/03/2023</small>
  <p />
  <hr />
  <p />
</body>

</html>