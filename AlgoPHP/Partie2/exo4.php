<h1>Exercice 4</h1>
<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un
nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).
On admet que l’URL de la page Wikipédia de la capitale adopte la forme :
https://fr.wikipedia.org/wiki/<br/>
Le tableau passé en argument sera le suivant :<br/><br/>
$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin",
"USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");</p>
<h2>Résulat:</h2>

<?php

    // Tableau des capitales
$capitales = array(
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome"
);
$wiki = array(
    "Paris" => '<a href="https://fr.wikipedia.org/wiki/Paris">Lien</a>',
    "Berlin" => '<a href="https://fr.wikipedia.org/wiki/Berlin">Lien</a>',
    "Washington" => '<a href="https://en.wikipedia.org/wiki/Washington,_D.C.">Lien</a>',
    "Rome" => '<a href="https://it.wikipedia.org/wiki/Roma">Lien</a>'
);

function afficherTableHTML($capitales, $wiki) {
    // Trier le tableau par clé (nom du pays) en ordre alphabétique
    ksort($capitales);
    ksort($wiki);

    echo '<table style="border : 1px solid black">';
    echo '<tr><th>Pays</th><th>Capitale</th><th>Lien wiki</th></tr>';

    foreach ($capitales as $pays => $capitale) {
        echo '<tr><td>' . strtoupper($pays) . '</td><td>' . $capitale . '</td><td>' . $wiki[$capitale] . '</td></tr>';
    }

    echo '</table>';
}

// Appel de la fonction pour afficher le tableau HTML des capitales
afficherTableHTML($capitales,$wiki);