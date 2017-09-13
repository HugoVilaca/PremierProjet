<!DOCTYPE html>


<?php
$bdd = new PDO('mysql:host=localhost;dbname=ppe', 'root', '');

if(isset($_POST['forminscription'])) {
   $nom = htmlspecialchars($_POST['nom']);
   $pseudo = htmlspecialchars($_POST['pseudo']);
   $mail = htmlspecialchars($_POST['mail']);
   $mdp = sha1($_POST['mdp']);
   $mdp2 = sha1($_POST['mdp2']);

               $reqmail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");  // Email existant
               $reqmail->execute(array($mail));
    $mailexist = $reqmail->rowCount();
               if($mailexist == 0) {
                  if($mdp == $mdp2) {
                     $insertmbr = $bdd->prepare("INSERT INTO membres(nom, pseudo, mail, motdepasse) VALUES(?, ?, ?, ?)");
                     $insertmbr->execute(array($nom, $pseudo, $mail, $mdp));
                     header('location: formulaire.php?variable=0');
                  } else {
                      header('location: formulaire.php?variable=1');
                  }
               } else {
                 header('location: formulaire.php?variable=2');
               } 
           
}
?>


<html lang="fr">
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href = "css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href = "css/styles.css" rel= "stylesheet">
    <meta charset="utf-8" />
    <link rel="stylesheet" href="m2lcss.css" />
    <?php include("menu.php");
         
        
    ?>
    </head>

    <body>
  
    <div id="coeur">
  <div id="contenu">
<br />
<?php
if (isset($_GET['variable'])) {
  $variable = $_GET['variable'];
} else {
  $variable = 10;
}

 
 ?> <?php
if ($variable==0) 
{ ?>
<div align="center" class="alert alert-success"><span class="croix" onclick="this.parentElement.style.display='none';">&times;</span>
  <strong>FÉLICITATIONS!</strong>&nbsp&nbspVotre compte a été crée.<br> <a href="formulaireco.php" class="alert-link">Me connecter</a>
</div> 
<?php } 
?>

<?php
if ($variable==1) 
{ ?>
<div align="center" class="alert alert-danger"><span class="croix" onclick="this.parentElement.style.display='none';">&times;</span>
  <strong>ATTENTION !</strong>&nbsp&nbsp Les mots de passe ne sont pas identiques.
</div> 
<?php } 
?>

<?php
if ($variable==2) 
{ ?>
<div align="center" class="alert alert-danger"><span class="croix" onclick="this.parentElement.style.display='none';">&times;</span>
  <strong>ATTENTION !</strong>&nbsp&nbspAdresse Email déjà utilisée.
</div> 
<?php } 
?>

<div class="container">


<!-- INSCRIPTION !-->

      <div class="row main">
        <div class="main-login main-center" >
        <h4 align="center"><strong>Inscription</strong></h4><a href="formulaireco.php"><font color="FFFFFF"> Déjà inscrit ? Connectez-vous ici !</font></a><br><br>

          

          <form  method="post" action="inscription.php">
            
            <div class="form-group">
              <label for="nom"  class="cols-sm-2 control-label">Nom</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="nom" id="nom" required placeholder="Entrez votre Nom"  />
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="pseudo" class="cols-sm-2 control-label">Pseudo</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="pseudo" id="pseudo" required="required" placeholder="Entrez votre pseudo"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="mail" class="cols-sm-2 control-label">Email</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                  <input type="email" class="form-control" name="mail" id="mail"  placeholder="Entrez votre Email"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="mdp" class="cols-sm-2 control-label">Mot de passe</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input type="password" class="form-control" name="mdp" id="mdp" required placeholder="Entrez votre mot de passe"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="mdp2" class="cols-sm-2 control-label">Confirmation Mot de passe</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input type="password" class="form-control" name="mdp2" id="mdp2" required placeholder="Comfirmez votre mot de passe"/>
                </div>
              </div>
            </div>
            

            <div class="form-group ">
              <input id="button" class="btn btn-primary btn-lg btn-block login-button" name="forminscription" type="submit" value ="Inscription" />

            
  
          
            </div>
            
          </form>



        </div>
      </div>
    </div>
<br />



  </div>
  </div>
  </body>
