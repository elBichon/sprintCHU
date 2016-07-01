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

        <header>
            <?php  include("includes/connect.php"); ?>
            <?php  include("includes/menu.php"); ?>
        </header>
        <main>
            <div class="helper">
                <h2>Patient</h2>

                       <section id="form">
                            <form action="choixFormulaire.php" method="post">
                                <div id="nom">
                                    <label for="text">Nom: </label>
                                    <input type="nom" class="form-control" placeholder="nom" id="champNom" name="champNom" required>
                                </div>
                                <div class="error-message"></div></br>
                                <div id="prenom">
                                    <label for="text">Prenom: </label>
                                    <input type="prenom" class="form-control" placeholder="prenom" id="champPrenom" name="champPrenom" required>
                                </div>
                                <div class="error-message"></div></br>
                                <div id="numero">
                                    <label for="text">Numero: </label>
                                    <input type="text" class="form-control" placeholder="numero" id="champNumero" name="champNumero" required>
                                </div>
                                <div class="error-message"></div></br>
                                <div id="age">
                                    <label for="text">Age: </label>
                                    <input type="text" class="form-control" placeholder="age" id="champAge" name="champAge" required>
                                </div>
                                <div class="error-message"></div></br>
                                <div id="sexe">
                                <label for="text">Sexe: </label>
                                    <select name="sexe" size="1">
                                        <option>homme</option>
                                        <option>femme</option>
                                    </select>
                                </div></br>
                                <div id="passage">
                                <label for="text">Passage: </label>
                                    <select name="passage" size="1">
                                        <option>premier passage</option>
                                        <option>deuxieme passage</option>
                                    </select>
                                </div></br>
                                <div class="error-message"></div></br>
                                <div class="button">
                                    <button type="submit" id="envoyerPatient" class="btn btn-default">Ajouter</button>
                                </div>
                            </form>
                        </section>

            </div>
        </main>
        <footer>
        </footer>

    </body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>











