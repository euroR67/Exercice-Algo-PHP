<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome</p>

<h2>Résultat</h2>

<?php

$phrase = "Engage le jeu que je le gagne";

// Retirer les espaces pour la comparaison
$phraseModifier = strtolower($phrase);
$phraseModifier = str_replace(' ', '', $phraseModifier);

// Inverser la phrase sans espaces
$inverser = strrev($phraseModifier);

// Vérifier si la phrase inversée est égale à la phrase originale sans espaces
if ($phraseModifier === $inverser) {
    echo "La phrase « $phrase » est un palindrome.";
} else {
    echo "La phrase « $phrase » est pas un palindrome.";
}