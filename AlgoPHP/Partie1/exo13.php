<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de
coefficient). Elle devra être affichée avec 2 décimales.
</p>

<h2>Résultat</h2>

<?php
        // Tableau des notes de l'élève
        $notes = array(10,12,8,19,3,16,11,13,9);
        // Obtiens le nombre de notes total de l'élève
        $totalNotes = count($notes);
        // Pour calculer la sommes de toutes les notes du tableau de l'élève
        $sommes = array_sum($notes);
        // On divise la sommes de toutes les notes par le nombre total des note de l'élève
        $moyenne = $sommes / $totalNotes;

        // On utilise implode pour listé les notes du tableau avec implode
        echo "Les notes de l'élève sont : " . implode(" ", $notes);
        echo "<br/>";
        // On utilise round (2) pour arrondir le résultat par 2 décimale
        echo "Sa moyenne générale est donc de ". round($moyenne, 2);