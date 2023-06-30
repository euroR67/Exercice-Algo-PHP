<h1>Exercice 1</h1>
<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de
caractère passée en argument en majuscules et en rouge.<br/>
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;</p>
<h2>Résulat:</h2>

<?php
        $texte = "MON TEXTE EN PARAMETRE";
        function convertirMajRouge($texte) {
            $chaineModifiee = '<span style="color: red">' . $texte . '</span>';
            return strtoupper($chaineModifiee);
        }
        echo convertirMajRouge($texte);