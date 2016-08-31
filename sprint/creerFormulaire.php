<?php session_start();
    ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
            <title>editer un formulaire</title>
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
        require 'includes/menuConnexion.php';
        echo '<p><a href="index.php">Accueil</a>--><a href="connexion.php">connexion</a>-->creer</p>';
        echo '<h1>Creer un formulaire</h1>';
        echo '</br>';
        echo '<section id="form">';
            echo '<form action="creerQuestion.php" method="post">';
                echo '<div id="formulaire">';
                    echo '<div class="col-xs-4 col-md-4"><label for="login">nom: </label></div>';
                        echo '<div class="col-xs-5 col-md-5"><input type="text" class="form-control" id="nom" placeholder="nom" name="nom" required></div>';
                echo '</div>';
                echo '<div class="error-message"></div></br>';
                echo '<div id="nbQuestions">';
                    echo '<div class="col-xs-4 col-md-4"><label for="nbQuestions">Nombre De Questions: </label></div>';
                    echo '<div class="col-xs-5 col-md-5"><input type="text" class="form-control" placeholder="nbQuestions" id="nbQuestions" name="nbQuestions" required></div>';
                echo '</div>';
                echo '<div class="error-message"></div></br>';
                echo '<div id="type">';
                    echo '<div class="col-xs-4 col-md-4"><label for="text">Type: </label></div>';
                        echo '<div class="col-xs-5 col-md-5"><select name="type" size="1">';
                            echo '<option>reponse graduee 0-1</option>';
                            echo '<option>reponse graduee 0-2</option>';
                            echo '<option>reponse graduee 0-3</option>';
                            echo '<option>reponse graduee 0-4</option>';
                            echo '<option>reponse graduee 0-5</option>';
                            echo '<option>reponse graduee 0-6</option>';
                            echo '<option>reponse graduee 0-7</option>';
                            echo '<option>reponse graduee 0-8</option>';
                            echo '<option>reponse graduee 0-9</option>';
                        echo '</select></div>';
                echo '</div>';
                echo '</br>';
                echo '<div class="col-xs-12 col-md-12"><div class="button">';
                    echo '<button type="submit" id="envoyerConnexion" class="btn btn-default">Creer</button>';
                echo '</div></div>';
            echo '</form>';
        echo '</section>';
    }
      else{
        echo 'il y a eu un probleme';
    }
    ?>
    </body>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>

