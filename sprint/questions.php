<?php session_start();
    ?>
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
    <section id="principal">
    <?php
        $questionnaire1=strtolower(htmlspecialchars($_POST['questionnaire1']));
        $questionnaire2=strtolower(htmlspecialchars($_POST['questionnaire2']));
        $questionnaire3=strtolower(htmlspecialchars($_POST['questionnaire3']));
        $questionnaire4=strtolower(htmlspecialchars($_POST['questionnaire4']));
        $questionnaire5=strtolower(htmlspecialchars($_POST['questionnaire5']));
        $nom=strtolower(htmlspecialchars($_POST['nom']));
        $prenom=strtolower(htmlspecialchars($_POST['prenom']));
        $sexe=htmlspecialchars($_POST['sexe']);
        $passage=htmlspecialchars($_POST['passage']);
        $age=htmlspecialchars($_POST['age']);
        $numero=htmlspecialchars($_POST['numero']);
 
            if (isset($_SESSION['login'])) {
                  require 'includes/connect.php';
                  require 'includes/menuConnexion.php';
                   echo '<p><a href="patient.php">patient</a>--><a href="choixFormulaire.php">choix</a>-->repondre</p>';
                    echo '<h1>REPONDRE</h1>';
                        echo '<form action="envoiReponseQuestions.php" method="post"';
                            $reponseArticles1 = $bdd->query('SELECT * FROM question WHERE nomFormulaire="'.$questionnaire1.'"');
                            $reponseArticles2 = $bdd->query('SELECT * FROM question WHERE nomFormulaire="'.$questionnaire2.'"');
                            $reponseArticles3 = $bdd->query('SELECT * FROM question WHERE nomFormulaire="'.$questionnaire3.'"');
                            $reponseArticles4 = $bdd->query('SELECT * FROM question WHERE nomFormulaire="'.$questionnaire4.'"');
                            $reponseArticles5 = $bdd->query('SELECT * FROM question WHERE nomFormulaire="'.$questionnaire5.'"');
                            
                            $req1 = $bdd->query('SELECT COUNT(nomFormulaire) AS Nb1 FROM question WHERE nomFormulaire="'.$questionnaire1.'"');
                                $donnees1 = $req1->fetch();
                                 $nb1 = $donnees1[0];
                            $req1->closeCursor();
                            $req2 = $bdd->query('SELECT COUNT(nomFormulaire) AS Nb1 FROM question WHERE nomFormulaire="'.$questionnaire2.'"');
                                $donnees2 = $req2->fetch();
                                $nb2 = $donnees2[0];
                            $req2->closeCursor();
                            $req3 = $bdd->query('SELECT COUNT(nomFormulaire) AS Nb1 FROM question WHERE nomFormulaire="'.$questionnaire3.'"');
                                $donnees3 = $req3->fetch();
                                $nb3 = $donnees3[0];
                            $req3->closeCursor();
                            $req4 = $bdd->query('SELECT COUNT(nomFormulaire) AS Nb1 FROM question WHERE nomFormulaire="'.$questionnaire4.'"');
                                $donnees4 = $req4->fetch();
                                $nb4 = $donnees4[0];
                            $req4->closeCursor();
                            $req5 = $bdd->query('SELECT COUNT(nomFormulaire) AS Nb1 FROM question WHERE nomFormulaire="'.$questionnaire5.'"');
                                $donnees5 = $req5->fetch();
                                $nb5 = $donnees5[0];
                            $req5->closeCursor();
                            $compteur=1;
            while ($compteur <= $nb1){
                    while ($donneesArticles1 = $reponseArticles1->fetch()){
                            $question = $donneesArticles1['question'];
                            $nomFormulaire = $donneesArticles1['nomFormulaire'];
                            $type = $donneesArticles1['type'];
                             
                                echo '<p><strong>' . $nomFormulaire. '</strong></br></p>';
                                echo '<p><strong>' . $question . '</strong></br></p>';
                                echo '<p><strong>' . $type . '</strong></br></p>';
                                switch ($type) {
                                    case "reponse graduee 0-1":
                                        echo '<input type="number" name="reponse1'.$compteur.'" min="0" max="1" step="1" required>';
                                    break;
                                    case "reponse graduee 0-2":
                                        echo '<input type="number" name="reponse1'.$compteur.'" min="0" max="2" step="1"required>';
                                    break;
                                    case "reponse graduee 0-3":
                                        echo '<input type="number" name="reponse1'.$compteur.'" min="0" max="3" step="1" required>';
                                    break;
                                    case "reponse graduee 0-4":
                                        echo '<input type="number" name="reponse1'.$compteur.'" min="0" max="4" step="1" required>';
                                    break;
                                    case "reponse graduee 0-5":
                                        echo '<input type="number" name="reponse1'.$compteur.'" min="0" max="5" step="1" required>';
                                    break;
                                    case "reponse graduee 0-6":
                                        echo '<input type="number" name="reponse1'.$compteur.'" min="0" max="6" step="1" required>';
                                    break;
                                    case "reponse graduee 0-7":
                                        echo '<input type="number" name="reponse1'.$compteur.'" min="0" max="7" step="1" required>';
                                    break;
                                    case "reponse graduee 0-8":
                                        echo '<input type="number" name="reponse1'.$compteur.'" min="0" max="8" step="1" required>';
                                    break;
                                    case "reponse graduee 0-9":
                                        echo '<input type="number" name="reponse1'.$compteur.'" min="0" max="9" step="1"  required';
                                    break;
                                    }
                                    $compteur=$compteur+1;
                                }
                                $reponseArticles1->closeCursor();
                                $compteur=$compteur+1;
                            }
                           $compteur=1;
            while ($compteur <= $nb2){
                    while ($donneesArticles2 = $reponseArticles2->fetch()){
                            $question = $donneesArticles2['question'];
                            $nomFormulaire = $donneesArticles2['nomFormulaire'];
                            $type = $donneesArticles2['type'];
                             
                                echo '<p><strong>' . $nomFormulaire. '</strong></br></p>';
                                echo '<p><strong>' . $question . '</strong></br></p>';
                                echo '<p><strong>' . $type . '</strong></br></p>';
                                switch ($type) {
                                    case "reponse graduee 0-1":
                                        echo '<input type="number" name="reponse2'.$compteur.'" min="0" max="1" step="1" required>';
                                    break;
                                    case "reponse graduee 0-2":
                                        echo '<input type="number" name="reponse2'.$compteur.'" min="0" max="2" step="1" required>';
                                    break;
                                    case "reponse graduee 0-3":
                                        echo '<input type="number" name="reponse2'.$compteur.'" min="0" max="3" step="1" required>';
                                    break;
                                    case "reponse graduee 0-4":
                                        echo '<input type="number" name="reponse2'.$compteur.'" min="0" max="4" step="1" required>';
                                    break;
                                    case "reponse graduee 0-5":
                                        echo '<input type="number" name="reponse2'.$compteur.'" min="0" max="5" step="1" required>';
                                    break;
                                    case "reponse graduee 0-6":
                                        echo '<input type="number" name="reponse2'.$compteur.'" min="0" max="6" step="1" required>';
                                    break;
                                    case "reponse graduee 0-7":
                                        echo '<input type="number" name="reponse2'.$compteur.'" min="0" max="7" step="1" required>';
                                    break;
                                    case "reponse graduee 0-8":
                                        echo '<input type="number" name="reponse2'.$compteur.'" min="0" max="8" step="1" required>';
                                    break;
                                    case "reponse graduee 0-9":
                                        echo '<input type="number" name="reponse2'.$compteur.'" min="0" max="9" step="1" required>';
                                    break;
                                    }
                                    $compteur=$compteur+1;
                                }
                                $reponseArticles2->closeCursor();
                                $compteur=$compteur+1;
                            }
                           $compteur=1;
            while ($compteur <= $nb3){
                    while ($donneesArticles3=$reponseArticles3->fetch()){
                            $question = $donneesArticles3['question'];
                            $nomFormulaire = $donneesArticles3['nomFormulaire'];
                            $type = $donneesArticles3['type'];
                             
                                echo '<p><strong>' . $nomFormulaire. '</strong></br></p>';
                                echo '<p><strong>' . $question . '</strong></br></p>';
                                echo '<p><strong>' . $type . '</strong></br></p>';
                                switch ($type) {
                                    case "reponse graduee 0-1":
                                        echo '<input type="number" name="reponse3'.$compteur.'" min="0" max="1" step="1" required>';
                                    break;
                                    case "reponse graduee 0-2":
                                        echo '<input type="number" name="reponse3'.$compteur.'" min="0" max="2" step="1" required>';
                                    break;
                                    case "reponse graduee 0-3":
                                        echo '<input type="number" name="reponse3'.$compteur.'" min="0" max="3" step="1" required>';
                                    break;
                                    case "reponse graduee 0-4":
                                        echo '<input type="number" name="reponse3'.$compteur.'" min="0" max="4" step="1" required>';
                                    break;
                                    case "reponse graduee 0-5":
                                        echo '<input type="number" name="reponse3'.$compteur.'" min="0" max="5" step="1" required>';
                                    break;
                                    case "reponse graduee 0-6":
                                        echo '<input type="number" name="reponse3'.$compteur.'" min="0" max="6" step="1" required>';
                                    break;
                                    case "reponse graduee 0-7":
                                        echo '<input type="number" name="reponse3'.$compteur.'" min="0" max="7" step="1" required>';
                                    break;
                                    case "reponse graduee 0-8":
                                        echo '<input type="number" name="reponse3'.$compteur.'" min="0" max="8" step="1" required>';
                                    break;
                                    case "reponse graduee 0-9":
                                        echo '<input type="number" name="reponse3'.$compteur.'" min="0" max="9" step="1" required>';
                                    break;
                                    }
                                    $compteur=$compteur+1;
                                }
                                $reponseArticles3->closeCursor();
                                $compteur=$compteur+1;
                            }
                           $compteur=1;
            while ($compteur <= $nb4){
                    while ($donneesArticles4=$reponseArticles4->fetch()){
                            $question = $donneesArticles4['question'];
                            $nomFormulaire = $donneesArticles4['nomFormulaire'];
                            $type = $donneesArticles4['type'];
                             
                                echo '<p><strong>' . $nomFormulaire. '</strong></br></p>';
                                echo '<p><strong>' . $question . '</strong></br></p>';
                                echo '<p><strong>' . $type . '</strong></br></p>';
                                switch ($type) {
                                    case "reponse graduee 0-1":
                                        echo '<input type="number" name="reponse4'.$compteur.'" min="0" max="1" step="1" required>';
                                    break;
                                    case "reponse graduee 0-2":
                                        echo '<input type="number" name="reponse4'.$compteur.'" min="0" max="2" step="1" required>';
                                    break;
                                    case "reponse graduee 0-3":
                                        echo '<input type="number" name="reponse4'.$compteur.'" min="0" max="3" step="1" required>';
                                    break;
                                    case "reponse graduee 0-4":
                                        echo '<input type="number" name="reponse4'.$compteur.'" min="0" max="4" step="1" required>';
                                    break;
                                    case "reponse graduee 0-5":
                                        echo '<input type="number" name="reponse4'.$compteur.'" min="0" max="5" step="1" required>';
                                    break;
                                    case "reponse graduee 0-6":
                                        echo '<input type="number" name="reponse4'.$compteur.'" min="0" max="6" step="1" required>';
                                    break;
                                    case "reponse graduee 0-7":
                                        echo '<input type="number" name="reponse4'.$compteur.'" min="0" max="7" step="1" required>';
                                    break;
                                    case "reponse graduee 0-8":
                                        echo '<input type="number" name="reponse4'.$compteur.'" min="0" max="8" step="1" required>';
                                    break;
                                    case "reponse graduee 0-9":
                                        echo '<input type="number" name="reponse4'.$compteur.'" min="0" max="9" step="1" required>';
                                    break;
                                    }
                                    $compteur=$compteur+1;
                                }
                                $reponseArticles4->closeCursor();
                                $compteur=$compteur+1;
                            }
                           $compteur=1;
            while ($compteur <= $nb5){
                    while ($donneesArticles5 = $reponseArticles5->fetch()){
                            $question = $donneesArticles5['question'];
                            $nomFormulaire = $donneesArticles5['nomFormulaire'];
                            $type = $donneesArticles5['type'];
                             
                                echo '<p><strong>' . $nomFormulaire. '</strong></br></p>';
                                echo '<p><strong>' . $question . '</strong></br></p>';
                                echo '<p><strong>' . $type . '</strong></br></p>';
                                switch ($type) {
                                    case "reponse graduee 0-1":
                                        echo '<input type="number" name="reponse5'.$compteur.'" min="0" max="1" step="1" required>';
                                    break;
                                    case "reponse graduee 0-2":
                                        echo '<input type="number" name="reponse5'.$compteur.'" min="0" max="2" step="1" required>';
                                    break;
                                    case "reponse graduee 0-3":
                                        echo '<input type="number" name="reponse5'.$compteur.'" min="0" max="3" step="1" required>';
                                    break;
                                    case "reponse graduee 0-4":
                                        echo '<input type="number" name="reponse5'.$compteur.'" min="0" max="4" step="1" required>';
                                    break;
                                    case "reponse graduee 0-5":
                                        echo '<input type="number" name="reponse5'.$compteur.'" min="0" max="5" step="1" required>';
                                    break;
                                    case "reponse graduee 0-6":
                                        echo '<input type="number" name="reponse5'.$compteur.'" min="0" max="6" step="1" required>';
                                    break;
                                    case "reponse graduee 0-7":
                                        echo '<input type="number" name="reponse5'.$compteur.'" min="0" max="7" step="1" required>';
                                    break;
                                    case "reponse graduee 0-8":
                                        echo '<input type="number" name="reponse5'.$compteur.'" min="0" max="8" step="1" required>';
                                    break;
                                    case "reponse graduee 0-9":
                                        echo '<input type="number" name="reponse5'.$compteur.'" min="0" max="9" step="1" required>';
                                    break;
                                    }
                                    $compteur=$compteur+1;
                                }
                                $reponseArticles5->closeCursor();
                                $compteur=$compteur+1;
                            }
                           $compteur=1;

                                echo '<input type="hidden" name="nb1" value= "'.$nb1.'">';    
                                echo '<input type="hidden" name="nb2" value= "'.$nb2.'">';
                                echo '<input type="hidden" name="nb3" value= "'.$nb3.'">';
                                echo '<input type="hidden" name="nb4" value= "'.$nb4.'">';
                                echo '<input type="hidden" name="nb5" value= "'.$nb5.'">';
                                echo '<input type="hidden" name="q1" value= "'.$questionnaire1.'">';    
                                echo '<input type="hidden" name="q2" value= "'.$questionnaire2.'">';
                                echo '<input type="hidden" name="q3" value= "'.$questionnaire3.'">';
                                echo '<input type="hidden" name="q4" value= "'.$questionnaire4.'">';
                                echo '<input type="hidden" name="q5" value= "'.$questionnaire5.'">';
                                echo '<input type="hidden" name="nom" value= "'.$nom.'">';
                                echo '<input type="hidden" name="prenom" value= "'.$prenom.'">';
                                echo '<input type="hidden" name="numero" value= "'.$numero.'">';
                                echo '<input type="hidden" name="sexe" value= "'.$sexe.'">';
                                echo '<input type="hidden" name="passage" value= "'.$passage.'">';
                                echo '<input type="hidden" name="age" value= "'.$age.'">';
                                echo '<div id="envoi" class="col-xs-12 col-md-12"><div class="bouton"><input type="submit" class="text" value="repondre"/></div></div>';
                        echo '</form>';
                        echo '<div id="confirm" class="col-xs-12 col-md-12"><div class="bouton"><input type="submit" class="text" value="confirmer"/></div></div>';
                    }
                    else{
                        echo 'il y a eu un probleme';
                    }            
?>
</section>
    </body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>

$("#envoi").hide();
$("#confirm").click(function(){
	alert('vous allez pouvoir envoyer vos réponses, atention, vous ne pourrez pas revenir en arrière');
    $("#envoi").show();
});
</script>
</html>