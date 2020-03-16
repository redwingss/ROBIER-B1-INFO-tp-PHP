<?php

require_once  __DIR__ .'/db.php';

function newCar(
    $nom, $annee_sortie, $nb_km, $prix=10
){
    $pdo = getPdo();

     $query = "INSERT INTO voiture (nom, annee_sortie, nb_km, prix) VALUES (:nom, :annee_sortie, :nb_km, :prix)";
     $stmt = $pdo->prepare($query);

      // On retourne le résultat d'execute car en cas de succès elle retourne TRUE, sinon en cas d'échec elle retourne FALSE
      return $stmt->execute([
      'nom' => $nom,
      'annee_sortie' => $annee_sortie,
      'nb_km' => $nb_km,
      'prix' => $prix

  ]);
}
