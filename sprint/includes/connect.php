<?php
//connexion a la bdd 
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=sprint;charset=utf8', 'root', 'root');
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
    ?>
