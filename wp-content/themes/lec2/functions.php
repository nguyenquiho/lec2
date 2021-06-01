<?php
/**
 * Ensure dependencies are loaded
 */

$error_text = function ($message) {
    wp_die($message);
};

if (!file_exists($composer = __DIR__.'/vendor/autoload.php')) {
    $sage_error(
        __('You must run <code>composer install</code> from the Sage directory.', 'lec2_text_domain'),
        __('Autoloader not found.', 'lec2_text_domain')
    );
}
require_once $composer;

array_map(function ($file) use ($error_text) {

    $file = "/app/{$file}.php";
    if (!locate_template($file, true, true)) {
        $error_text(sprintf(__('Error locating <code>%s</code> for inclusion.', 'twig_theme'), $file), 'File not found');
    }
}, ['App','TwigLoader']);


\App\Container::getInstance()->bindConfig('config', [
    'assets' => require get_template_directory().'/config/assets.php',
    'theme' => require get_template_directory().'/config/theme.php',
    'view' => require get_template_directory().'/config/view.php',
])->bindApp();


/**
 * This is used for debug
 *
 * @param $var
 * @param $isDie
 */
function debug($var,$isDie = false){

    echo '<pre>';
    print_r($var);
    echo '</pre>';

    if($isDie){
        die;
    }

}

// add_filter( 'posts_where' , 'custom_post_where', 0 );
 
function custom_post_where( $where ) {
    // return str_replace("meta_key = 'training_types_$$","meta_key LIKE 'training_types_%",$where);
    // // debug($where);

    return str_replace(array("meta_key = 'training_types_$$", "meta_key = 'training_types_&&_format'"), array("meta_key LIKE 'training_types_%","meta_key LIKE 'training_types_%_format'"), $where);

}

// add_action( 'admin_init', 'update_custom_field_text_to_post' );

// function update_custom_field_text_to_post(){

    
// }

add_action('acf/save_post', 'update_custom_field_text_to_post');
function update_custom_field_text_to_post( $post_id ) {

    




}
