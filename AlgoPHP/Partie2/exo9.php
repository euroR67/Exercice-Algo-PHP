<h1>Exercice 9</h1>
<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de
valeurs en paramètre ("Monsieur","Madame","Mademoiselle").
</p>
<h2>Résulat:</h2>
<?php
    // Tableau choisir sexe
    $elements = array("Masculin","Feminin","Hélicoptère de combat");
    // Fonction permettant d'afficher chaque élément de tableau
    function afficherRadio($elements){
        // Boucle pour generer chaque element de tableau
        foreach($elements as $elements){
            echo '<input type="radio">' . '<label>' . $elements . '</label>' . '<br/>';
        }
    }
    // Appel de la fonction
    afficherRadio($elements);