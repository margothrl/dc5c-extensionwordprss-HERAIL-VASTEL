// script.js

jQuery(document).ready(function($) {
    // Gestionnaire d'événement pour la réservation
    $('#reservator-calendar').on('click', '.fc-event', function() {
        var creneau = $(this).data('creneau'); // Récupérer le créneau
        // Afficher un formulaire de réservation ou gérer la réservation ici
    });
});
