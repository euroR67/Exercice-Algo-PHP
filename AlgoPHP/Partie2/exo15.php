<h1>Exercice 15</h1>
<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une
adresse e-mail a le bon format.
</p>

<h2>Résulat:</h2>

<?php 

    function checkEmailFormat($email){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "L'adresse email '$email' est considérée comme valide";
        } else {
            echo"L'adresse email '$email' est considérée comme invalide.";
        }
    }

    checkEmailFormat("mchamaev67@gmail.com");