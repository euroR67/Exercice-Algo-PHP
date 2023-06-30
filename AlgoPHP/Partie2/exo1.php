<h1>Exercice 1</h1>
<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de
caractère passée en argument en majuscules et en rouge.<br/>
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;</p>
<h2>Résulat:</h2>

<?php
        $texte = "MON TEXTE EN PARAMETRE";
        // Fonction qui transforme une chaine de caractère passer en argument en majuscule et rouge
        function convertirMajRouge($texte) {
            // Changement de couleur d'une chaine de caractère passée en argument
            $chaineModifiee = '<span style="color: red">' . $texte . '</span>';
            // retourne la chaine de caractère modifiée en majuscule
            return strtoupper($chaineModifiee);
        }
        // Execute le rendu de la fonction
        echo convertirMajRouge($texte);