<?php 
require_once ('librairies/database.php');


//1. check la validation du formulaire de connexion


//2. Tu utilises ton instance de PDO pour récupérer l'utisateur qui à login renseigner

// 3. Tu compares les mots de passe récupérer dans la bdd avec celui renseigné

// 4. Si tout est identique, tu demarres une session

// 5 Tu stockes dans la session l'id de l'utilisateur

// 6 Tu fais ta redirection


// 7; Dans chaque page protégée, tu vérifies que l'id existe toujours la session




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style.css" />
</head>
<body>

<div id="entete">
    <div>
  
        <!-- <video  autoplay="autoplay" class="video_entete" >
            <source src="images/WhatsApp Video 2021-12-09 at 11.17.06.mp4" type="video/mp4">
            
        </video>  -->
      
 
        <h1 class="nom">D-F Location de telephones</h1>
       
   </div>
   
    <div id="formauto">
   <form name="formauto" method="post" action="">
       <a href="users.php" class="login">Connexion</a>

    </form>
</div>

</div>

    
<!-- <div id="articles">
    <?php 
    if(isset($_POST['btsubmit'])){
        $mc=$_POST['motcle'];
        $reqSelect="select *from telephone where  MARQUE like '%$mc%'";
    } else{
        $reqSelect="select *from telephone";
    }
    $resultat=mysqli_query($cnloctel,$reqSelect);
    $nbr=mysqli_num_rows($resultat);
    echo "<p><b>".$nbr."</b>  Resultats de votre recherche...</p>";  
    while ($ligne=mysqli_fetch_assoc($resultat) )
{
 ?>
 <div id="auto">
     <img src="<?php echo $ligne['PHOTO'] ?>" /> <br />
     <?php echo $ligne['MARQUE']; ?><br />
     <?php echo $ligne['PRIX_LOC']; ?><br />
     <?php echo $ligne['IMM']; ?>


 </div> -->
 
 <main class="main">
            <article>
       
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Curabitur cursus neque ante. arcu vitae facilisis tempus. <br>
                    arcu vitae facilisis tempus.consectetur adipiscing elit.
                    Curabitur cursus neque ante. </p> -->
        
               
                <!-- <div class="text-center">
                    <button type="button" class="btn btn-primary">Loctel </button>
                </div> -->
                
                <div></div>
                <div></div>
                <div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </article>
            <!-- <p class="fixed"> 
                <button type="button" class="btn btn-primary">  <a href="acceuil.php">entrer <i class="fas fa-angle-right right">
                </a></i> </button>
            </p> -->
        </main>

<?php } ?>
   


</body>
</html>


        

  
</body>
</html>