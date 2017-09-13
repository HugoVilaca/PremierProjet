
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


    <br/>

    <section id="gauche"> 
<div class="row main">
        <div class="main-login main-center-left">
<h4 align="center" ><strong><font color="DE1417">Postez votre annonce sportive :</font></strong></h4><a href="formulaire.php"> Pas encore de compte ? Créez en un ici !</a><br><br>


   
<form  method="post" action="editannonces.php">
            
         

            <div class="form-group">
              <label  class="cols-sm-2 control-label"><font color="DE1417">Sport :</font></label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-soccer-ball-o" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="sport"  required placeholder="Football etc..."/>
                </div>
              </div>
            </div>

             <div class="form-group">
              <label text-col class="cols-sm-2 control-label"><font color="DE1417">Horaire :</font></font></label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-time" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="rdv"  required placeholder="Rendez-vous à..."  />
                </div>
              </div>
            </div>


             <div class="form-group">
              <label text-col class="cols-sm-2 control-label"><font color="DE1417">Lieu de l'évenement :</font></font></label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="lieu"  required placeholder="Paris..."  />
                </div>
              </div>
            </div>

               <div class="form-group">
              <label class="cols-sm-2 control-label"><font color="DE1417">Votre nom :</font></font></label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input type="text" id="nom_membre" class="form-control" name="nom_membre"  required placeholder="Entrez votre nom"  />
                </div>
              </div>
            </div>


<div class="form-group">
              <label class="cols-sm-2 control-label"><font color="DE1417">Date :</font></font></label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input type="date" id="date_annonce" class="form-control" name="date_annonce"  required placeholder="Entrez votre nom"  />
                </div>
              </div>
            </div>
            
           
             <font color="DE1417">Niveau :</font></font>
              <div class="cols-sm-10">
                <font color="DE1417">Niveau :</font></font>
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                 <input    type="checkbox" id="date_annonce" class="form-control" name="date_annonce"   />
                    <input type="checkbox" id="date_annonce" class="form-control" name="date_annonce"    />
                      <input type="checkbox" id="date_annonce" class="form-control" name="date_annonce"    />
                
              
          

             
 <div class="form-group ">
              <input id="button" class="btn btn-primary btn-lg btn-block login-button"  name="formulaire" type="submit" value ="Poster" />
      </div>
            </form>
        
             <img src="img/logo.png" width="200" height="100"></div>
</section>

      
      
    </div>
<p><a href="formulaireannonces.php">Haut de la page</a></p>
 
    
    <p id="footer">Site de la M2L | Tous droits réservés</p>

   </body> 