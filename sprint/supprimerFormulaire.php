<?php session_start();
    ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
            <title>supprimer un formulaire</title>
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
        $page = "supprimerFormulaire.php";
        $bouton = "supprimer";
        require 'includes/menuConnexion.php';
        require 'includes/connect.php';
        echo '<section id="bandeau">';
                echo '<h1>Supprimer un formulaire</h1>';
                    require 'includes/bandeauChoix.php';
        $post = $_POST['nomFormulaire'];
        $requete = 'DELETE * FROM question WHERE nomFormulaire = "'.$post.'"';
        $bdd->query($requete) or die ('Erreur '.$requete.' '.$bdd->error());
        $bdd->close();
        echo '</section>';

    }
?>
    </body>
</html>



