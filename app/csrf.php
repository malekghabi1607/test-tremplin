<?php
/**
 * GHABI Malek — Projet Majordhom
 * Fichier : app/csrf.php
 * Description :
 *   Gestion du token CSRF pour protéger le formulaire contre les attaques
 *   de type "Cross-Site Request Forgery".
 *
 * Rôle :
 *   - Générer un token unique par session utilisateur.
 *   - Vérifier la validité du token lors de la soumission du formulaire.
 *
 * Accès :
 *   Importé dans www/index.php pour générer le token,
 *   et dans www/api_contact.php pour le valider.
 *
 * Sécurité :
 *   - Le token est stocké en session, jamais transmis par cookie.
 *   - Token à usage unique pour chaque requête POST.
 */
?>