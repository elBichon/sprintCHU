<?php session_start();
    ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
            <title>Finalisation questions</title>
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
        $i = htmlspecialchars($_POST['compteur']);

        require 'includes/connect.php';
        require 'includes/menuConnexion.php';
        echo '<p><a href="index.php">Accueil</a>--><a href="connexion.php">connexion</a>--><a href="creerFormulaire.php">creer</a>--><a href="creerFormulaire.php">rediger</a>-->envoyer</p>';
        echo '<h1>Votre nouveau Formulaire a été mis à jour</h1>';
            echo '<section>';

        $j=0;
        while($j<$i){
          if (isset($_POST['question'. $i .'']))
            {
                while($j<$i){
                                 $j++;
                                $nomFormulaire = strtolower(strtolower(htmlspecialchars($_POST['nom']));
                                $type = strtolower(htmlspecialchars($_POST['type']));
                                $question = $_POST['question'. $j .''];
                                echo '<div class="col-xs-12 col-md-12">';
                                echo $j;
                                echo ' :';
                                echo $nomFormulaire;
                                echo'  / ';
                                echo $type;
                                echo'  / ';
                                echo $question;
                                echo '</div>';
                                echo '</br>';
                                $req = $bdd->prepare('INSERT INTO question(nomFormulaire, type, question) VALUES(:nomFormulaire, :type, :question)');
                                $req->execute(array(
                                                         'nomFormulaire' => $nomFormulaire,
                                                         'type' => $type,
                                                         'question' => $question
                                             ));
                        }        
                              
            }
            $j++;
            echo '</br>';
          }
         
            
                    //ajouter une variable $qId qui est la concaténation du nom et d'un numéro, il servira de repère lors de l'insertion multiple
               /* $req = $bdd->prepare('INSERT INTO question (nomFormulaire, type, question) VALUES(?,?,?)');
                $req->execute(array($_POST['nom'], $_POST['type'], $_POST['question[]']));
                */
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

