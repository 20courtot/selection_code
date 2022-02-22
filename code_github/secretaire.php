<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Secrétaire</title>
  <link rel="stylesheet" href="style2.css">

</head>
<body>
<button onclick="window.location.href='secretaire.php'" class="btnReturn">Accueil</button></br>
<h1>Sélection dossiers Parcoursup BTS SIO - Rentrée X </h1>

<div class=container1>
	<div class="container2c" >
	<table>
		    <thead>
		        <tr>
		            <th colspan="4">Dossiers Acceptés</th>
		        </tr>
		    </thead>
		    <tbody>
		        <tr>
		            <td>Numéro candidat</td>
		            <td>Total de points</td>
		            <td>remarque</td>	
		        </tr>
<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=Selection;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT numcand,total_point,remarque FROM Grille WHERE statut_dossier=\'accepte\'');
while ($donnees = $reponse->fetch())
{

?>	
			
		          <tr>
		            <td><?php echo $donnees['numcand'] ?></td>
		            <td><?php echo $donnees['total_point'] ?></td>
		            <td><?php echo $donnees['remarque'] ?></td>
		        </tr>
				<?php
}
?>
		    </tbody>
		</table>
	</div>
</div>
	</div>
</div>
</body>
</html>
