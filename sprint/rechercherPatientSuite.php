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
                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                echo '<p><a href="index.php">Accueil</a>--><a href="patient.php">patient</a>--><a href="rechercherPatient.php">rechercher</a>-->voir</p>';
                echo '<h1>Votre Patient</h1>';
                    echo '<section id="voir">';
                        $request = $bdd->query('SELECT DISTINCT * FROM reponse WHERE nom = "'.$nom.'" AND prenom = "'.$prenom.'" GROUP BY passage ORDER BY id DESC');
                        while ($donnees = $request->fetch(PDO::FETCH_ASSOC))
                        { 
                            echo $donnees['nom'];
                            echo '--';
                            echo $donnees['prenom'];
                            echo '--';
                            echo $donnees['numero'];
                            echo '--';
                            echo $donnees['sexe'];
                            echo '--';
                            echo $donnees['age'];
                            echo '--';
                            echo $donnees['date'];
                            echo '--';
                            echo $donnees['passage'];
                            echo '</br>';
                         
                        }
                    $request->closeCursor();
                    echo '</section>';
    }
?>
    </body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>