<?php session_start();
    ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
            <title>suite voir un formulaire</title>
            <link rel="stylesheet" href="css/style.css" />
            <link rel="stylesheet" href="css/menu.css" />
            <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
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
    //si l utilisateur est deja connecte
    if (isset($_SESSION['login'])) {
        require 'includes/menuConnexion.php';
        require 'includes/connect.php';
                echo '<p><a href="index.php">Accueil</a>--><a href="patient.php">patient</a>-->rechercher</p>';
                echo '<h1>Rechercher un patient</h1>';
                    echo '<section id="recherche">';
                        echo '<form method="post" action="rechercherPatientSuite.php">';
                            echo 'nom: ';
                            echo '<select name="nom" id="nom">';
                                $reponse = $bdd->query('SELECT nom FROM reponse');
                                    while ($donnees = $reponse->fetch()){?>
                                        <option value = "<?php echo $donnees['nom']; ?>"> <?php echo $donnees['nom']; ?></option>
                                <?php }
                            echo '</select>';
                                    echo '</br>';
                            echo 'prenom: ';
                            echo '<select name="prenom" id="prenom">';
                                $reponse = $bdd->query('SELECT prenom FROM reponse');
                                    while ($donnees = $reponse->fetch()){?>
                                        <option value = "<?php echo $donnees['prenom']; ?>"> <?php echo $donnees['prenom']; ?></option>
                                <?php }
                            echo '</select>';
                            echo '<div class="bouton"><input type="submit" class="text" value="rechercher"/></div>';
                        echo '</form>';
                    echo '</section>';
    }
?>
    </body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>