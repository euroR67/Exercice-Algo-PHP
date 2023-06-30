<h1>Exercice 11</h1>
<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une
chaîne de caractère représentant une date.
</p>
<h2>Résulat:</h2>

<?php

function formaterDateFr($dateString) {
    // Conversion de la chaîne de caractères en objet DateTime
    $date = new DateTime($dateString);
    
    // Tableaux de traduction pour les jours de la semaine et les mois en français
    $joursSemaineFr = array(
        'dimanche', 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi'
    );
    $moisFr = array(
        '', 'janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'
    );
    
    // Récupération des composantes de la date
    $jourSemaine = $date->format('w');
    $jour = $date->format('j');
    $mois = $date->format('n');
    $annee = $date->format('Y');
    
    // Construction de la date formatée en français
    $dateFr = $joursSemaineFr[$jourSemaine] . ' ' . $jour . ' ' . $moisFr[$mois] . ' ' . $annee;
    
    // Affichage de la date formatée
    echo $dateFr;
}

// Exemple d'utilisation de la fonction
formaterDateFr("2018-02-23");