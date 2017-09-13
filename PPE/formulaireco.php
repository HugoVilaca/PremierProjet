<!DOCTYPE html>

<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=ppe', 'root', '');

if(isset($_POST['formconnexion'])) {
  session_start();
   $mailconnect = htmlspecialchars($_POST['mailconnect']);
   $mdpconnect = sha1($_POST['mdpconnect']);
   
      $requser = $bdd->prepare("SELECT * FROM membres WHERE mail = ? AND motdepasse = ?");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['pseudo'] = $userinfo['pseudo'];
         $_SESSION['mail'] = $userinfo['mail'];
          header('location: formulaireco.php?variable=3');
      } else {
        header('location: formulaireco.php?variable=4');
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

 
 ?> 

<?php
if ($variable==3) 
{ ?>
<div align="center" class="alert alert-info">
  <span class="croix" onclick="this.parentElement.style.display='none';">&times;</span> <strong>VOUS ÊTES CONNECTÉ !&nbsp&nbsp&nbsp</strong><a  href="profil.php?id=<?php echo $_SESSION['id']; ?>"  class="alert-link">Voir mon profil ici</a>
</div> 
<?php } 
?>

<?php
if ($variable==4) 
{ ?>
<div align="center" class="alert alert-danger">
  <span class="croix" onclick="this.parentElement.style.display='none';">&times;</span> <strong>MAUVAIS MAIL OU MOT DE PASSE</strong>
</div> 
<?php } 
?>



<div class="container">




<section id="gauche"> 
<div class="row main">
        <div class="main-login main-center-left">
<h4 align="center" ><strong><font color="DE1417">Connectez-vous :</font></strong></h4><a href="formulaire.php"> Pas encore de compte ? Créez en un ici !</a><br><br>


<form  method="post" action="">
            
            <div class="form-group">
              <label for="email" text-col class="cols-sm-2 control-label"><font color="DE1417">Email</font></font></label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="mailconnect" id="pseudo" required placeholder="Entrez votre Email"  />
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="password" class="cols-sm-2 control-label"><font color="DE1417">Mot de passe</font></label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                  <input type="password" class="form-control" name="mdpconnect" id="password" required placeholder="Entrez votre mot de passe"/>
                </div>
              </div>
            </div>
 <div class="form-group ">
              <input id="button" class="btn btn-primary btn-lg btn-block login-button" name="formconnexion" type="submit" value ="Connexion" />
      </div>
            </form>
        
             <img src="img/logo.png" width="200" height="100"></div>
</section>

    </div>
<br />

  </div>
  </div>
  </body>