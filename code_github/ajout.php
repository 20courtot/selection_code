<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=Selection;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


$req = $bdd->prepare('INSERT INTO Utilisateur(identifiant,mdp,type_de_compte) VALUES(:identifiant, :mdp, :type_de_compte)');
$req->execute(array(
	'identifiant' => $_POST['username_create'],
	'mdp' => $_POST['password_create'],
	'type_de_compte' => $_POST['type_create'],
    ));
?>

<?php
header('Location: admin.php?mess=1');
$reponse->closeCursor(); // Termine le traitement de la requête

?>

