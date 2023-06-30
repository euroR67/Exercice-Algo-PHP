<h1>Exercice 15</h1>
<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une
adresse e-mail a le bon format.
</p>

<h2>Résulat:</h2>

<?php 
    // Une fonction qui permet de vérifier si un email est valide
    function checkEmailFormat($email){
        // Filtration de l'email
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "L'adresse email '$email' est considérée comme valide";
        } else {
            echo"L'adresse email '$email' est considérée comme invalide.";
        }
    }
    // On execute la fonction en passant un argument pour vérifier la validité
    checkEmailFormat("mchamaev67@gmail.com");