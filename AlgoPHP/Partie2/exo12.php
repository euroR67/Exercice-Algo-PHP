<h1>Exercice 12</h1>
<p>La fonction var_dump($variable) permet d’afficher les informations d’une variable.
Soit le tableau suivant :
$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));
A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.
.
</p>
<h2>Résulat:</h2>

<?php
// Tableau de différents valeurs
$tableauValeurs = array(
    true,
    "texte",
    10,
    25.369,
    array("valeur1","valeur2")
);
// Boucle permettant d'afficher les informations d'une variable
foreach ($tableauValeurs as $valeur) {
    // Methode permettant de connaitre les informations d'une variable
    var_dump($valeur);
    echo "<br>";
}