<?php
/**
 * GHABI Malek — Projet Majordhom
 * Fichier : app/validation.php
 * Description :
 *   Contient l’ensemble des règles de validation serveur appliquées
 *   aux champs du formulaire.
 *
 * Rôle :
 *   - Vérifier les champs obligatoires.
 *   - Contrôler les formats (email, texte, longueur, etc.).
 *   - Nettoyer les entrées avant insertion en base.
 *
 * Accès :
 *   Appelé depuis www/api_contact.php avant l’insertion en base.
 *
 * Sécurité :
 *   - Validation systématique côté serveur (même si le JS est désactivé).
 *   - Empêche l’injection SQL, XSS et erreurs de type.
 */
?>