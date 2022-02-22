<!DOCTYPE html>
<html lang="fr"> 
<head>
  <meta charset="utf-8">
  <title>Sélection dossiers</title>
  <link rel="stylesheet" href="style2.css">
  <meta name="viewport" content="width=device-width"><!-- demander au code de prendre en compte la taille de l'écran de l'utilsateur pour appliquer ou non les changement dans le CSS -->

</head>

<body>
<h1>Sélection dossiers Parcoursup BTS SIO - Rentrée X </h1>

    <div class="container1">
        <div class ="container2c">
            <div class="portail">
            
                <form action="verification.php" method="POST">
                    <h2>connexion</h2>
                    <label><b>Nom d'utilisateur:</b></label></br>
                    <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required></br></br>

                    <label><b>Mot de passe:</b></label></br>
                    <input type="password" placeholder="Entrer le mot de passe" name="password" required></br></br>

                    <input type="submit" id='submit' value='Connexion' >
                    <p>les identifiants sont:</br>secrétaire->123</br>admin->1234</br>évaluateur -> 12345</p>
                    <?php
                        if (isset($_GET['erreur'])) {
                            $err = $_GET['erreur'];
                            if (1 == $err) {
                                echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                            }
                        }
                    ?>
            </div>
        </div>
    </div>
    <div class="tabverif">
        

    </div>
</body>
</html>