<?php

/*
 *****************************************************************
 ***************************** G U T T E M B E R *******************************
 *****************************************************************
 */
function ocultar_editor_en_paginas() {
    remove_post_type_support('page', 'editor');
}
add_action('admin_init', 'ocultar_editor_en_paginas');


/*
 *****************************************************************
 ***************************** C O R S *******************************
 *****************************************************************
 */
// custom CORS fonts
function add_cors_headers() {
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type");
}
add_action('send_headers', 'add_cors_headers');


/*
 *****************************************************************
 ***************************** A C F *******************************
 *****************************************************************
 */
add_filter('acf/settings/show_admin', '__return_true'); // Opcional, para seguir viendo el admin

add_filter('acf_pro_license', '__return_null'); // Evita guardar una licencia

add_filter('acf_pro_license_key', '__return_false'); // Evita validar con clave

remove_action('admin_init', 'acf_pro_check_license');

add_filter('acf/settings/license', '__return_null');


/*
 *****************************************************************
 ***************************** C O N F I G *******************************
 *****************************************************************
 */
if (defined('WP_ENV') && WP_ENV === 'development') {
    add_filter('acf/settings/license', '__return_null');
    remove_action('admin_init', 'acf_pro_check_license');
}



if (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) {
    // filtros aquí
}







/**
 * Theme setup.
 */
function tailpress_setup() {
	add_theme_support( 'title-tag' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'tailpress' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

    add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );

	add_theme_support( 'responsive-embeds' );

	add_theme_support( 'editor-styles' );
	add_editor_style( 'css/editor-style.css' );
}

add_action( 'after_setup_theme', 'tailpress_setup' );

/**
 * Enqueue theme assets.
 */


 /*
 *****************************************************************
 ***************************** TAILWIND *******************************
 *****************************************************************
 */ 

function cargar_recursos_tailwind() {
    wp_enqueue_style('tailwind-css', get_template_directory_uri() . '/resources/css/app.css', array(), null);
    wp_enqueue_script('tailwind-js', get_template_directory_uri() . '/resources/js/app.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'cargar_recursos_tailwind');


function theme_enqueue_styles() {
    wp_enqueue_style('main', get_template_directory_uri() . '/public/css/main.css', array(), null);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');





// function tailpress_enqueue_scripts() {
// 	$theme = wp_get_theme();

// 	wp_enqueue_style( 'tailpress', tailpress_asset( 'css/main.css' ), array(), $theme->get( 'Version' ) );
// 	wp_enqueue_script( 'tailpress', tailpress_asset( 'js/app.js' ), array(), $theme->get( 'Version' ) );
// }
// add_action( 'wp_enqueue_scripts', 'tailpress_enqueue_scripts' );


function cargar_estilos_adicionales() {
    wp_enqueue_style('iconos-css', get_template_directory_uri() . '/resources/css/icons.css', array(), null, 'all');
    wp_enqueue_style('custom-svg-css', get_template_directory_uri() . '/resources/css/customsvg.css', array(), null, 'all');
}
add_action('wp_enqueue_scripts', 'cargar_estilos_adicionales');



function cargar_scripts_adicionales() {
    wp_enqueue_script('scripts-js', get_template_directory_uri() . '/resources/js/scripts.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'cargar_scripts_adicionales');




/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function tailpress_asset( $path ) {
	if ( wp_get_environment_type() === 'production' ) {
		return get_stylesheet_directory_uri() . '/' . $path;
	}

	return add_query_arg( 'time', time(),  get_stylesheet_directory_uri() . '/' . $path );
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_li_class( $classes, $item, $args, $depth ) {
	if ( isset( $args->li_class ) ) {
		$classes[] = $args->li_class;
	}

	if ( isset( $args->{"li_class_$depth"} ) ) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'tailpress_nav_menu_add_li_class', 10, 4 );

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_submenu_class( $classes, $args, $depth ) {
	if ( isset( $args->submenu_class ) ) {
		$classes[] = $args->submenu_class;
	}

	if ( isset( $args->{"submenu_class_$depth"} ) ) {
		$classes[] = $args->{"submenu_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_submenu_css_class', 'tailpress_nav_menu_add_submenu_class', 10, 3 );



/* custom */
/*
 *****************************************************************
 ***************************** U P L O A D S V G *******************************
 *****************************************************************
 */
function permitir_svg_subidas($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'permitir_svg_subidas');



/*
 *****************************************************************
 ***************************** A C F *******************************
 *****************************************************************
 */

function render_flexible_content() {
    if (have_rows('sections')) : 
        $count = 0; // Inicializa el contador

        while (have_rows('sections')) : the_row();
            $count++; // Incrementa en cada iteración
            set_query_var('prt_count', $count); // Establece el número de sección

            $layout = get_row_layout(); // Obtiene el nombre del layout
            get_template_part("template-parts/sections/{$layout}"); 
        endwhile;
    endif;
}

/*
 *****************************************************************
 ***************************** H E L P E R S  ********************
 *****************************************************************
 */
// Cargar helpers y colores
require_once get_template_directory() . '/inc/helpers.php';


/*
 *****************************************************************
 ***************************** P R E V I E W  ********************
 *****************************************************************
 */
function my_acf_admin_head() {
    $siteURL = get_site_url();
    ?>
    <style type="text/css">
        .imagePreview { 
            position: absolute; 
            right: 100%; 
            top: 0px; 
            z-index: 999999; 
            border: 1px solid #f2f2f2; 
            box-shadow: 0px 0px 3px #b6b6b6; 
            background-color: #fff; 
            padding: 20px;
        }
        .imagePreview img { 
            width: 300px; 
            height: auto; 
            display: block; 
        }
        .acf-tooltip li:hover { 
            background-color: #0074a9; 
        }
    </style>
    <script>
    jQuery(document).ready(function($) {
        // Helper para esperar a que el elemento exista
        function waitForEl(selector, callback) {
            if ($(selector).length) {
                callback();
            } else {
                setTimeout(function() { waitForEl(selector, callback); }, 100);
            }
        }

        // Cuando se hace click en "Agregar layout"
        $('a[data-name=add-layout]').click(function(){
            waitForEl('.acf-tooltip li', function() {
                $('.acf-tooltip li a').hover(function(){
                    var imageTP = $(this).attr('data-layout');
                    $('.acf-tooltip').append(
                        '<div class="imagePreview"><img src="<?php echo $siteURL; ?>/wp-content/themes/tailpress-master/template-parts/preview/' + imageTP + '.png"></div>'
                    );
                }, function(){
                    $('.imagePreview').remove();
                });
            });
        });
    });
    </script>
    <?php
}
add_action('acf/input/admin_head', 'my_acf_admin_head');


