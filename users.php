<?php
// include 'librairies/database.php';

// if(isset($_POST['submit'])){
//     $name=$_POST['login'];
//     $name=$_POST['password'];

//     $sql="insert into  `telephones ` (login,password) 
//     VALUES ('$login','$password')";
//     $result=mysqli_query($con,$sql);
//     if($result){
//         echo "success";
//     }else{
//         die(mysqli_error($con));
//     }
// }

require_once __DIR__ . '/librairies/database.php';
require 'functions.php';
$pdo = db_connect();

$error = false;


// Le formulaire a été soumis
if (!empty($_POST)) {

    // vérifie que le nom est bien renseigné
    if (empty($_POST['login'])) {
        $error = true;
    }
    if (empty($_POST['password'])) {
        $error = true;
    }

    if (!$error) {
        $login = htmlentities($_POST['login']);
        $password = htmlentities($_POST['password']);
        if (adduser($pdo, $login , $password)) {
            $success = true;
        }
    }
}
?>


<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">

    <title>Hello, world!</title>
  </head>
  <body>
      <h1 class="connect">Connexion</h1>
   <div class="container">
   <form method="POST">
  <div class="mb-3">
    <label for="text" class="form-label">Nom d'utilisateurs</label>
    <input type="text" class="form-control" id="text"  placeholder="Entrer votre Nom d'utilisateurs" name="login">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1"  class="form-label">Mot de passe</label>
    <input type="password" class="form-control" id="Password" placeholder="Entrer votre Mot de passe" name="password">
  </div>

  <button type="submit" class="btn btn-primary" name="submit"> <a href="tb.php">Se connecter</a></button>

</form>
   </div>

   <div class="form-label">
        <p><a href="index.php" class="submit">Retour</a></p>
    </div>
  </body>
</html>
