<?php
/**
 * GHABI Malek — Projet Majordhom
 * Fichier : app/config.php
 * Description :
 *   Fichier de configuration et de connexion à la base de données MySQL.
 *   Utilise PDO pour assurer une connexion sécurisée et standardisée.
 *
 * Rôle :
 *   - Centraliser les informations de connexion.
 *   - Fournir une instance PDO configurée (utf8mb4, exceptions).
 *
 * Accès :
 *   Importé par les fichiers www/api_contact.php et app/validation.php.
 *
 * Sécurité :
 *   - Ne doit jamais produire de sortie HTML.
 *   - Les identifiants doivent être protégés et non versionnés.
 */
?>