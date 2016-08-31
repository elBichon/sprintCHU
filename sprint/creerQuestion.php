<?php session_start();
    ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
            <title>rediger les questions</title>
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
<section id="principal">
<?php
    
    //si l utilisateur est deja connecte
    if (isset($_SESSION['login'])) {
        $i = htmlspecialchars($_POST['nbQuestions']);
        $nom = htmlspecialchars($_POST['nom']);
        $type = htmlspecialchars($_POST['type']);
        $compteur = 0;

        require 'includes/connect.php';
        require 'includes/menuConnexion.php';
        echo '<p><a href="index.php">Accueil</a>--><a href="connexion.php">connexion</a>--><a href="creerFormulaire.php">creer</a>-->rediger</p>';
        echo '<h1>Proposer Les Questions</h1>';
        echo '</br>';
        echo '<section id="form">';
                while ($compteur < $i){
                     echo '<form action="creerQuestionFin.php" method="post">';
                    echo '<div id="formulaire">';
                    $compteur = $compteur+1;
                    echo '<div class="col-xs-4 col-md-4">';
                    echo $compteur;
                    echo ': ';
                    echo '</div>';
                        echo '<div class="col-xs-5 col-md-5"><input type="text" class="form-control" placeholder="question" id="question" name="question'.$compteur.'" required></div>';
                        echo'</br>';
                    echo '</div>';
                     
                echo '<input type="hidden" name="compteur" value= "'.$i.'">';
                echo '<input type="hidden" name="nom" value= "'.$nom.'">';
                echo '<input type="hidden" name="type" value="'.$type.'">';

        }
         echo '<div class="col-xs-12 col-md-12"><button type="submit" id="envoyerConnexion" class="btn btn-default" name="">Creer</button></div>';
                echo '</form>';
    echo '</section>';
    }
    else{
        echo 'il y a eu un probleme';
    }
    ?>
</section>
    </body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>

