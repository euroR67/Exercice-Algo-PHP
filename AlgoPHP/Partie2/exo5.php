<h1>Exercice 5</h1>
<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en
précisant le nom des champs associés. <br/><br/>
<span style="font-weight: 600; font-size: 18px">Exemple</span> :<br/>
$nomsInput = array("Nom","Prénom","Ville");<br/>
afficherInput($nomsInput);</p>
<h2>Résulat:</h2>
<?php
    // Tableau info personne
    $nomsInput = array("Nom", "Prénom", "Ville");
    // Fonction afficher formulaire
    function afficherInput($nomInput){
        echo '<form action="get">';
        // Boucle pour afficher chaque element du tableau sous forme de formulaire
        foreach($nomInput as $nomInput) {
            echo '<label for="name">' . ($nomInput) . '<br/>' . '<input type="text">' . '<br/>';
        }
        echo '</form>';
    }
    // Appel de la fonction
    afficherInput($nomsInput);