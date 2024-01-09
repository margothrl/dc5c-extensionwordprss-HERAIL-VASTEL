<?php
// Assurez-vous que cette page n'est pas directement accessible
if (!defined('ABSPATH')) {
    exit;
}

// Inclure les fichiers JavaScript et CSS nécessaires
function reservator_enqueue_scripts() {
    // Inclure les fichiers JavaScript et CSS nécessaires ici
    wp_enqueue_script('fullcalendar', 'URL_vers_fullcalendar.js', array('jquery'), '5.10.0', true);
    wp_enqueue_style('fullcalendar-css', 'URL_vers_fullcalendar.css');
}

add_action('wp_enqueue_scripts', 'reservator_enqueue_scripts');

// Fonctions pour gérer les créneaux et les réservations
$creneaux_disponibles = array(
    'lundi_matin' => 'Lundi matin',
    'lundi_apres_midi' => 'Lundi après-midi',
    'mardi_matin' => 'Mardi matin',
    'mardi_apres_midi' => 'Mardi après-midi',
    'mercredi_matin' => 'Mercredi matin',
    'mercredi_apres_midi' => 'Mercredi après-midi',
    'jeudi_matin' => 'Jeudi matin',
    'jeudi_apres_midi' => 'Jeudi après-midi',
    'vendredi_matin' => 'Vendredi matin',
    'vendredi_apres_midi' => 'Vendredi après-midi'
);

// Afficher les créneaux dans le calendrier
function reservator_calendar_shortcode() {
    ob_start();
    ?>
    <div id="reservator-calendar"></div>
    <script>
        jQuery(document).ready(function($) {
            $('#reservator-calendar').fullCalendar({
                events: [
                    <?php
                    foreach ($creneaux_disponibles as $creneau_slug => $creneau_nom) {
                        echo "{";
                        echo "title: '$creneau_nom',";
                        echo "start: '2023-09-25T08:00:00',"; // Date et heure de début
                        echo "end: '2023-09-25T12:00:00',";   // Date et heure de fin
                        echo "url: '#',"; // Lien pour effectuer la réservation (à implémenter)
                        echo "},";
                    }
                    ?>
                ],
                // Autres options de configuration du calendrier
            });
        });
    </script>
    <?php
    return ob_get_clean();
}

add_shortcode('reservator_calendar', 'reservator_calendar_shortcode');
?>
