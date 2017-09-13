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
           
} else {

   echo "ERREUR";
}
?>