<!DOCTYPE html>
<html lang="fr">
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href = "css/bootstrap.min.css" rel="stylesheet">
<link href = "css/styles.css" rel= "stylesheet">
    <meta charset="utf-8" />
    <link rel="stylesheet" href="m2lcss.css" />
    <?php include("menu.php") ?>
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
if ($variable==5) 
{ ?>
<div align="center" class="alert alert-info">
  <span class="croix" onclick="this.parentElement.style.display='none';">&times;</span> <strong>Déconnexion effectuée avec succès !&nbsp&nbsp&nbsp</strong><a class="alert-link"></a>
</div> 
<?php } 
?>
    <h3>Bienvenue sur le site de la maison des ligues</h3>
    <p>La Maison des Ligues de Lorraine (M2L) a pour mission de fournir des espaces et des services aux différentes ligues sportives régionales de Lorraine et à d’autres structures hébergées. La M2L est une structure financée par le Conseil Régional de Lorraine dont l'administration est déléguée au Comité Régional Olympique et Sportif de Lorraine (CROSL). Installée depuis 2003 dans la banlieue Nancéienne, la M2L accueille l'ensemble du mouvement sportif Lorrain qui représente près de 6 500 clubs, plus de 525 000 licenciés et près de 50 000 bénévoles. </p>
    
<p><img src="img/lorraine.png" id="lorraine"></p>

<aside>
<p></p>
</aside>
      
      <h3>Nos locaux</h3>
      
      <p>Le site se compose de quatre bâtiments, dont deux dotés de quatre étages et donc de 5 niveaux (les bâtiments A et C) et deux de plain-pied (les bâtiments B et D) dotés d’un seul rez-de-chaussée. Les bâtiments C et D sont neufs. Les bâtiments A et B datent d'une quinzaine d'années. 
      Les étages des bâtiments A et C hébergent les bureaux des ligues locataires et le rez-de-chaussée des quatre bâtiments héberge des espaces mutualisés : un amphithéâtre de 200 places avec une régie, 8 salles de réunion de 12 à 50 places, un hall d'accueil, une salle de convivialité et son office traiteur, ainsi qu'une salle de formation multimédia dotée de 24 postes. On y trouve également la partie « accueil » des neuf bureaux de l'administration de la M2L. L’autre partie se trouve au premier étage du bâtiment C. Différents locaux de service (archives, stockage local d'entretien ...) se trouvent en sous-sol. 
      En fonction de leur taille, les 24 structures hébergées occupent un ou plusieurs bureaux. Au total, la M2L offre 80 bureaux. A chaque étage des bâtiments de bureaux se trouve une petite salle de réunion que les ligues utilisent sans réservation. L'ensemble des autres salles ressources sont accessibles sur réservation, en journée comme en soirée</p>
 <p><a href="index.php">Haut de la page</a></p>
  </div>
    
    <p id="footer">Site de la M2L | Tous droits réservés</p>
  </div>
  </body>
</html>