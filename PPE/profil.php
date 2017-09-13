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

echo "";
if(isset($_GET['id']) AND $_GET['id'] > 0) {
   $getid = intval($_GET['id']);
   $requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();
?>

      <div align="center">
         <h3>Profil de <?php echo $userinfo['nom']; ?></h3>
         <h4>
<img height="60"  width="60" src="img/avatar.png">
         <br />
<br />
         Pseudo = <?php echo $userinfo['pseudo']; ?>
         <br />
         Mail = <?php echo $userinfo['mail']; ?>
         <br />
         <?php
         if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
         ?>
         <br />
         <a href="editionprofil.php">Editer mon profil</a><br>
         <a href="deconnexion.php">Se déconnecter</a></h4>
         <?php
         }
         ?>
      </div>
   </body>
</html>
<?php   
} else {
   echo "dfghjk";
}
?>