
-- Créer la base de données si elle n'existe pas
CREATE DATABASE IF NOT EXISTS dbinscription;

-- Se connecter à la table
USE dbinscription;

-- Création de la table "participants"
CREATE TABLE IF NOT EXISTS participants (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    repas VARCHAR(10) NOT NULL,
    jeu VARCHAR(50) NOT NULL
);

/* Commande de suppression de la Table */

drop TABLE participants;

/* Remise à 0 des ID */

ALTER TABLE participants AUTO_INCREMENT = 1;

