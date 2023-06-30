<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. 
Attention, la valeur générée devra être arrondie à 2 décimales.</p>

<h2>Résultat</h2>

<?php

	$tauxConversion = 0.1524; // Taux de conversion 1 franc = 0.1524 euros
	$valeurFrancs = 1001; // La valeur en francs à convertir
	$valeurEuros = $valeurFrancs * $tauxConversion; // Calcul de la conversion en euros
	echo "Montant en francs : $valeurFrancs";
	echo "<br>" ;
	echo "$valeurFrancs Francs = $valeurEuros";