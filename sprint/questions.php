<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
            <title>choix Formulaire</title>
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
        require 'includes/connect.php';
        echo '<header>';
        require 'includes/menu.php';
        echo '</header>';
        
        $post=htmlspecialchars($_POST['formulaire']);
        $nom=htmlspecialchars($_POST['nom']);
        $prenom=htmlspecialchars($_POST['prenom']);
        $numero=htmlspecialchars($_POST['numero']);
        $sexe=htmlspecialchars($_POST['sexe']);
        $passage=htmlspecialchars($_POST['passage']);
        $age=htmlspecialchars($_POST['age']);
        
        echo '<h1>Repondre</h1>';
        echo $post;
        echo '</br>';
        echo $nom;
        echo '</br>';
        echo $prenom;
        echo '</br>';
        echo $numero;
        echo '</br>';
        echo $sexe;
        echo '</br>';
        echo $passage;
        echo '</br>';
        echo $age;echo '</br>';
        echo '<section id="question">';
                echo '<form method="post" action="reponses.php">';
                    
                echo '</form>';
        echo '</section>';

?>
    </body>
</html>