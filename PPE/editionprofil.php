<!DOCTYPE html>
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

<?php


session_start();
$bdd = new PDO('mysql:host=localhost;dbname=ppe', 'root', '');


if(isset($_SESSION['id'])) {
   $requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
   $requser->execute(array($_SESSION['id']));
   $user = $requser->fetch();
    if(isset($_POST['newpseudo'])  AND $_POST['newpseudo'] != $user['pseudo']) {
      $newpseudo = htmlspecialchars($_POST['newpseudo']);
      $insertpseudo = $bdd->prepare("UPDATE membres SET pseudo = ? WHERE id = ?");
      $insertpseudo->execute(array($newpseudo, $_SESSION['id']));
      header('Location: profil.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['newmail'])  AND $_POST['newmail'] != $user['mail']) {
      $newmail = htmlspecialchars($_POST['newmail']);
      $insertmail = $bdd->prepare("UPDATE membres SET mail = ? WHERE id = ?");
      $insertmail->execute(array($newmail, $_SESSION['id']));
      header('Location: profil.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['newmdp'])  AND isset($_POST['newmdp2'])) {
      $mdp = sha1($_POST['newmdp']);
      $mdp2 = sha1($_POST['newmdp2']);
      if($mdp == $mdp2) {
         $insertmdp = $bdd->prepare("UPDATE membres SET motdepasse = ? WHERE id = ?");
         $insertmdp->execute(array($mdp1, $_SESSION['id']));
         header('Location: profil.php?id='.$_SESSION['id']);
      } else {
         ?> <br> <div align="center" class="alert alert-danger"><span class="croix" onclick="this.parentElement.style.display='none';">&times;</span>
  <strong>ATTENTION !</strong>&nbsp&nbsp Les mots de passe ne sont pas identiques.
</div> <?php 
      }
   }
?>

<div class="row main">
        <div class="main-login main-center-left">
<h4 align="center" ><strong><font color="DE1417">Édition de mon profil</font></strong></h4><br>

         
         <form  method="post" action=""> 


            <div class="form-group">
              <label for="newpseudo" class="cols-sm-2 control-label"><font color="DE1417">Pseudo</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="newpseudo" id="pseudo" value="<?php echo $user['pseudo']; ?>" required placeholder="Entrez votre nouveau pseudo"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="newmail" class="cols-sm-2 control-label">Email</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                  <input type="email" class="form-control" name="newmail" id="mail" value="<?php echo $user['mail']; ?>" placeholder="Entrez votre mail"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="newmdp" class="cols-sm-2 control-label">Mot de passe</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input type="password" class="form-control" name="newmdp" id="mdp" required placeholder="Entrez votre nouveau mot de passe"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="newmdp2" class="cols-sm-2 control-label">Confirmation Mot de passe</font</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input type="password" class="form-control" name="newmdp2" id="mdp2" required placeholder="Confirmez votre nouveau mot de passe"/>
                </div>
              </div>
            </div>
            

            <div class="form-group ">
              <input id="button" class="btn btn-primary btn-lg btn-block login-button"  type="submit" value ="Mettre à jour mon profil" />

            
  
          
            </div>
            
          </form>

      </div>

   </body>
</html>
<?php   
} else {
  header("location: connexion.php") ;
}
?>
     
