<h1>Exercice 14</h1>
<p>Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec
qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).
Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques
suivantes :<br/>
Peugeot 408 : $v1 = new Voiture("Peugeot","408");<br/>
BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",100);<br/>
Votre programme de test devra afficher les informations des 2 voitures de la façon suivante :<br/>
echo $v1->getInfos()."br/>";<br/>
echo $ve1->getInfos()."br/>";

</p>
<h2>Résulat:</h2>

<?php
    // La classe "Voiture" est définie avec des propriétés privées
    class Voiture {
        private $marque;
        private $modele;

        // La méthode publique "__construct" initialise les propriétés de la voiture.
        public function __construct($marque, $modele) {
            $this->marque = $marque;
            $this->modele = $modele;
        }
        // Methode get pour accéder au propriétés privées de la classe
        public function getMarque() {
            return $this-> marque;
        }
        // Methode set pour définir la valeur de la propriétés privées
        public function setMarque() {
            $this-> marque = $marque;
        }
        // Methode get pour accéder au propriétés privées de la classe
        public function getModele() {
            return $this-> modele;
        }
        // Methode set pour définir la valeur de la propriétés privées
        public function setModele() {
            $this-> modele = $modele;
        }
        // Methode get pour accéder au informations des propriétés privées de la classe
        public function getInfos() {
            return "Nom et modèle du véhicule : {$this->marque} {$this->modele}<br>";
        }
    }

    // La classe "VoitureElec" est définie avec une propriété privée avec une extension
    // des propriétés de la classe "Voiture"
    class VoitureElec extends Voiture{
        private $autonomie;
        // La méthode publique "__construct" initialise les propriétés de la voiture.
        public function __construct($marque, $modele , $autonomie) {
            // La méthode "parent::__construct" récupère les propriétées privées du parent "Voiture"
            parent::__construct($marque, $modele);
            $this->autonomie = $autonomie;
        }
        // La méthode get pour accéder au propriétés privées de la classe
        public function getAutonomie() {
            return $this-> autonomie;
        }
        // Methode set pour définir la valeur de la propriétés privées
        public function setAutonomie() {
            $this-> autonomie = $autonomie;
        }
        // Methode get pour accéder au informations des propriétés privées de la classe
        public function getInfos() {
            // Méthode "parent::getInfos()" récupère l'affichage de la méthode getInfo de la class Voiture (parent)
            return parent::getInfos() . "Autonomie : {$this->autonomie} km<br>";
        }
    }

    // Deux instances d'objects "Voiture" et "VoitureElec sont créées
    $v1 = new Voiture("Peugeot","408");
    $ve1 = new VoitureElec("BMW","I3",100);

    // Execution des méthode "getInfos()" pour afficher les informations des véhicules
    echo $v1->getInfos()."<br/>";
    echo $ve1->getInfos()."<br/>";