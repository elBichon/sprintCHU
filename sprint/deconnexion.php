<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Page de déconnexion</title>
            <link rel="stylesheet" href="css/style.css" />
            <link rel="stylesheet" href="css/menu.css" />
            <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <script src="js/verificationLogin.js"></script>
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    </head>
    <body>
    <section id="principal">
        <header>
        </header>
        <h1>Vous êtes déconnecté</h1>
        <p><a href="index.php">Accueil</a></p>
            <?php  include("includes/connect.php"); ?>
        <section id="deconnexion">

<?php
    session_start();
    
    // Suppression des variables de session et de la session
    $_SESSION = array();
    session_destroy();
    
    // Suppression des cookies de connexion automatique
    setcookie('login', '');
    setcookie('pass_hache', '');
?>

        </section>



    <footer>
            
    </footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</section>
    </body>
</html>
