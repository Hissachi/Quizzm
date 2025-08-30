<?php
// Carregar estilos do Tailwind
function quizzm_enqueue_styles() {
    wp_enqueue_style(
        'quizzm-tailwind', 
        get_template_directory_uri() . '/assets/css/tailwind.css',
        array(),
        filemtime(get_template_directory() . '/assets/css/tailwind.css')
    );
}
add_action('wp_enqueue_scripts', 'quizzm_enqueue_styles');

// Configurações do tema
function quizzm_theme_setup() {
    // Suporte a título
    add_theme_support('title-tag');
    
    // Suporte a thumbnails
    add_theme_support('post-thumbnails');
    
    // Suporte a logos customizados
    add_theme_support('custom-logo');
    
    // Suporte a menus
    register_nav_menus(array(
        'primary' => 'Menu Principal',
        'footer' => 'Menu do Rodapé'
    ));
}
add_action('after_setup_theme', 'quizzm_theme_setup');

// Adicionar classes Tailwind aos menus
function quizzm_menu_classes($classes, $item, $args) {
    if ($args->theme_location == 'primary') {
        $classes[] = 'text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'quizzm_menu_classes', 1, 3);
?>