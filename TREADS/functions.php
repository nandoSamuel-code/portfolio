<?php
function treads_enqueue_assets() {
    $theme_dir = get_template_directory();
    $theme_uri = get_template_directory_uri();

    // Buscar archivos CSS y JS dentro de /assets
    $css_files = glob($theme_dir . '/assets/*.css');
    $js_files  = glob($theme_dir . '/assets/*.js');

    if (!empty($css_files)) {
        $css_file = basename($css_files[0]);
        wp_enqueue_style('treads-style', $theme_uri . '/assets/' . $css_file, array(), null);
    }

    if (!empty($js_files)) {
        $js_file = basename($js_files[0]);
        wp_enqueue_script('treads-script', $theme_uri . '/assets/' . $js_file, array(), null, true);
    }
}
add_action('wp_enqueue_scripts', 'treads_enqueue_assets');
