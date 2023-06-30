<h1>Exercice 5</h1>
<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en
précisant le nom des champs associés. <br/><br/>
<span style="font-weight: 600; font-size: 18px">Exemple</span> :<br/>
$nomsInput = array("Nom","Prénom","Ville");<br/>
afficherInput($nomsInput);</p>
<h2>Résulat:</h2>
<?php

    $nomsInput = array("Nom", "Prénom", "Ville");

    function afficherInput($nomInput){
        echo '<form action="get">';

        foreach($nomInput as $nomInput) {
            echo '<label for="name">' . ($nomInput) . '<br/>' . '<input type="text">' . '<br/>';
        }
        echo '</form>';
    }

    afficherInput($nomsInput);