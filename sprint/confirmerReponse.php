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
        require 'includes/connect.php';
        require 'includes/menuConnexion.php';
        echo '<p><a href="patient.php">patient</a>--><a href="choixFormulaire.php">formulaires</a>--><a href="questions.php">repondre</a>--><a href="envoiReponseQuestions.php">envoyer</a>-->Confirmation</p>';
        echo '<h1>Vos réponses ont été enregistrées</h1>';
            echo '<section>';
            $questionnaire1=strtolower(htmlspecialchars($_POST['q1']));
            $questionnaire2=strtolower(htmlspecialchars($_POST['q2']));
            $questionnaire3=strtolower(htmlspecialchars($_POST['q3']));
            $questionnaire4=strtolower(htmlspecialchars($_POST['q4']));
            $questionnaire5=strtolower(htmlspecialchars($_POST['q5']));
            $nom=strtolower(htmlspecialchars($_POST['nom']));
            $prenom=strtolower(htmlspecialchars($_POST['prenom']));
            $numero=htmlspecialchars($_POST['numero']);
            $sexe= htmlspecialchars($_POST['sexe']);
            $passage= htmlspecialchars($_POST['passage']);
            $age= htmlspecialchars($_POST['age']);
            $nb1= htmlspecialchars($_POST['nb1']);
            $nb2= htmlspecialchars($_POST['nb2']);
            $nb3= htmlspecialchars($_POST['nb3']);
            $nb4= htmlspecialchars($_POST['nb4']);
            $nb5= htmlspecialchars($_POST['nb5']);
            $nb5= htmlspecialchars($_POST['nb5']);
            $date = date("m.d.y");
            $i = $_POST['reponse1'. $nb1 .''];
            echo $i;

      

			
			/*$j=0;
                	$compteur=0;
            		while($j<$nb1){
                		if (isset($_POST['reponse1'. $nb1 .''])){
                    		while($j<$nb1){
                            	    $j++;
                            	    $compteur++;
                                	$question1 = $_POST['reponse1'. $compteur .''];
                                	echo $question1;
                                	}
                        	}
                    	}








            $j=0;
            while($j<$nb1){
                if (isset($_POST['reponse1'. $nb1 .''])){
                    while($j<$nb1){
                    	echo "TOTO";
                                $j++;
                                $question1 = $_POST['reponse1'. $j .''];
                                $req = $bdd->prepare('INSERT INTO reponse(date,nom,nomFormulaire,prenom,numero,age,sexe,passage,reponse) VALUES(:date,:nom,:nomFormulaire,:prenom,:numero,:age,:sexe,:passage,:reponse)');
                                $req->execute(array(
                                                        'date' => $date,
                                                        'nom' => $nom,
                                                        'nomFormulaire' => $questionnaire1,
                                                        'prenom' => $prenom,
                                                        'numero' => $numero,
                                                        'age' => $age,
                                                        'sexe' => $sexe,
                                                        'passage' => $passage,
                                                        'reponse' => $question1
                                             ));
                                }                          
                    }
                    $j++;
            	}*/
           }
    else{
        echo 'il y a eu un probleme';
    }
        echo '</section>';
    ?>
</section>
    </body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>

