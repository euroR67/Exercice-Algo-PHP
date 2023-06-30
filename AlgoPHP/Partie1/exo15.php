<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.<br/>
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;<br/>
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;
</p>

<h2>Résultat</h2>

<?php

class Personne {
    private $nom;
    private $prenom;
    private $dateNaissance;

    public function __construct($nom, $prenom, $dateNaissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getDateNaissance() {
        return $this->dateNaissance;
    }

    public function getAge() {
        $dateActuelle = new DateTime();
        $dateNaissance = new DateTime($this->dateNaissance);
        $difference = $dateNaissance->diff($dateActuelle);
        return $difference->y;
    }
}

$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

echo $p1->getPrenom() . ' ' . $p1->getNom() . ' a ' . $p1->getAge() . ' ans.' . PHP_EOL;
echo $p2->getPrenom() . ' ' . $p2->getNom() . ' a ' . $p2->getAge() . ' ans.' . PHP_EOL;

?>
