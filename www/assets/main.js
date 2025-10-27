// GHABI Malek — Projet Majordhom
// Fichier : www/assets/main.js
// Description :
//   Script JavaScript pour améliorer l’expérience utilisateur lors
//   de la soumission du formulaire.
//
// Rôle :
//   - Intercepter l’envoi du formulaire.
//   - Envoyer les données via Fetch API (AJAX).
//   - Gérer l’affichage des messages d’erreur ou de succès.
//
// Sécurité :
//   - Le JS ne remplace jamais la validation serveur.
//   - Aucune donnée sensible n’est stockée côté client.
// GHABI Malek — Projet Majordhom
// Fichier : www/assets/main.js
// Phase 2 — Interaction UI (sans backend)
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    const addAvailabilityBtn = document.getElementById('addAvailability');
    const availabilityList = document.getElementById('availabilityList'); // .chips
    const daySelect = document.getElementById('day-select');
    const hourSelect = document.getElementById('hour-select');
    const minuteSelect = document.getElementById('minute-select');

    // Optionnel : petite zone d’info/erreur sous les chips
    let chipsNote = document.getElementById('chips-note');
    if (!chipsNote) {
        chipsNote = document.createElement('div');
        chipsNote.id = 'chips-note';
        chipsNote.className = 'chips-note';
        availabilityList.after(chipsNote);
    }

    const MAX_CHIPS = 10;

    function showNote(msg) {
        chipsNote.textContent = msg || '';
    }

    addAvailabilityBtn.addEventListener('click', function() {
        showNote('');

        // Limite max
        const current = availabilityList.querySelectorAll('.availability-tag').length;
        if (current >= MAX_CHIPS) {
            showNote(`Limite atteinte : ${MAX_CHIPS} disponibilités maximum.`);
            return;
        }

        // Construit le libellé "Jour à HhMm"
        const day = daySelect.options[daySelect.selectedIndex].text.trim();
        const hour = hourSelect.value.trim(); // ex: "11h"
        const minuteRaw = minuteSelect.value.trim(); // ex: "45m"
        const minute = minuteRaw.replace('m', ''); // "45"
        const label = `${day} à ${hour}${minute}`;

        // Anti-doublon (insensible à la casse et espaces)
        const exists = Array.from(availabilityList.querySelectorAll('.availability-tag'))
            .some(tag => tag.dataset.value === label.toLowerCase());
        if (exists) {
            showNote('Cette disponibilité est déjà ajoutée.');
            return;
        }

        // Crée la chip
        const tag = document.createElement('div');
        tag.className = 'selected-time availability-tag';
        tag.dataset.value = label.toLowerCase(); // clé pour vérifier les doublons
        tag.innerHTML = `
      <span>${label}</span>
      <button type="button" class="remove-time" aria-label="Supprimer">&times;</button>
    `;

        tag.querySelector('.remove-time').addEventListener('click', () => {
            tag.remove();
            showNote('');
        });

        availabilityList.appendChild(tag);
    });

    // Au submit : on récupère les dispos au format texte
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        const dispos = Array.from(availabilityList.querySelectorAll('.availability-tag'))
            .map(tag => tag.querySelector('span').textContent);

        console.log('DISPOS ENVOYÉES :', dispos);
        alert('Formulaire envoyé (démo) !');
    });
});