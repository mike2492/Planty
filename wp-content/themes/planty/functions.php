<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

if(class_exists('MultiPostThumbnails')){
    new MultiPostThumbnails(array(
        'label' => 'Branche gauche',
        'id' => 'branche-gauche',
        'post_type' => 'page'
    ));

    new MultiPostThumbnails(array(
        'label' => 'Boisson planty',
        'id' => 'boisson-planty',
        'post_type' => 'page'
    ));

    new MultiPostThumbnails(array(
        'label' => 'Branche droite',
        'id' => 'branche-droite',
        'post_type' => 'page'
    ));

    new MultiPostThumbnails(array(
        'label' => 'Fraise',
        'id' => 'fraise',
        'post_type' => 'page'
    ));

    new MultiPostThumbnails(array(
        'label' => 'Pamplemousse',
        'id' => 'pamplemousse',
        'post_type' => 'page'
    ));

    new MultiPostThumbnails(array(
        'label' => 'Framboise',
        'id' => 'framboise',
        'post_type' => 'page'
    ));

    new MultiPostThumbnails(array(
        'label' => 'Citron',
        'id' => 'citron',
        'post_type' => 'page'
    ));

    new MultiPostThumbnails(array(
        'label' => 'Fatiha',
        'id' => 'fatiha',
        'post_type' => 'page'
    ));

    new MultiPostThumbnails(array(
        'label' => 'Véro',
        'id' => 'vero',
        'post_type' => 'page'
    ));

    new MultiPostThumbnails(array(
        'label' => 'Marc',
        'id' => 'marc',
        'post_type' => 'page'
    ));

    new MultiPostThumbnails(array(
        'label' => 'Fleur 1',
        'id' => 'fleur-1',
        'post_type' => 'page'
    ));

    new MultiPostThumbnails(array(
        'label' => 'Mégane',
        'id' => 'megane',
        'post_type' => 'page'
    ));

    new MultiPostThumbnails(array(
        'label' => 'Brooke',
        'id' => 'brooke',
        'post_type' => 'page'
    ));

    new MultiPostThumbnails(array(
        'label' => 'Sylvie',
        'id' => 'sylvie',
        'post_type' => 'page'
    ));

    new MultiPostThumbnails(array(
        'label' => 'Fleur 2',
        'id' => 'fleur-2',
        'post_type' => 'page'
    ));
}

add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );
function add_extra_item_to_nav_menu( $items, $args ) { 
    if (is_user_logged_in() && $args->menu->name == 'navigation') {
        $items .= '<li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="'. get_admin_url() .'">Admin</a ></li>';
    }
    return $items;
}
?>