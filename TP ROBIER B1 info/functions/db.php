<?php

function getPdo(): PDO
{
    try {
        // A FAIRE : séparer les coordonnées de la base de données dans un fichier non intégré au dépôt git
        $pdo = new PDO(
            "mysql:host-localhost:dbname=tp",
            "test_tp",
            "TG8jtp5hfanBnrGT"

        );
        return $pdo;
    } catch(PDOException $ex) {
        exit("Erreur lors de la connexion à la base de données.");
    }
}
