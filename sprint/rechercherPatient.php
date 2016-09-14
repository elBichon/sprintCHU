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
    <section id="principal">
<?php
    //si l utilisateur est deja connecte
    if (isset($_SESSION['login'])) {
        require 'includes/menuConnexion.php';
        require 'includes/connect.php';
                echo '<p><a href="index.php">Accueil</a>--><a href="patient.php">patient</a>-->rechercher</p>';
                echo '<h1>Rechercher un patient</h1>';
                    echo '<section id="recherche">';
                        echo '<form method="post" action="rechercherPatientSuite.php">';
                             echo '<div class="col-xs-5 col-md-5"><label for="login">numero: </label></div>';
                                 echo '<div class="col-xs-7 col-md-7"><input type="text" class="form-control" id="numero" placeholder="numero" name="numero" required></div>';
                            echo '</br>';
                            echo '<div class="bouton"><input type="submit" class="text" value="rechercher"/></div>';
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