<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).
</p>

<h2>Résultat</h2>

<?php

        // Date courante
        $dateCourante = new DateTime('2018-05-21');

        // Date de naissance
        $dateNaissance = new DateTime('1985-01-17');

        // Calcul de l'âge
        $diff = $dateCourante->diff($dateNaissance);

        // Affichage de l'âge
        echo "Age de la personne : " . $diff->y . " ans " . $diff->m . " mois " . $diff->d . " jours";