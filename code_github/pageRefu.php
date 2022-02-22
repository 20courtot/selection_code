<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Sélection dossiers</title>
  <link rel="stylesheet" href="style2.css">
  <meta name="viewport" content="width=device-width">

</head>
<body>
<button onclick="window.location.href='evaluateur.php'" class="btnReturn">Accueil</button></br>


<h1>Sélection dossiers Parcoursup BTS SIO - Rentrée 2019</h1>		

<div class=container1>
	<div class="container2c" >
		<table>
		    <thead>
		        <tr>
		            <th colspan="4">Dossiers Refusés</th>
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

$reponse = $bdd->query('SELECT numcand,total_point,remarque FROM Grille WHERE statut_dossier=\'refuse\'');
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
<div class="btnsb">
		<button onclick="window.location.href='pageAccept.php'" class="btnAccept" type="button">Dossier accepté</button>
		<button onclick="window.location.href='pageRefu.php'" class="btnRef" type="button">Dossier refusé</button>

</div>
</body>
</html>