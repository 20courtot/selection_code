<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Évaluateur</title>
  <link rel="stylesheet" href="style2.css">

</head>
<body>  
<button onclick="window.location.href='evaluateur.php'" class="btnReturn">Accueil</button></br>

<h1>Sélection dossiers Parcoursup BTS SIO - Rentrée X </h1>

<form action="grille.php" method="GET" class="formulaire">

<div class="container1"><!-- grande boite qui va contenir tous le formulaire et les boutons --> 

<div class="container2"> <!-- boite moyenne qui va prendre le formlaire sans les boutons pour permettre d'aligner les boites 'infocand' et 'vlrcand' --> 
    <div class="infoCand"><!-- boite pour les informations qu'il va falloir traiter sur les candidats -->
    </br></br>  
        <p>Nom</p>
        <p>Prénom</p>        
        <p>N°candidat</p>
        <p>Bac</p>
        <p>Travail Sérieux</p>
        <p>Absence</p>
        <p id="a">Attitude / comportement</p>
        <p id="b">Étude supérieur</p>
        <p id="c">Avis PP</p>
        <p id="d">Avis Proviseur</p>
        <p id="e">Lettre de motivation</p>
        <p id="f">Remarque(s)</p></br>
        <p id="g">Ajouter des points</p>

    </div>


    <div class="vlrcand"><!-- checkbox et zones de textes pour remplir les infos -->
    <p>
        <input type="text" id="name1" name="name1"/></br></br>
        <input type="text" id="name2" name="name2"/></br></br>
        <input type="text" id="num" name="numcand"/>
    </p>
        <p id="bacalign">
            <input type="radio"  name="serie" value="8"><label for="serie">Série PRO</label>
            <input type="radio"  name="serie" value="12"><label for="serie">Série S/ES</label>
            <input type="radio"  name="serie" value="9"><label for="serie">SérieL</label>
            <input type="radio"  name="serie" value="10"><label for="serie">Série STMG</label>
            <input type="radio"  name="serie" value="5"><label for="serie">autre...</label>
        </p>
        <p>
             <input type="radio"  name="travail" value="1"><label for="travail">oui (+1)</label>
            <input type="radio"  name="travail" value="-1"><label for="travail">non (-1)</label>
        </p>
        <p>
            <input type="radio" name="absence"value="-2"><label for="absence">oui (-2 ou refus)</label>
            <input type="radio" name="absence" value="1"><label for="absence">non (+1)</label>
        </p>
        <p>	
            <input type="radio" name="Attitude" value="0"><label for="Attitude">oui (refus)</label>
            <input type="radio" name="Attitude" value="1"><label for="Attitude">non (+1)</label>
        </p>
        <p>
            <input type="radio" name="etude" value="1"><label for="etude">oui (+1)</label>
            <input type="radio" name="etude" value="0"><label for="etude">non (+0)</label>
        </p>
        <p>
            <input type="radio" name="avisPP" value="2"><label for="avisPP">B (+2)</label>
              <input type="radio" name="avisPP" value="1"><label for="avisPP">AB (+1)</label>
               <input type="radio" name="avisPP" value="-1"><label for="avisPP">insuf (-1)</label>
            <input type="radio" name="avisPP" value="-2"><label for="avisPP">Négatif(-2)</label>
        </p>
        <p>
            <input type="radio" name="Avispro" value="2"><label for="Avispro">B (+2)</label>
              <input type="radio" name="Avispro" value="1"><label for="Avispro">AB (+1)</label>
               <input type="radio" name="Avispro" value="-1"><label for="Avispro">insuf (-1)</label>
               <input type="radio" name="Avispro" value="-2"><label for="Avispro">Négatif(-2)</label>
           </p>
        <p>	
            <input type="radio" name="lettre" value="2"><label for="lettre">B (+2)</label>
              <input type="radio" name="lettre" value="1"><label for="lettre">AB (+1)</label>
               <input type="radio" name="lettre" value="-1"><label for="lettre">insuf (-1)</label>
            <input type="radio" name="lettre" value="-2"><label for="lettre">Négatif(-2)</label>
        </p>
        <textarea  name="rem" rows="5" cols="33"></textarea></br>
        <input type="number"  name="ptsrem"/></br></br>

       

    </br>
    </br>
    <input type="submit" value="valider">
    <?php
                        if (isset($_GET['erreur'])) {
                            $err = $_GET['erreur'];
                            if (1 == $err) {
                                echo "<p style='color:red'>entrez toutes les informations</p>";
                            }
                        }

                        if (isset($_GET['mess'])) {
                            $mess = $_GET['mess'];
                            if (1 == $mess) {
                                echo "<p>un nouveau dossier a été ajouter</p>";
                            }
                        }
                    ?>
    </div>
</div>
</form>
<div class="btns">
    <button onclick="window.location.href='pageAccept.php'"  class="btnAccept" type="button">Dossier acceptés</button>
    <button onclick="window.location.href='pageRefu.php'"  class="btnRef" type="button">Dossier refusés</button>
    </br>
    </br>
</div>
</div>
</body>
</html>