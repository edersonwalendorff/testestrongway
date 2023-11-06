<?php
/*
Plugin Name: Meu Plugin de Pássaros
*/

// Registrar o post type "Pássaros"
function registrar_passaros_post_type() {
    $labels = array(
        'name' => 'Pássaros',
        'singular_name' => 'Pássaro',
        // Adicione outros rótulos conforme necessário
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'), // Adicione suportes adicionais conforme necessário
    );

    register_post_type('passaros', $args);
}
add_action('init', 'registrar_passaros_post_type');

// Registrar a taxonomia "Região" e associá-la ao post type "Pássaros"
function registrar_regiao_taxonomy() {
    $args = array(
        'hierarchical' => true,
        'labels' => array(
            'name' => 'Região',
            'singular_name' => 'Região',
            // Adicione outros rótulos conforme necessário
        ),
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'regiao'), // Slug personalizado para a taxonomia
    );

    register_taxonomy('regiao', 'passaros', $args);
}
add_action('init', 'registrar_regiao_taxonomy');
