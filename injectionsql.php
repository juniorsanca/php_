<?php

// Utilisation de requête préparée avec PDO
$nom_utilisateur = $_POST['nom_utilisateur'];
$mot_de_passe = $_POST['mot_de_passe'];

$sql = "SELECT * FROM utilisateurs WHERE nom_utilisateur = :nom_utilisateur AND mot_de_passe = :mot_de_passe";
$stmt = $connexion->prepare($sql);
$stmt->bindParam(':nom_utilisateur', $nom_utilisateur);
$stmt->bindParam(':mot_de_passe', $mot_de_passe);
$stmt->execute();

// Traiter les résultats de la requête
// ...

$nom_utilisateur = filter_input(INPUT_POST, 'nom_utilisateur', FILTER_SANITIZE_STRING);
$mot_de_passe = filter_input(INPUT_POST, 'mot_de_passe', FILTER_SANITIZE_STRING);

// Désactiver l'affichage des erreurs SQL détaillées
ini_set('display_errors', 0);


?>