<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d'un nombre passé en paramètre sous la
forme :
</p>

<h2>Résultat</h2>

<?php

        $table = 8;
        $nombre = 1;
        for($i = 1 ; $i <= 10; $i++){
            $nombre = $table * $i;
            echo "$i x $table = $nombre <br>";
        }