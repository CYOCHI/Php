<?php
include 'connexion.php';

if($message=isset($_POST['message'])AND $pseudo=isset($_POST['pseudo'])){

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO tchat (pseudo, message, date_ajout) VALUES(?,?, NOW())');

$req->execute(array($_POST['pseudo'], $_POST['message']));

// Redirection du visiteur vers la page du minichat
header('Location: mini_tchat.php');
}
?>