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
        echo '<h1>CHU de Tours</h1>';
        echo '<h2>Accueil</h2>';
        echo '<header>';
              include("includes/connect.php");
              include("includes/menu.php"); 
        echo '</header>';
    }
    //formulaire de connexion
    else { 
	echo '<section id="principal">';
         echo '<header>';
              include("includes/connect.php");
              include("includes/menu.php"); 
        echo '</header>';
        echo '<main>';
            echo '<div class="helper">';
            echo '<h1>CHU de Tours</h1>';
                echo '<h2>Accueil</h2>';
                        echo '<section id="form">';
                            echo '<form action="connexion.php" method="post">';
                                echo '<div id="loginConnexion">';
                                    echo '<div class="col-xs-4 col-md-4"><label for="login">Login: </label></div>';
                                    echo '<div class="col-xs-5 col-md-5"><input type="text" class="form-control" id="champLogin" placeholder="login" name="login" required></div>';
                                echo '</div>';
                                echo '<div class="error-message"></div></br>';
                                echo '<div id="passwordConnexion">';
                                    echo '<div class="col-xs-4 col-md-4"><label for="password">Mot de passe: </label></div>';
                                    echo '<div class="col-xs-5 col-md-5"><input type="password" class="form-control" placeholder="password" id="champPassword" name="password" required></div>';
                                echo '</div>';
                                echo '<div class="error-message"></div></br>';
                                echo '<div class="col-xs-12 col-md-12"><div class="button">';
                                    echo '<button type="submit" id="envoyerConnexion" class="btn btn-default">Se connecter</button>';
                                echo '</div></div>';
                            echo '</form>';
                        echo '</section>';
            echo '</div>';
        echo '</main>';
    echo '</section>';
        echo '<footer>';
        echo '</footer>';
    }
?>
</section>
    </body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>











