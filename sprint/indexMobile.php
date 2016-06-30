<?php session_start();
    ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
            <title>accueil</title>
            <link rel="stylesheet" href="css/style.css" />
            <link rel="stylesheet" href="css/menu.css" />
            <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
            <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
            <script src="js/verificationLogin.js"></script>

        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!--[if IE 6 ]><body class="ie6 old_ie"><![endif]-->
        <!--[if IE 7 ]><body class="ie7 old_ie"><![endif]-->
        <!--[if IE 8 ]><body class="ie8"><![endif]-->
        <!--[if IE 9 ]><body class="ie9"><![endif]-->
        <!--[if !IE]><!--><body><!--<![endif]-->
    </head>

    <body>
<header>
</header>

<?php
    if (isset($_SESSION['login'])) {
        echo 'Il y a eu un problème de connexion, vous ne devriez pas voir ceci, veuillez vous rendre sur <a href="deconnexion.php">cette page</a> ';
    }
    else {
            require 'includes/connect.php';
                echo '<h1>CONNEXION</h1>';
                echo '<h2></h2>';
                    echo '<section id="connexion">';
                        echo '<form action="accueil.php" method="post">';
                            echo '<div id="loginConnexion">';
                                echo '<label for="login">Login: </label>';
                                echo '<input type="text" class="form-control" id="champLogin" placeholder="login" name="login" required>';
                            echo '</div>';
                                echo '<div class="error-message"></div></br>';
                            echo '<div id="passwordConnexion">';
                                echo '<label for="password">Mot de passe: </label>';
                                echo '<input type="password" class="form-control" placeholder="password" id="champPassword" name="password" required>';
                            echo '</div>';
                                echo '<div class="error-message"></div></br>';
                            echo '<div class="button">';
                                echo '<button type="submit" id="envoyerConnexion" class="btn btn-default">Se connecter</button>';
                            echo '</div>';
                        echo '</form>';
                echo '</section>';
        
    }
    ?>
<footer>
</footer>
    </body>
</html>



