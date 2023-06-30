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

    class Voiture {
        private $marque;
        private $modele;

        public function __construct($marque, $modele) {
            $this->marque = $marque;
            $this->modele = $modele;
        }
    
        public function getMarque() {
            return $this-> marque;
        }
    
        public function setMarque() {
            $this-> marque = $marque;
        }
    
        public function getModele() {
            return $this-> modele;
        }
    
        public function setModele() {
            $this-> modele = $modele;
        }

        public function getInfos() {
            echo "Nom et modèle du véhicule : {$this->marque} {$this->modele}<br>";
        }
    }

    class VoitureElec extends Voiture{
        private $autonomie;

        public function __construct($marque, $modele , $autonomie) {
            parent::__construct($marque, $modele);
            $this->autonomie = $autonomie;
        }
    
        public function getAutonomie() {
            return $this-> autonomie;
        }
    
        public function setAutonomie() {
            $this-> autonomie = $autonomie;
        }

        public function getInfos() {
            parent::getInfos();
            echo "Autonomie : {$this->autonomie} km<br>";
        }
    }


    $v1 = new Voiture("Peugeot","408");
    $ve1 = new VoitureElec("BMW","I3",100);

    echo $v1->getInfos()."<br/>";
    echo $ve1->getInfos()."<br/>";