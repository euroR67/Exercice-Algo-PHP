<h1>Exercice 13</h1>
<p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et
vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus
des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule
instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un
véhicule.<br/>
v1 ➔ "Peugeot","408",5<br/>
v2 ➔ "Citroën","C4",3<br/>
Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de
tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments
suivants :

</p>
<h2>Résulat:</h2>

<?php

class Voiture {
    private $marque;
    private $modele;
    private $nbPortes;
    private $vitesseActuelle;
    private $status;

    public function __construct($marque, $modele, $nbPortes, $status) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;
        $this->status = false;
        $this->vitesseActuelle = 0;
    }

    public function getMarque() {
        return $this->marque;
    }

    public function setMarque($marque) {
        $this->marque = $marque;
    }

    public function getModele() {
        return $this->modele;
    }

    public function setModele($modele) {
        $this->modele = $modele;
    }

    public function getNbPortes() {
        return $this->nbPortes;
    }

    public function setNbPortes($nbPortes) {
        $this->nbPortes = $nbPortes;
    }
    
    public function setStatus($status) {
        $this->status = $status;
    }
    public function getVitesseActuelle() {
        return $this->vitesseActuelle;
        echo "La vitesse du véhicule {$this->marque} {$this->modele} est de $vitesseActuelle km/h<br>";
    }

    public function demarrer() {
        echo "Le véhicule {$this->marque} {$this->modele} démarre.<br>";
        return $this->status = true;
    }

    public function accelerer($vitesse) {
        if ($this->status === false){
            echo "Le véhicule {$this->marque} {$this->modele} veut accélerer de $vitesse.<br>Pour accélerer, il faut démarrer le véhicule {$this->marque} {$this->modele}!<br>";
        } else {
            $this->vitesseActuelle += $vitesse;
            echo "Le véhicule {$this->marque} {$this->modele} accélère à $vitesse km/h.<br>";
        }
    }

    public function stopper() {
        $this->vitesseActuelle = 0;
        echo "Le véhicule {$this->marque} {$this->modele} est stoppé.<br>";
        return $this->status = false;
    }

    public function afficherInformations() {
        echo "Nom et modèle du véhicule : {$this->marque} {$this->modele}<br>";
        echo "Nombre de portes : {$this->nbPortes}<br>";
        if ($this->status) {
            echo "Le véhicule {$this->marque} est démarré<br>";
        } else {
            echo "Le véhicule {$this->marque} est arrêté<br>";
        }
        echo "Sa vitesse actuelle est de: {$this->vitesseActuelle} km/h<br>";
    }
}

$v1 = new Voiture("Peugeot", "408", 5, false);
$v2 = new Voiture("Citroën", "C4", 3, false);

$v1->demarrer();
$v1->accelerer(50);
$v1->stopper();
$v1->accelerer(80);
$v1->demarrer();
$v1->accelerer(50);
echo "<br>";
$v2->demarrer();
$v2->stopper();
$v2->accelerer(20);


echo "<br>";
$vitesseActuelleV1 = $v1->getVitesseActuelle();
echo "La vitesse actuelle du véhicule {$v1->getMarque()} {$v1->getModele()} est de $vitesseActuelleV1 km/h<br>";

$vitesseActuelleV2 = $v2->getVitesseActuelle();
echo "La vitesse actuelle du véhicule {$v2->getMarque()} {$v2->getModele()} est de $vitesseActuelleV2 km/h<br>";

echo "<br>";
echo "Infos véhicule 1<br>******************<br>";
$v1->afficherInformations();
echo "<br>";

echo "Infos véhicule 2<br>******************<br>";
$v2->afficherInformations();
echo "<br>";