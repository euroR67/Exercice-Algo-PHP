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
// La classe "Voiture" est définie avec des propriétés privées
class Voiture {
    private $marque;
    private $modele;
    private $nbPortes;
    private $vitesseActuelle;
    private $status;
    // La méthode publique "__construct" initialise les propriétés de la voiture.
    public function __construct($marque, $modele, $nbPortes, $status) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;
        $this->status = false;
        $this->vitesseActuelle = 0;
    }
    // Methode get pour accéder au propriétés privées de la classe
    public function getMarque() {
        return $this->marque;
    }
    // Methode set pour définir la valeur de la propriétés privées
    public function setMarque($marque) {
        $this->marque = $marque;
    }
    // Methode get pour accéder au propriétés privées de la classe
    public function getModele() {
        return $this->modele;
    }
    // Methode set pour définir la valeur de la propriétés privées
    public function setModele($modele) {
        $this->modele = $modele;
    }
    // Methode get pour accéder au propriétés privées de la classe
    public function getNbPortes() {
        return $this->nbPortes;
    }
    // Methode set pour définir la valeur de la propriétés privées
    public function setNbPortes($nbPortes) {
        $this->nbPortes = $nbPortes;
    }
    // La méthode "setStatus" permet de modifier l'état de la voiture.
    public function setStatus($status) {
        $this->status = $status;
    }
    // La méthode "getVitesseActuelle" renvoie la vitesse actuelle de la voiture et affiche un message
    // indiquant la vitesse de la voiture.
    public function getVitesseActuelle() {
        return $this->vitesseActuelle;
    }
    // La méthode "demarrer" affiche un message indiquant que la voiture a démarré et définit l'état de la voiture sur "true".
    public function demarrer() {
        echo "Le véhicule {$this->marque} {$this->modele} démarre.<br>";
        return $this->status = true;
    }
    // La méthode "accelerer" prend en paramètre une vitesse et vérifie si la voiture est démarrée ou non.
    public function accelerer($vitesse) {
        if ($this->status === false){
            echo "Le véhicule {$this->marque} {$this->modele} veut accélerer de $vitesse.<br>Pour accélerer, il faut démarrer le véhicule {$this->marque} {$this->modele}!<br>";
        } else {
            $this->vitesseActuelle += $vitesse;
            echo "Le véhicule {$this->marque} {$this->modele} accélère à $vitesse km/h.<br>";
        }
    }
    // La méthode "stopper" réinitialise la vitesse actuelle de la voiture à zéro
    public function stopper() {
        $this->vitesseActuelle = 0;
        echo "Le véhicule {$this->marque} {$this->modele} est stoppé.<br>";
        return $this->status = false;
    }
    // La méthode "afficherInformations" affiche différentes informations sur la voiture
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

// Deux instances d'objects "Voiture" sont créées
$v1 = new Voiture("Peugeot", "408", 5, false);
$v2 = new Voiture("Citroën", "C4", 3, false);

// Différentes méthodes sont appelées sur ces objets pour effectuer des actions sur les voitures
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

// méthodes "getVitesseActuelle", "getMarque" et "getModele" sont utilisées pour obtenir
// certaines informations sur les voitures
$vitesseActuelleV1 = $v1->getVitesseActuelle();
echo "La vitesse actuelle du véhicule {$v1->getMarque()} {$v1->getModele()} est de $vitesseActuelleV1 km/h<br>";

$vitesseActuelleV2 = $v2->getVitesseActuelle();
echo "La vitesse actuelle du véhicule {$v2->getMarque()} {$v2->getModele()} est de $vitesseActuelleV2 km/h<br>";

echo "<br>";
// méthodes "afficherInformations" sont appelées sur chaque objet pour afficher
// toutes les informations disponibles sur les voitures.
echo "Infos véhicule 1<br>******************<br>";
$v1->afficherInformations();

echo "<br>";

echo "Infos véhicule 2<br>******************<br>";
$v2->afficherInformations();

echo "<br>";