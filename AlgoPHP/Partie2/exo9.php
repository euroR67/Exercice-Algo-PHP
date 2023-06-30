<h1>Exercice 9</h1>
<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de
valeurs en paramètre ("Monsieur","Madame","Mademoiselle").
</p>
<h2>Résulat:</h2>
<?php
    
    $elements = array("Masculin","Feminin","Hélicoptère de combat");

    function afficherRadio($elements){
        foreach($elements as $elements){
            echo '<input type="radio">' . '<label>' . $elements . '</label>' . '<br/>';
        }
    }

    afficherRadio($elements);