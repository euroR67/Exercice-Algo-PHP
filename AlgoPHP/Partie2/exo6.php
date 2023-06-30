<h1>Exercice 6</h1>
<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau
de valeurs.<br/>
Exemple :<br/>
$elements = array("Monsieur","Madame","Mademoiselle");<br/>
alimenterListeDeroulante($elements);
</p>
<h2>Résulat:</h2>

<?php

    $elements = array("Monsieur","Madame","Mademoiselle");

    function alimenterListeDeroulante($elements){
        echo '<select name="civile">';

        foreach($elements as $elements){
            echo '<option>' . $elements . '</options>';
        }

        echo '</select>';
    }

    alimenterListeDeroulante($elements);