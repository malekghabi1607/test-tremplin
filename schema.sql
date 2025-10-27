-- GHABI Malek — Projet Majordhom
-- Fichier : schema.sql
-- Description :
--   Script SQL de création de la table principale "leads".
--
-- Rôle :
--   - Définir la structure de la base MySQL.
--   - Créer les champs nécessaires pour stocker les formulaires.
--
-- Notes :
--   - Encodage utf8mb4 pour compatibilité internationale.
--   - Index ajouté sur "created_at" pour améliorer les performances.


CREATE TABLE IF NOT EXISTS leads (
  id           INT AUTO_INCREMENT PRIMARY KEY,
  civilite     ENUM('Mme','M')                      NOT NULL,
  nom          VARCHAR(100)                         NOT NULL,
  prenom       VARCHAR(100)                         NOT NULL,
  email        VARCHAR(255)                         NOT NULL,
  telephone    VARCHAR(30)                          NULL,
  sujet        ENUM('Demande de visite','Être rappelé','Plus de photos') NOT NULL,
  message      TEXT                                 NULL,
  dispo_jour   VARCHAR(20)                          NULL,
  dispo_heure  VARCHAR(10)                          NULL,
  ip           VARCHAR(45)                          NULL,
  created_at   TIMESTAMP DEFAULT CURRENT_TIMESTAMP  NOT NULL,
  INDEX (created_at),
  INDEX (email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;