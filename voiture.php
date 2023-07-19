<?php
/*---------[ 
    Créez une classe Voiture avec des propriétés privées pour la marque, 
    le modèle et l'année. Ajoutez des méthodes publiques pour définir et 
    obtenir ces propriétés. Créez une instance de cette classe et utilisez 
    les méthodes pour définir et obtenir les propriétés. 
    ]---------*/

class Voiture
{
    private $marque;
    private $modele;
    private $annee;

    // Méthode pour définir la marque de la voiture
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    // Méthode pour obtenir la marque de la voiture
    public function getMarque()
    {
        return $this->marque;
    }

    // Méthode pour définir le modèle de la voiture
    public function setModele($modele)
    {
        $this->modele = $modele;
    }

    // Méthode pour obtenir le modèle de la voiture
    public function getModele()
    {
        return $this->modele;
    }

    // Méthode pour définir l'année de la voiture
    public function setAnnee($annee)
    {
        $this->annee = $annee;
    }

    // Méthode pour obtenir l'année de la voiture
    public function getAnnee()
    {
        return $this->annee;
    }
}

// Création d'une instance de la classe Voiture
$maVoiture = new Voiture();

// Utilisation des méthodes pour définir les propriétés de la voiture
$maVoiture->setMarque("Toyota");
$maVoiture->setModele("Corolla");
$maVoiture->setAnnee(2022);

// Utilisation des méthodes pour obtenir les propriétés de la voiture
echo "Marque : " . $maVoiture->getMarque() . "<br>";
echo "Modèle : " . $maVoiture->getModele() . "<br>";
echo "Année : " . $maVoiture->getAnnee() . "<br>";


?>
