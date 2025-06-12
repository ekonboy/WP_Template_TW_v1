<?php
function get_theme_colors() {
    static $colors = null;
    if ($colors === null) {
        $colors = require get_template_directory() . '/inc/theme-colors.php';
    }
    return $colors;
}
?>
