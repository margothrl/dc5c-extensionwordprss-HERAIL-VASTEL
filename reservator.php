<?php
/*
Plugin Name: Reservator
Description: Plugin de réservation de créneaux.
Version: 1.0
Author: Olivier VASTEL & Margot HERAIL
*/

// Activation du plugin
register_activation_hook(__FILE__, 'reservator_activate');

function reservator_activate() {
    // Code d'activation (si nécessaire)
}

// Inclure le fichier du calendrier
require_once plugin_dir_path(__FILE__) . 'calendar.php';
?>
