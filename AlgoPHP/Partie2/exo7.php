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

    // Tableau de choix est leur état
    $elements = array(
        "Choix 1" => true,
        "Choix 2" => false,
        "Choix 3" => false 
    );
    // Fonction qui génère des checkbox avec comme état active pour le premier checkbox
    function genererCheckbox($elements) {
        // Boucle pour afficher les checkbox du tableau
        foreach ($elements as $choix => $etat) {
            // Vérification de l'état des checkbox
            if ($etat == true) {
                $checked = "checked";
            } else {
                $checked = "";
            }
            echo  '<input type="checkbox"  value='.$choix.' '.$checked.'>
            <label>'.$choix.'</label>'.'<br>';
        }
    }
    // Appel de la fonction
    genererCheckbox($elements);