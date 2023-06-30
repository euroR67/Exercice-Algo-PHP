<h1>Exercice 7</h1>
<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser
dans le tableau associatif si la case est cochée ou non.<br/>
Exemple :
genererCheckbox($elements);<br/>
//où $elements est un tableau associatif clé => valeur avec 3 entrées.</p>
<h2>Résulat:</h2>

<?php

    // ----------------- VARIANTE 1 --------------------

    // $elements = array("Choix 1","Choix 2","Choix 3");

    // function genererCheckbox($elements){

    //     foreach($elements as $elements){
    //         echo '<input type="checkbox">' . $elements . '<br/>';
    //     }
    // }

    // genererCheckbox($elements);

    // ----------------- VARIANTE 2 --------------------

    $elements = array(
        'checkbox1' => "Choix 1",
        'checkbox2' => "Choix 2",
        'checkbox3' => "Choix 3"
    );
    
    function genererCheckbox($elements) {
        foreach ($elements as $checkbox => $choix) {
            echo '<input type="checkbox" name="' . $checkbox . '">' . $choix . '<br/>';
        }
    }
    
    genererCheckbox($elements);    