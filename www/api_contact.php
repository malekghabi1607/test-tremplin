<?php
/**
 * GHABI Malek — Projet Majordhom
 * Fichier : www/api_contact.php
 * Description :
 *   Endpoint (point d’entrée) pour la réception des formulaires en POST.
 *   Gère la validation, la sécurité et l’insertion en base de données.
 *
 * Rôle :
 *   - Vérifier le token CSRF et le honeypot.
 *   - Valider les champs reçus.
 *   - Insérer les données validées dans la table "leads".
 *   - Retourner une réponse JSON (succès/erreurs).
 *
 * Accès :
 *   Appelé depuis www/index.php (formulaire).
 *
 * Sécurité :
 *   - Requêtes PDO préparées.
 *   - Vérification du token CSRF.
 *   - Protection contre le spam (honeypot).
 */


?>