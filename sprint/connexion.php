<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
            <title>connexion</title>
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

        <header>
            <?php  include("includes/connect.php"); ?>
        </header>
        <main>
            <div class="helper">
                <h1>Connexion</h1>
<section id="principal">
    <section id="choix">

<?php
    //echappement des champs recus
    $login = htmlspecialchars($_POST['login']);
    $pass_hache = sha1(htmlspecialchars($_POST['password']));
    
    //verification que les champs sont remplis
    if (empty($login) || empty($pass_hache)){
        $connexion_erreur = "Vous devez renseigner un login et un mot de passe";
        $retour = "Cliquez <a href='index.php'>ici</a> pour revenir à la page d'accueil";
        echo $connexion_erreur;
        echo "</br>";
        echo $retour;
    }
    else{
        //verification que le compte existe
        $req = $bdd->prepare('SELECT id FROM connexion WHERE login = :login AND pass = :pass');
        $req->execute(array(
                            'login' => $login,
                            'pass' => $pass_hache));
        $resultat = $req->fetch();
        
        if (!$resultat){
            //si le champ n existe pas
            echo 'Mauvais identifiant ou mot de passe !';
            $retour = "Cliquez <a href='index.php'>ici</a> pour revenir à la page d'accueil";
            echo "</br>";
            echo $retour;
        }
        else{
            //si le compte existe creation de la session
            session_start();
            $_SESSION['id'] = $resultat['id'];
            $id = $_SESSION['id'];
            $_SESSION['login'] = $login;
            require 'includes/menuConnexion.php';
            echo ' <div class="col-xs-12 col-md-12"><p><a href="index.php">Accueil</a>-->connexion</p></div>';
            echo 'Bonjour ' . $_SESSION['login'];
          
            
        }
    }
    ?>
    </section>
           
            </div>
        </main>
</section>


        <footer>
        </footer>

    </body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>











