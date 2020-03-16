<?php
$title = "Accueil";
require_once 'views/layout/header.php';
require_once 'functions/db.php';
?>

<!-- CONTENU -->
<div class="jumbotron">
  <h1 class="display-4">Page d'acceuil </h1>
  <p class="lead">C'est la page d'accueil pour le tp B1-INFO 16/03 </p>
  <hr class="my-4">
  <p>comme demander dans le tp, ici la recherche de voiture </p>
  <a class="btn btn-primary btn-lg" href="/voitures.php" role="button">Voir les voitures</a>
</div>
<div>
    <center>
        <div>
            <?php require_once '../functions/db.php'; ?>
        </div>
    </center>
</div>
<!-- FIN CONTENU -->

<?php require_once 'views/layout/footer.php'; ?>