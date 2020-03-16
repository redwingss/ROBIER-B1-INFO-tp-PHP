
<?php
$title = "Enregistrement";
require_once 'views/layout/header.php';
?>

    <!-- CONTENU -->
    <div class="container mt-4">
        <h1>Enregistrer une voiture</h1>
        <form action="contact_process.php" method="POST">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" aria-describedby="nomHelp">
                <small id="nomHelp" class="form-text text-muted">Entrez le nom de la voiture</small>
            </div>
            <div class="form-group">
                <label for="annee_sortie">Année de sortie</label>
                <input type="text" class="form-control" id="annee_sortie" name="annee_sortie" aria-describedby="prenomHelp">
                <small id="prenomHelp" class="form-text text-muted">Entrez l'année de sortie de la voiture</small>
            </div>
            <div class="form-group">
                <label for="nb_km">Nombre de Kilomètre</label>
                <input type="texte" class="form-control" id="nb_km" name="nb_km" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">Nombre de Kilomètre</small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <!-- FIN CONTENU -->

<?php require_once 'views/layout/footer.php'; ?>

