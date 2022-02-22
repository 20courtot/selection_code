
<?php 
echo $_POST['serie'];
echo $_POST['travail'];
$points = 0;
if ($_POST['serie'] == '8'){
	$points = 8; 
}
elseif($_POST['serie'] == '12'){
	$points = 12;
}
elseif($_POST['serie'] == '9'){
	$points = 9;
}
elseif($_POST['serie'] == '10'){
	$points = 10;
}
elseif($_POST['serie'] == '5'){
	$points = 5;
}
else {
    header('Location: c.php?erreur=1');
}

if($_POST['travail'] == '1'){
	$points = $points + 1;
}
elseif($_POST['travail'] == '-1'){
	$points = $points - 1;
}
else {
    header('Location: c.php?erreur=1');
}

if($_POST['absence'] == '-2'){
	$points = $points - 2;
}
elseif($_POST['absence'] == '1'){
	$points = $points + 1;
}
else {
    header('Location: c.php?erreur=1');
}

if($_POST['Attitude'] == '0'){
	$points = $points + 0;
}
elseif($_POST['Attitude'] == '1'){
	$points = $points + 1;
}
else {
    header('Location: c.php?erreur=1');
}

if($_POST['etude'] == '1'){
	$points = $points + 1;
}
elseif($_POST['etude'] == '0'){
	$points = $points + 0;
}
else {
    header('Location: c.php?erreur=1');
}

if($_POST['avisPP'] == '2'){
	$points = $points + 2;
}
elseif($_POST['avisPP'] == '1'){
	$points = $points + 1;
}
elseif($_POST['avisPP'] == '-1'){
	$points = $points - 1;
}
elseif($_POST['avisPP'] == '-2'){
	$points = $points - 2;
}
else {
    header('Location: c.php?erreur=1');
}

if($_POST['Avispro'] == '2'){
	$points = $points + 2;
}
elseif($_POST['Avispro'] == '1'){
	$points = $points + 1;
}
elseif($_POST['Avispro'] == '-1'){
	$points = $points - 1;
}
elseif($_POST['Avispro'] == '-2'){
	$points = $points - 2;
}
else {
    header('Location: c.php?erreur=1');
}

if($_POST['lettre'] == '2'){
	$points = $points + 2;
}
elseif($_POST['lettre'] == '1'){
	$points = $points + 1;
}
elseif($_POST['lettre'] == '-1'){
	$points = $points - 1;
}
elseif($_POST['lettre'] == '2'){
	$points = $points - 2;
}
else {
    header('Location: c.php?erreur=1');
}
$points = $points + $_POST[ptsrem];
echo ($points)
?>


<table>
		    <thead>
		        <tr>
		            <th colspan="4">Dossiers Acceptés</th>
		        </tr>
		    </thead>
		    <tbody>
		        <tr>
		            <td>Nom</td>
		            <td>Prénom</td>
		            <td>n°de dossier</td>
		            <td></td>
		            
		        </tr>
		          <tr>
		            <td><?php echo htmlspecialchars($_POST['name1']) ?> </td>
		            <td><?php echo htmlspecialchars($_POST['name2']) ?></td>
		            <td>1</td>
		            <td><?php echo $points ?></td>
		        </tr>

		    </tbody>
		</table>