

<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=Selection;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}



$req = $bdd->prepare('UPDATE Grille SET statut_dossier = :statut_dossier WHERE numcand = :numcand');
$req->execute(array(
	'statut_dossier' => $_POST['statut_dossier'],
	'numcand' => $_POST['numcand'],
	));


    header('Location: evaluateur.php?mess=1');
?>