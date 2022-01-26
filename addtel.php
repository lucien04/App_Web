<?php
require_once __DIR__ . '/librairies/database.php';
require 'functions.php';
$pdo = db_connect();

$error = false;


// Le formulaire a été soumis
if (!empty($_POST)) {

    // vérifie que le nom est bien renseigné
    if (empty($_POST['IMM'])) {
        $error = true;
    }
    if (empty($_POST['MARQUE'])) {
        $error = true;
    }
    if (empty($_POST['PRIX_LOC'])) {
        $error = true;
    }

    if (!$error) {
        $first_name = htmlentities($_POST['IMM']);
        $last_name = htmlentities($_POST['MARQUE']);
        $bday = htmlentities($_POST['PRIX_LOC']);
        if (adduser($pdo, $IMM , $MARQUE, $PRIX_LOC)) {
            $success = true;
        }
    }
}
$title = 'Ajouter un utilisateur';
require_once 'header.php';
?>

<h2>Crée un nouvel utilisateur</h2>
<main>
    <div class="container ls-5">
        <?php if (isset($success)) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <p>utilisateur créé avec succès !</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <div class="row justify-content-center">
            <div class="col-md-5 bg-light p-3">
                <form action="" method="post">
                    <img src="assets/img/hom.png" width="10%"   alt="">
                    <div class="mb-3">
                       <label  class="mb-3" for="name">prenom</label>
                        <input name="first_name"  type="text">
                        <label class="mb-3" for="name">Nom</label>
                        <input name="last_name" type="text">
                        <label class="mb-3" for="name">Date de naissance</label>
                        <input type="date" id="bday" name="bday">
                        <p class="mb-0 text-danger"><?= $error ? 'Le champ est requis' : '' ?></p>
                    </div>

                    <input class="btn btn-primary" type="submit" value="Enregister">
                </form>
            </div>
        </div>
    </div>
    <p class="fixed"> 
                <button type="button" class="btn btn-primary">  <a href="accueil.php"> <i class="fas fa-angle-left left">
                </a></i> </button>
            </p>
</main>