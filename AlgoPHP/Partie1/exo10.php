<h1>Exercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et
1 €.
</p>

<h2>Résultat</h2>

<?php

$montantAPayer = 152;
$montantVerse = 200;

$resteAPayer = $montantVerse - $montantAPayer;

echo "Montant à payer : $montantAPayer €<br/>";
echo "Montant versé : $montantVerse €<br/>";
echo "Reste à payer : $resteAPayer €<br/>";
echo "***************************************************<br/>";

// Calcul du nombre de billets de 10 €
$billets10 = floor($resteAPayer / 10);
$resteAPayer -= $billets10 * 10;

// Calcul du nombre de billets de 5 €
$billets5 = floor($resteAPayer / 5);
$resteAPayer -= $billets5 * 5;

// Calcul du nombre de pièces de 2 €
$pieces2 = floor($resteAPayer / 2);
$resteAPayer -= $pieces2 * 2;

// Le reste correspondra au nombre de pièces de 1 €
$pieces1 = $resteAPayer;

// Affichage du résultat
echo "Rendu de monnaie :<br/>";
echo "$billets10 billets de 10 € - $billets5 billet(s) de 5 € - $pieces2 pièce(s) de 2 € - $pieces1 pièce(s) de 1 €\n";