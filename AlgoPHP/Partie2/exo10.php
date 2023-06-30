<h1>Exercice 10</h1>
<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse email, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation :
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement
de validation (submit).
</p>
<h2>Résulat:</h2>

<?php
    $champText = array(
        "nom",
        "prenom",
        "adresse e-mail",
        "ville",
    );

    $radioSexe = array(
        "Masculin",
        "Féminin",
        "Hélicoptère de combat"
    );

    $selectFormation = array(
        "Développeur Logiciel",
        "Designer web",
        "Chef de projet"
    );

    function afficherChampText($champText){
        echo '<form action="get">';

        foreach($champText as $champText) {
            echo '<label for="name">' . ($champText) . '<br/>' . '<input type="text">' . '<br/>';
        }
        echo '</form>';
    }

    function afficherRadioSexe($radioSexe){
        foreach($radioSexe as $radioSexe){
            echo '<input type="radio">' . '<label>' . $radioSexe . '</label>' . '<br/>';
        }
    }
    function afficherSelectFormation($selectFormation){
        echo '<select name="civile">';

        foreach($selectFormation as $selectFormation){
            echo '<option>' . $selectFormation . '</options>';
        }

        echo '</select>';
    }

    afficherChampText($champText);
    afficherRadioSexe($radioSexe);
    afficherSelectFormation($selectFormation);
    echo '<br/>' . '<br/>';
    echo '<input type="submit">';