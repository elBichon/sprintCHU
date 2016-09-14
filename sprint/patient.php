<?php session_start();
    ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
            <title>patient</title>
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
   <?php  if (isset($_SESSION['login'])) {
       echo '<section id="principal">';
         echo '<header>';
              include("includes/connect.php");
              include("includes/menu.php"); 
        echo '</header>';
        echo '<main>';
             echo '<div class="helper">';
              echo '<p><a href="index.php">Accueil</a>--><a href="connexion.php">connexion</a>-->patient</p>';
                 echo '<h2>Patient</h2>';

                        echo '<section id="form">';
                             echo '<form action="choixFormulaire.php" method="post">';
                                 echo '<div id="nom">';
                                     echo '<div class="col-xs-4 col-md-4"><label for="text">Nom: </label></div>';
                                     echo '<div class="col-xs-5 col-md-5"><input type="nom" class="form-control" placeholder="nom" id="champNom" name="champNom" required></div>';
                                 echo '</div>';
                                echo '<div class="error-message"></div></br>';
                                 echo '<div id="prenom">';
                                    echo ' <div class="col-xs-4 col-md-4"><label for="text">Prenom: </label></div>';
                                    echo '<div class="col-xs-5 col-md-5"><input type="prenom" class="form-control" placeholder="prenom" id="champPrenom" name="champPrenom" required></div>';
                                echo '</div>';
                               echo ' <div class="error-message"></div></br>';
                              echo '  <div id="numero">';
                                   echo ' <div class="col-xs-4 col-md-4"><label for="text">Numero: </label></div>';
                                    echo '<div class="col-xs-5 col-md-5"><input type="text" class="form-control" placeholder="numero" id="champNumero" name="champNumero" required></div>';
                               echo '</div>';
                                echo '<div class="error-message"></div></br>';
                                echo '<div id="age">';
                                    echo '<div class="col-xs-4 col-md-4"><label for="text">Age: </label></div>';
                                    echo '<div class="col-xs-5 col-md-5"><input type="text" class="form-control" placeholder="age" id="champAge" name="champAge" required></div>';
                                echo '</div>';
                                echo '<div class="error-message"></div></br>';
                                echo '<div id="sexe">';
                                echo '<div class="col-xs-4 col-md-4"><label for="text">Sexe: </label></div>';
                                    echo '<div class="col-xs-5 col-md-5">';
                                        echo '<select name="sexe" size="1">';
                                            echo '<option>homme</option>';
                                            echo '<option>femme</option>';
                                       echo ' </select>';
                                   echo ' </div>';
                               echo ' </div></br>';
                               echo ' <div class="col-xs-4 col-md-4"><div id="passage">';
                               echo ' <label for="text">Passage: </label></div></div>';
                                    echo '<div class="col-xs-5 col-md-5">';
                                        echo '<select name="passage" size="1">';
                                            echo '<option>premier passage</option>';
                                            echo '<option>deuxieme passage</option>';
                                        echo '</select>';
                                    echo '</div>';
                                echo '</div></br>';
                               echo ' <div class="error-message"></div></br>';
                                   echo '<div class="col-xs-12 col-md-12"><div class="button">';
                                        echo '<button type="submit" id="envoyerPatient" class="btn btn-default">Ajouter</button>';
                                    echo '</div>';
                                echo '</div>';
                            echo '</form>';
                        echo '</section>';

            echo '</div>';
        echo '</main>';
        echo '<footer>';
         echo '</footer>';
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











