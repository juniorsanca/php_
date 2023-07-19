<?php
// Définition de la classe Voiture
class Voiture {
    private $marque;
    private $modele;
    private $annee;

    // Méthode pour définir la marque de la voiture
    public function setMarque($marque) {
        $this->marque = $marque;
    }

    // Méthode pour obtenir la marque de la voiture
    public function getMarque() {
        return $this->marque;
    }

    // Méthode pour définir le modèle de la voiture
    public function setModele($modele) {
        $this->modele = $modele;
    }

    // Méthode pour obtenir le modèle de la voiture
    public function getModele() {
        return $this->modele;
    }

    // Méthode pour définir l'année de la voiture
    public function setAnnee($annee) {
        $this->annee = $annee;
    }

    // Méthode pour obtenir l'année de la voiture
    public function getAnnee() {
        return $this->annee;
    }
}

// Création d'instances de la classe Voiture
$voiture1 = new Voiture();
$voiture1->setMarque("Toyota");
$voiture1->setModele("Corolla");
$voiture1->setAnnee(2022);

$voiture2 = new Voiture();
$voiture2->setMarque("Honda");
$voiture2->setModele("Civic");
$voiture2->setAnnee(2021);

$voiture3 = new Voiture();
$voiture3->setMarque("Ford");
$voiture3->setModele("Mustang");
$voiture3->setAnnee(2020);

// Ajout des voitures au tableau
$tableauVoitures = array($voiture1, $voiture2, $voiture3);

// Utilisation d'une boucle foreach pour imprimer les détails de chaque voiture
foreach ($tableauVoitures as $voiture) {
    echo "Marque : " . $voiture->getMarque() . "<br>";
    echo "Modèle : " . $voiture->getModele() . "<br>";
    echo "Année : " . $voiture->getAnnee() . "<br>";
    echo "<br>";
}
