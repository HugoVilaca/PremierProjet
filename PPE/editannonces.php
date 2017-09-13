<?php
$bdd = new PDO('mysql:host=localhost;dbname=ppe', 'root', '');

if(isset($_POST['formulaire'])) {
   $nom_membre = htmlspecialchars($_POST['nom_membre']);
   $sport = htmlspecialchars($_POST['sport']);
   $rdv = htmlspecialchars($_POST['rdv']);
   $lieu = htmlspecialchars($_POST['lieu']);
    $date_annonce = date($_POST['date_annonce']);



    $insertannonce = $bdd->prepare("INSERT INTO annonces(nom_membre, sport, rdv, lieu, date_annonce) VALUES(?, ?, ?, ?, ?)");
    $insertannonce->execute(array($nom_membre, $sport, $rdv, $lieu, $date_annonce));
    header('location: annonces.php');
}
?>