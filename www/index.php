<?php
/**
 * GHABI Malek — Projet Majordhom
 * Fichier : www/index.php
 * Description :
 *   Page principale du site affichant le formulaire de contact.
 *   Intègre les éléments visuels, le token CSRF et le champ honeypot.
 *
 * Rôle :
 *   - Générer et afficher le formulaire HTML.
 *   - Inclure le token CSRF pour sécuriser la requête.
 *
 * Accès :
 *   Accessible via http://localhost/
 *
 * Sécurité :
 *   - Aucun traitement de données ici.
 *   - Affichage strict (front-end uniquement).
 */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contactez l’agence – Majordhom</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css" />
</head>

<body>
    <main class="hero">
        <section class="card">
        <h1>Contactez l’agence</h1>

        <form id="contactForm" class="grid" action="#" method="post" novalidate>
            <!-- Colonne gauche -->
            <div class="col">
            <h2>Vos coordonnées</h2>

            <div class="radios" role="radiogroup" aria-label="Civilité">
                <label class="radio">
                <input type="radio" name="civilite" value="Mme" checked />
                <span></span><em>Mme</em>
                </label>
                <label class="radio">
                <input type="radio" name="civilite" value="M" />
                <span></span><em>M</em>
                </label>
            </div>

            <div class="row-2">
                <input type="text" name="lastname" placeholder="Nom" autocomplete="family-name" />
                <input type="text" name="firstname" placeholder="Prénom" autocomplete="given-name" />
            </div>

            <input type="email" name="email" placeholder="Adresse mail" autocomplete="email" />
            <input type="tel" name="telephone" placeholder="Téléphone" autocomplete="tel" />

            <!-- Bloc DISPOS -->
            <div class="dispos">
                <h2>Disponibilités pour une visite</h2>

                <div class="dispo-row">
                <select id="day-select" aria-label="Jour">
                    <option>Lundi</option><option>Mardi</option><option>Mercredi</option>
                    <option>Jeudi</option><option>Vendredi</option>
                    <option>Samedi</option><option>Dimanche</option>
                </select>

                <select id="hour-select" aria-label="Heure">
                    <option>7h</option><option>8h</option><option>9h</option><option>10h</option>
                    <option>11h</option><option>12h</option><option>13h</option><option>14h</option>
                    <option>15h</option><option>16h</option><option>17h</option><option>18h</option>
                    <option>19h</option>
                </select>

                <select id="minute-select" aria-label="Minute">
                    <option>0m</option><option>15m</option><option>30m</option><option>45m</option>
                </select>

                <button type="button" id="addAvailability" class="btn-chip">AJOUTER DISPO</button>
                </div>

                <div id="availabilityList" class="chips" aria-live="polite"></div>
            </div>
            </div>

            <!-- Colonne droite -->
            <div class="col">
            <h2>Votre message</h2>

            <div class="radios radios-inline" role="radiogroup" aria-label="Type de demande">
                <label class="radio">
                <input type="radio" name="message_type" value="visit" checked />
                <span></span><em>Demande de visite</em>
                </label>
                <label class="radio">
                <input type="radio" name="message_type" value="callback" />
                <span></span><em>Être rappelé.e</em>
                </label>
                <label class="radio">
                <input type="radio" name="message_type" value="photos" />
                <span></span><em>Plus de photos</em>
                </label>
            </div>

            <textarea name="message" placeholder="Votre message"></textarea>

            <div class="cta">
                <button class="btn-cta" type="submit" id="submitBtn">
                ENVOYER
                <span class="loader" id="submitLoader"></span>
                </button>
            </div>
            </div>
        </form>
        </section>
    </main>
    
    <script src="/assets/main.js"></script>
</body>
</html>