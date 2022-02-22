<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Administrateur</title>
  <link rel="stylesheet" href="style2.css">

</head>
<body>

<button onclick="window.location.href='Admin.php'" class="btnReturn">Accueil</button> </br>

<h1>Sélection dossiers Parcoursup BTS SIO - Rentrée 2019</h1>
<div class=container1>
	<div class="container2d">
		<div>
			<h2>Nouveau compte</h2>
				<form action="ajout.php" method="POST">
							
							<label><b>Nom d'utilisateur:</b></label></br>
							<input type="text" placeholder="Entrer le nom d'utilisateur" name="username_create" required></br></br>

							<label><b>Mot de passe:</b></label></br>
							<input type="password" placeholder="Entrer le mot de passe" name="password_create" required></br></br>
							<input type="radio"  name="type_create" value="secretaire"><label for="type_create">Secrétaire</label>
							<input type="radio"  name="type_create" value="evaluateur"><label for="type_create">évaluateur</label>
							<input type="radio"  name="type_create" value="administrateur"><label for="type_create">Adminitrateur</label>

							<input type="submit" id='submit' value='Créer' >
				</form>
						<?php  if (isset($_GET['mess'])) {
                            $mess = $_GET['mess'];
                            if (1 == $mess) {
                                echo "<p>un nouvel utilisateur a été créé</p>";
                            }
                        } ?>
		</div></br>
		<div>
		<h2>Compte éxistants</h2>

		<table>
		    <thead>
		        <tr>
		            <th colspan="4">Dossiers Acceptés</th>
		        </tr>
		    </thead>
		    <tbody>
		        <tr>
		            <td>identifiant</td>
		            <td>mot de passe</td>
		            <td>Type de compte</td>	
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

$reponse = $bdd->query('SELECT * FROM Utilisateur');
while ($donnees = $reponse->fetch())
{

?>	
			
		          <tr>
		            <td><?php echo $donnees['identifiant'] ?></td>
		            <td><?php echo $donnees['mdp'] ?></td>
		            <td><?php echo $donnees['type_de_compte'] ?></td>
		        </tr>
				<?php
}
?>
		    </tbody>
		</table>
		</div>
    </div>
</div>

</body>
</html>