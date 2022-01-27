<?php
require_once ('librairies/database.php');

$cnloctel=mysqli_connect('localhost','root','','loctel');


function getPosts() {
    global $cnloctel;
    $query = mysqli_query($cnloctel,"SELECT * FROM telephone");
    while($row = mysqli_fetch_array($query))
        {
            echo "<div class=\"blogsnippet\">";
            echo "<h4>" . $row['Title'] . "</h4>" . $row['SubHeading'];
            echo "</div>";
        }
    }
    
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <title>tb</title>
</head>
<body>

     <p><h1 class="color"><b>liste de téléphones</b></h1>
 
  

    <?php 
$reqselect="select * from telephone";
$resultat=mysqli_query($cnloctel,$reqselect);

$nbr=mysqli_num_rows($resultat);

echo "<p>Total <b> ".$nbr."</b> telephones...</p>";

    ?>
</p>
<table width="100%" border="1"> 
    <tr>
        <th>IMM</th>
        <th>Marque</th>
        <th>Prix de loc</th>
        <th>photo</th>
        <th>Supprimer</th>
        <th>Modifier</th>
    </tr>
  
    <?php
    while($ligne=mysqli_fetch_assoc($resultat))
    {
    ?>
   <tr>
      <td><?php echo $ligne['IMM'];?></td>
      <td><?php echo $ligne['MARQUE'];?></td>
      <td><?php echo $ligne['PRIX_LOC'];?></td>
      <td><img src='<?php echo $ligne['PHOTO']?>' class="photo"></td>
      <td> <a href="supprimer.php?sup=<?php echo $ligne['IMM']; ?>"><i class="fas fa-archive"></i></a></td>
      <td> <a href="modifier.php?mod=<?php echo $ligne['IMM']; ?>"><i class="fas fa-edit"></i></a></td>
     
   </tr>

   <?php
 }
   ?>
</table>
<div class="form-label">
        <p><a href="users.php" class="submit">Retour</a></p>
    </div>
</body>
</html>