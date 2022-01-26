<?php
require_once ('librairies/database.php');




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="users.php" class="text-light"> Add user</a>
    </button>
        <table class="table caption-top">
            <caption>Liste des utilisateurs</caption>
  <thead>
    <tr>
      <th scope="col">IMM</th>
      <th scope="col">MARQUE</th>
      <th scope="col">PRIX_LOC</th>
      <th scope="col">PHOTO</th>
      <th scope="col">SUPP</th>
      <th scope="col">MODIF</th>
    </tr>
    <?php 
      $resultat=mysqli_query($cnloctel,$reqSelect);
        while($ligne=mysqli_fetch_assoc($resultat))
        {
        ?>
       <tr>
          <td><?php echo $ligne['IMM'];?></td>
          <td><?php echo $ligne['MARQUE'];?></td>
          <td><?php echo $ligne['PRIX LOC'];?></td>
          <td><img src='<?php echo $ligne['PHOTO']?>' class="photocar"></td>
          <td> <a href="supprime.php"><img src="images/" width="50px height="50px"></a></td>
          <td> <a href="modifier.php"><img src="images/" width="50px height="50px"></a></td>
         
       </tr>
       <?php
     }
       ?>
  </thead>
  <tbody>
        <div class="row">
            <?php foreach($users as $user) : ?>
            <div class="col-md">
                <div class="card">
                    <div class="card-body">
                        <a class="" href="user.php?user_id=<?= $user['user_id'] ?>"><img class="img-fluid"
                                src="assets/img/<?= $user['user_id'] ?>.png" alt="">cliquez pour plus d'infos</a>
                       
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
</table>
    </div>

</body>
</html>