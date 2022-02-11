<?php
function nv974_load_assets() {
    // Charge le style
    // DOC ajout de fichier css : https://developer.wordpress.org/reference/functions/wp_enqueue_style/
    wp_enqueue_style(
    'main.css',
    get_theme_file_uri('assets/dist/main.css')
);

    // Charge le script js
    // DOC ajout de fichier js dans un thème https://developer.wordpress.org/reference/functions/wp_enqueue_script/
    wp_enqueue_script(
        'main-js',
        get_theme_file_uri('assets/dist/main.js'),
        [], // gestion des dépendances,
        false,
        true // nous demandons à wp de mettre le javascript dans le footer
    );
}

// lance la fonction au dessus
add_action('wp_enqueue_scripts', 'nv974_load_assets' );
