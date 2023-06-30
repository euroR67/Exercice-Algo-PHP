<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité 
d'articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)
</p>

<h2>Résultat</h2>

<?php

	$prixUnitaire = 1178.12; // Prix unitaire de l'article en euros
	$quantite = 5; // Quantité
	$tauxTVA = 0.22121; // Taux de TVA (20%)
	$montantHT = $prixUnitaire * $quantite; // Calcul du montant HT (hors taxes)
	$montantTVA = $montantHT * $tauxTVA; // Calcul du montant de TVA
	$montantTTC = $montantHT + $montantTVA; // Calcul du montant TTC (toutes taxes comprises)

	echo "Prix unitaire de l'article : $prixUnitaire €";
	echo "<br>" ;
	echo "Quantité : $quantite";
	echo "<br>" ;
	echo "Taux de TVA : $tauxTVA";
	echo "<br>" ;
	echo "Le montant de la facture à régler est de : $montantTTC €";