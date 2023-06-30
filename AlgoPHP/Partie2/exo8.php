<h1>Exercice 8</h1>
<p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg<br/>
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.<br/>
Exemple :<br/>
repeterImage($url,4);
</p>
<h2>Résulat:</h2>

<?php
    // stockage d'url dans une variable
    $url = 'http://my.mobirise.com/data/userpic/764.jpg';
    
    // Fonction permettant de répétez une image
    function repeterImage($url){
        echo str_repeat('<img src="' . $url . '">', 4);
    }

    // Appel de la fonction
    repeterImage($url);