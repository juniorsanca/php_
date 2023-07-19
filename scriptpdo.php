CREATE TABLE utilisateurs (
id INT AUTO_INCREMENT PRIMARY KEY,
nom VARCHAR(50) NOT NULL,
email VARCHAR(100) NOT NULL,
mot_de_passe VARCHAR(255) NOT NULL
);

<?php
// Informations de connexion à la base de données
$serveur = "localhost";
$utilisateur = "votre_nom_d_utilisateur";
$mot_de_passe = "votre_mot_de_passe";
$nom_base_de_donnees = "nom_de_votre_base_de_donnees";

try {
    // Connexion à la base de données avec PDO
    $connexion = new PDO("mysql:host=$serveur;dbname=$nom_base_de_donnees", $utilisateur, $mot_de_passe);

    // Afficher un message si la connexion est réussie
    echo "Connexion à la base de données réussie.";

    // Requête SQL pour créer la table utilisateurs
    $requete = "CREATE TABLE utilisateurs (
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    nom VARCHAR(50) NOT NULL,
                    email VARCHAR(100) NOT NULL,
                    mot_de_passe VARCHAR(255) NOT NULL
                )";

    // Exécution de la requête SQL
    $connexion->exec($requete);

    // Afficher un message si la table est créée avec succès
    echo "Table 'utilisateurs' créée avec succès.";
} catch (PDOException $e) {
    // Afficher un message en cas d'erreur de connexion ou d'exécution de la requête
    echo "Erreur : " . $e->getMessage();
}
?>