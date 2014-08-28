<?php
 include 'connexion.php';
?>
<!DOCTYPE html PUBLIC >
<html lang="fr">
    <head>
        <title>Mon ch'ti chat</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
        
    </head>
    
    <body>
    
        <form action="cible.php" method="post" enctype="multipart/form-data">
            <p>
            <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" /><br />
            <label for="message">Message</label> :  <input type="text" name="message" id="message" /><br />

            <input type="submit" value="Envoyer" />
        	</p>
      </form>
       <?php
       

        //On affiche le pseudo et on ordonne les 20 premiers message de la table tchat par ordre decroissant
      $requete = $bdd->query('SELECT Pseudo,Message,date_ajout FROM tchat ORDER BY ID DESC LIMIT 0, 20');
      //affichage de chaque message
              while ($donnees = $requete->fetch(PDO::FETCH_ASSOC))
        { ?>
    
            <p><?php echo($donnees['date_ajout'])?><strong> <?php echo htmlspecialchars($donnees['Pseudo']) ?> </strong> : <?php echo htmlspecialchars($donnees['Message']) ?> </p>
      <?php  
        }
      ?>
  
    </body>
</html>