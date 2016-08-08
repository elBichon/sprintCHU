<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
            <title>choix Formulaire</title>
               <link rel="stylesheet" href="css/style.css" />
            <link rel="stylesheet" href="css/menu.css" />
            <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <script src="js/verificationLogin.js"></script>

                <!--[if lt IE 9]>
                <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
                <![endif]-->
                <!--[if IE 6 ]><body class="ie6 old_ie"><![endif]-->
                <!--[if IE 7 ]><body class="ie7 old_ie"><![endif]-->
                <!--[if IE 8 ]><body class="ie8"><![endif]-->
                <!--[if IE 9 ]><body class="ie9"><![endif]-->
                <!--[if !IE]><!--><body><!--<![endif]-->
                <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    </head>

    <body>
<?php
    require 'includes/connect.php';
    echo '<header>';
    require 'includes/menu.php';
    echo '</header>';
    
    //récupération des variables d inscription
    
    $i = 0;
    $nomRecu = htmlspecialchars($_POST['champNom']);
    $prenomRecu = htmlspecialchars($_POST['champPrenom']);
    $numero = htmlspecialchars($_POST['champNumero']);
    $age = htmlspecialchars($_POST['age']);
    $nom = strtolower($nomRecu);
    $prenom = strtolower($prenomRecu);
    $sexe = htmlspecialchars($_POST['passage']);
    $passage = htmlspecialchars($_POST['sexe']);
    
    if (empty($nom) || empty($prenom)|| empty($numero)){
        $erreur = "Des champs sont vides";
        $i++;
        echo $erreur;
        echo "</br>";
    }
    
    if (!preg_match("#[a-z]#", $nom) || empty($nom)){
        $erreur_nom = "Votre nom n'a pas un format valide";
        $i++;
        echo $erreur_nom;
        echo "</br>";
    }
    
    if (!preg_match("#[a-z]#", $prenom) || empty($nom)){
        $erreur_prenom = "Votre prenom n'a pas un format valide";
        $i++;
        echo $erreur_prenom;
        echo "</br>";
    }
    
    if (!preg_match("#[0-9]#", $numero) || empty($numero)){
        $erreur_numero = "Votre numero n'a pas un format valide";
        $i++;
        echo $erreur_numero;
        echo "</br>";
    }
    
    if (!preg_match("#[a-z]#", $sexe) || empty($sexe)){
        $erreur_sexe = "Votre sexe n'a pas un format valide";
        $i++;
        echo $erreur_sexe;
        echo "</br>";
    }
    
    if (!preg_match("#[a-z]#", $passage) || empty($passage)){
        $erreur_passage = "Votre numero de passage n'a pas un format valide";
        $i++;
        echo $erreur_passage;
        echo "</br>";
    }
    
    if ($i!=0){
        echo "il y a eu un problème. Rendez-vous <a href='index.php'>ici</a> pour réessayer s'il vous plaît";
    }
    
    else{//rajouter une boucle pour faire la sélection sur les qId et envoyer plusieurs choses via formulaire
        echo '<form method="post" action="questions.php">';
        $reponse = $bdd->query("SELECT DISTINCT * FROM question ORDER BY id");
        echo '<div id="choixForm">';
        echo '<label for="form">Choisissez les formulaires</label>';
        echo '</br>';
        echo '</br>';
        $i = 0;
        while ($donnees = $reponse->fetch())
        {?>

            <input type="checkbox" name="formulaire" value="<?php echo $donnees['nomFormulaire'];?>"><?php echo $donnees['nomFormulaire']; ?>
            <?php
            echo '</br>';
            echo '</div>';
      }?>
            <input type="hidden" name="nom" value=<?php echo $nom; ?>>
            <input type="hidden" name="prenom" value=<?php echo $prenom; ?>>
            <input type="hidden" name="numero" value=<?php echo $numero; ?>>
            <input type="hidden" name="sexe" value=<?php echo $sexe; ?>>
            <input type="hidden" name="passage" value=<?php echo $passage; ?>>
            <input type="hidden" name="age" value=<?php echo $age; ?>>
            <?php
            echo '<div class="bouton"><input type="submit" class="text" value="aller"/></div>';
        echo '</form>';
    }
?>

    </body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
