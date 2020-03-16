<?php

(empty($_POST) ||
  empty($_POST['nom']) ||
  empty($_POST['annee_sortie']) ||
  empty($_POST['nb_km']) ) && exit("Requête invalide");

require_once 'functions/enregistrement.php';
$title = "Enregistrement";
require_once 'views/layout/header.php';

?>
<div class="container mt-4">
  <?php  if (newCar($_POST['nom'], $_POST['annee_sortie'], $_POST['nb_km'])) { ?>
    <div class="alert alert-success" role="alert">
      <h2>
        Merci <?php echo $_POST['nom'] . ' ' . $_POST['annee_sortie']  . ' ' . $_POST['nb_km'];?> ! Votre demande a bien été enregistrée et sera traité dans un instant
      </h2>
    </div>
  <?php } else { ?>
    <div class="alert alert-danger" role="alert">
      <h2>
        Une erreur est survenue lors de l'enregistrement de votre voiture
      </h2>
    </div>
  <?php } ?>
</div>

<?php require_once 'views/layout/footer.php'; ?>