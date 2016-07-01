<?php
echo '<div id="recherche">';
    echo '<form method="post" action="'.$page.'">';
        echo '<select name="categorie" id="categorie">';
            $reponse = $bdd->query('SELECT nomFormulaire FROM question');
            while ($donnees = $reponse->fetch()){?>
                <option value = "<?php echo $donnees['nomFormulaire']; ?>"> <?php echo $donnees['nomFormulaire']; ?></option>
        <?php }
        echo '</select>';
            echo '<div class="bouton"><input type="submit" class="text" value="'.$bouton.'"/></div>';
    echo '</form>';
echo '</div>';
?>
