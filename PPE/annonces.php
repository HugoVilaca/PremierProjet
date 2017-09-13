<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=ppe', 'root', '');

$page='annonces';

//Selection des annonces
$rep= $bdd->query('SELECT * FROM annonces ORDER BY date_annonce desc');
$annonces = $rep->fetchAll();

?>
<!DOCTYPE html>
<html lang="fr">
  <head>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href = "css/bootstrap.min.css" rel="stylesheet">
<link href = "css/styles.css" rel= "stylesheet">
    <meta charset="utf-8" />
    <link rel="stylesheet" href="m2lcss.css" />
</head>
<?php include "menu.php"; ?>
<body>
  
    <div id="coeur">
  <div id="contenu">
<div class="container-fluid">
    <div class="row">
        <div class="header">
            
           
                <h3>Annonces</h3>
            </div>
        </div>
    </div>
</div>


<?php

foreach ($annonces as $annonces1) {
    echo '
<div class="container-fluid">
    <div class="row">
        <div class="annonce-content col-xs-10 col-xs-offset-1" data-aos="fade-right" data-aos-duration="1500">
            <div class="col-sm-6 left">
                <ul>
                    <li class="list-group-item list-group-item-info">Sport :
                        ' . $annonces1['sport'] . '
                    </li>
                    <li class="list-group-item list-group-item-info">
                        Rendez-vous à : ' . $annonces1['rdv'] . '
                    </li class="list-group-item list-group-item-info">
                    <li class="list-group-item list-group-item-info">
                        Lieu : ' . $annonces1['lieu'] . '
                    </li>
                </ul>
            </div>
            <div class="col-sm-6 right">
                
                    <li class="list-group-item list-group-item-warning">
                        Par : ' . $annonces1['nom_membre'] . '
                    </li>
                     <li class="list-group-item list-group-item-warning">
                        Le : ' . $annonces1['date_annonce'] . '
                    </li>
                    <li class="list-group-item list-group-item-warning">
                        Publié sur le site de la M2L
                    </li>
                    
                   
                
            </div>
        </div>
        
    </div>
</div>
<br /> ';

} 
?>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js">
</script>

<script src="https://use.fontawesome.com/ed5b820ac0.js"></script>

<div align="center"><a href="formulaireannonces.php"><button  type="button"  class="btn btn-info">Poster une annonce</button></a></div>
<br /> 
<p><a href="annonces.php">Haut de la page</a></p>
 
    
    <p id="footer">Site de la M2L | Tous droits réservés</p>
 
  </body>
</html>