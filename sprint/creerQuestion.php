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
            echo '<form action="creerQuestionFin.php" method="post">';
                while ($compteur < $i){
                    //ajouter une variable $qId qui est la concaténation du nom et d'un numéro, il servira de repère lors de l'insertion multiple
                    echo '<div id="formulaire">';
                    $ordre = $compteur+1;
                    echo $ordre;
                    echo ': ';
                        echo '<input type="text" class="form-control" placeholder="question" id="question" name="question" required>';
                        echo'</br>';
                    echo '</div>';
                    $compteur = $compteur+1;
                    
                }

                echo '<input type="hidden" name="nom" value= "'.$nom.'">';
                echo '<input type="hidden" name="type" value="'.$type.'">';
                echo '<input type="hidden" name="qId" value="'.$qId.'">';
                
                echo '<button type="submit" id="envoyerConnexion" class="btn btn-default">Creer</button>';
            echo '</form>';
    echo '</section>';
    }
    else{
        echo 'il y a eu un probleme';
    }
    ?>
    </body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>

