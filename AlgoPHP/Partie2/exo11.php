<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
    <h1>Exercice 11</h1>
    <p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une
chaîne de caractère représentant une date.
.</p>
    <h2>résultat</h2>
    <?php  
    // Création d'une date
    $date=date_create("2018-02-23");
    // Traduit la date en français , Full affiche le nom du jour / mois en entier , None pour ne pas afficher l'heure
    $formatter=new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
    // Affichage de la date en lettre est en français
    echo $formatter->format($date);
?>
</body>
</html>