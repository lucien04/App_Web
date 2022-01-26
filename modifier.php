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
<html lang="fr">
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
 <form action="" method="POST" name="formUpdate" class="formulaire" enctype="multipart/form-data">
    <h1 class="nom" > Mettre à jour un téléphone</h1>

    <div class="form-label">
    <label>Immatriculation:</label>
    <input  type="text" name="txtImm" class="zonetext" value="<?php echo $_GET['mod'] ?>"readonly>
    </div>
    <div class="form-label">
    <label>Marque:</label>
    <input type="text" name="txtMarque" class="zonetext" placeholder="Entrer la Marque ici..." required>
    </div>

    <div class="form-label">
    <label>Prix de Location:</label>
    <input type="number" name="txtpl" class="zonetext" placeholder="Entrer le prix ici..." required>
    </div>

    <div class="form-label">
    <label>Photo:</label>
    <input type="file" name="txtphoto"  placeholder="choisir une image..." required>
    </div>

    <div class="form-label">
     <input type="submit" class="sub_mit" name="btmod" value="Mettre à jour">
    </div>
    
    <div class="form-label">
        <p><a href="tb.php" class="submit">Grille de Telephones</a></p>
    </div>
    


    <label style="text-align: center; color:#f30;"></label>


    <?php 
    if(isset($_POST['btmod']))
    {
        $Imm=$_POST['txtImm'];
        $marque=$_POST['txtMarque'];
        $prixloc=$_POST['txtpl'];
     
        $modifier=$_GET['mod'];


        $image=$_FILES['txtphoto']['tmp_name'];

        $traget="images/".$_FILES['txtphoto']['name'];

        move_uploaded_file($image,$traget);

        $reqUp="UPDATE telephone SET MARQUE='$marque',PRIX_LOC='$prixloc',PHOTO='$traget' WHERE 
        IMM='$modifier'";

        $resultat=mysqli_query($cnloctel,$reqUp);

        if($resultat)
        {
          echo "Mise à jour des données validés";
        }else{
         echo " Echec de Mise à jour des données ";
        }



    }
    
    ?>

 </form>
    </div>
</body>
</html>