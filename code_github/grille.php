<?php $points = 0;
if ('8' == $_GET['serie']) {
    $points = 8;
} elseif ('12' == $_GET['serie']) {
    $points = 12;
} elseif ('9' == $_GET['serie']) {
    $points = 9;
} elseif ('10' == $_GET['serie']) {
    $points = 10;
} elseif ('5' == $_GET['serie']) {
    $points = 5;
} else {
    header('Location: evaluateur.php?erreur=1');
}

if ('1' == $_GET['travail']) {
    $points = $points + 1;
} elseif ('-1' == $_GET['travail']) {
    $points = $points - 1;
} else {
    header('Location: evaluateur.php?erreur=1');
}

if ('-2' == $_GET['absence']) {
    $points = $points - 2;
} elseif ('1' == $_GET['absence']) {
    $points = $points + 1;
} else {
    header('Location: evaluateur.php?erreur=1');
}

if ('0' == $_GET['Attitude']) {
    $points = $points + 0;
} elseif ('1' == $_GET['Attitude']) {
    $points = $points + 1;
} else {
    header('Location: evaluateur.php?erreur=1');
}

if ('1' == $_GET['etude']) {
    $points = $points + 1;
} elseif ('0' == $_GET['etude']) {
    $points = $points + 0;
} else {
    header('Location: evaluateur.php?erreur=1');
}

if ('2' == $_GET['avisPP']) {
    $points = $points + 2;
} elseif ('1' == $_GET['avisPP']) {
    $points = $points + 1;
} elseif ('-1' == $_GET['avisPP']) {
    $points = $points - 1;
} elseif ('-2' == $_GET['avisPP']) {
    $points = $points - 2;
} else {
    header('Location: evaluateur.php?erreur=1');
}

if ('2' == $_GET['Avispro']) {
    $points = $points + 2;
} elseif ('1' == $_GET['Avispro']) {
    $points = $points + 1;
} elseif ('-1' == $_GET['Avispro']) {
    $points = $points - 1;
} elseif ('-2' == $_GET['Avispro']) {
    $points = $points - 2;
} else {
    header('Location: evaluateur.php?erreur=1');
}

if ('2' == $_GET['lettre']) {
    $points = $points + 2;
} elseif ('1' == $_GET['lettre']) {
    $points = $points + 1;
} elseif ('-1' == $_GET['lettre']) {
    $points = $points - 1;
} elseif ('2' == $_GET['lettre']) {
    $points = $points - 2;
} else {
    header('Location: evaluateur.php?erreur=1');
}
$points = $points + $_GET[ptsrem];
echo $points;
?>


<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=Selection;charset=utf8', 'root', 'root');
} catch (Exception $e) {
    exit('Erreur : '.$e->getMessage());
}

$req = $bdd->prepare('INSERT INTO Grille(numcand,point_bac, point_travail_serieux, point_absence, point_attitude,point_etude_superieure,point_avis_PP,point_avis_proviseur,point_lettre_motivation,remarque,point_remarque,total_point) VALUES(:numcand, :point_bac, :point_travail_serieux, :point_absence, :point_attitude, :point_etude_superieure, :point_avis_PP, :point_avis_proviseur, :point_lettre_motivation, :remarque, :point_remarque, :total_point)');
$req->execute([
    'numcand' => $_GET['numcand'],
    'point_bac' => $_GET['serie'],
    'point_travail_serieux' => $_GET['travail'],
    'point_absence' => $_GET['absence'],
    'point_attitude' => $_GET['Attitude'],
    'point_etude_superieure' => $_GET['etude'],
    'point_avis_PP' => $_GET['avisPP'],
    'point_avis_proviseur' => $_GET['Avispro'],
    'point_lettre_motivation' => $_GET['lettre'],
    'remarque' => $_GET['rem'],
    'point_remarque' => $_GET['ptsrem'],
    'total_point' => $points,
    ]);
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Sélection dossiers</title>
    <link rel="stylesheet" href="style2.css">
    <meta name="viewport" content="width=device-width">
    <!-- demander au code de prendre en compte la taille de l'écran de l'utilsateur pour appliquer ou non les changement dans le CSS -->

</head>

<body>
    <h1>Sélection dossiers Parcoursup BTS SIO - Rentrée X </h1>

    <div class="container1">
        <div class="container2c">
            <div>
                <form action="grille2.php" method="GET" class="formulaire">
                    <h2> Le total des points est de <?php echo $points; ?>
                    </h2></br>
                    <p>confirmer le numéro du candidat:</p>
                    <input type="number" id="num" name="numcand" />
                    <p> Le dossier est donc:</p></br>


                    <input type="radio" name="statut_dossier" value="accepte"><label
                        for="statut_dossier">Accepté</label>
                    <input type="radio" name="statut_dossier" value="refuse"><label for="statut_dossier">Refusé</label>
                    <input type="submit" value="valider">
                </form>
            </div>
        </div>
    </div>
</body>

</html>