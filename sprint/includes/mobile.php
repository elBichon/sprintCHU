<?php
    // on cherche un user-agent apparenté à une plateforme mobile dans la variable
    $title = 'Location: http://localhost/sprint/indexMobile.php';
    $iphone = strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone');
    $ipad = strpos($_SERVER['HTTP_USER_AGENT'], 'iPad');
    $android = strpos($_SERVER['HTTP_USER_AGENT'], 'Android');
    $blackberry = strpos($_SERVER['HTTP_USER_AGENT'], 'BlackBerry');

    // puis on détermine si une chaîne de caractères a été trouvée
    if($iphone || $ipad || $android || $blackberry > -1){

        header($title); // si c'est le cas, on redirige
        die; // puis on arrête le chargement de la page actuelle
    }

    ?>
