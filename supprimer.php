<?php require_once ('librairies/database.php'); 

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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <title>Document</title>
</head>
<body>

  <div id="container">
 <form action="" class="formulaire" name="formdelet">
 <h1 class="nom" >Suppression d'un téléphone</h1>
 <div class="form-label">
        <p><a href="tb.php" class="submit">Grille de Telephones</a></p>
    </div>
    <?php 
      if(isset($_GET['sup']))
      {
          $sup=$_GET['sup'];
          $reqDelete="DELETE FROM telephone WHERE IMM='$sup'";
          $resultat=mysqli_query($cnloctel,$reqDelete);
      }
      if($resultat)
      {
        echo "La suppression a été effectuée";
      }else{
        echo "La suppression a échouée";
      }
    
    ?>
    </form>
    </div>
</body>
</html>