<h1>Exercice 2</h1>
<p>Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à
une fonction personnalisée.<br/>
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);</p>
<h2>Résulat:</h2>

<?php

// Tableau des capitales
$capitales = array(
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome"
);

function afficherTableHTML($capitales) {
    // Trier le tableau par clé (nom du pays) en ordre alphabétique
    ksort($capitales);

    echo '<table>';
    echo '<tr><th>Pays</th><th>Capitale</th></tr>';
    // Boucle foreach pour afficher le contenu html approprié pour chaque élèment du tableau
    foreach ($capitales as $pays => $capitale) {
        echo '<tr><td>' . strtoupper($pays) . '</td><td>' . $capitale . '</td></tr>';
    }

    echo '</table>';
}

// Appel de la fonction pour afficher le tableau HTML des capitales
afficherTableHTML($capitales);