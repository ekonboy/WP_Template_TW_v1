<?php



function ocultar_editor_en_paginas() {
    remove_post_type_support('page', 'editor');
}
add_action('admin_init', 'ocultar_editor_en_paginas');


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
    // Agregar el archivo CSS compilado
    wp_enqueue_style('tailwind-css', get_template_directory_uri() . '/resources/css/app.css', array(), null);

    // Agregar el archivo JS compilado
    wp_enqueue_script('tailwind-js', get_template_directory_uri() . '/resources/js/app.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'cargar_recursos_tailwind');


function tailpress_enqueue_scripts() {
	$theme = wp_get_theme();

	wp_enqueue_style( 'tailpress', tailpress_asset( 'css/app.css' ), array(), $theme->get( 'Version' ) );
	wp_enqueue_script( 'tailpress', tailpress_asset( 'js/app.js' ), array(), $theme->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'tailpress_enqueue_scripts' );


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



//añadir menu contacto
function add_contact_button_to_menu($items, $args) {
    if ($args->theme_location == 'primary') {
        $items .= '<li class="menu-item menu-item-type-custom menu-item-object-custom lg:mx-4">
            <button data-target="#ModalContactForm" class="modal-toggle">Contacto</button>
        </li>';
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'add_contact_button_to_menu', 10, 2);


/* custom */

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
 ***************************** F O R M U L A R I O  *******************************
 *****************************************************************
 */
function procesar_formulario() {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $email = isset($_POST["email"]) ? sanitize_email($_POST["email"]) : "";
        $name = isset($_POST["name"]) ? sanitize_text_field($_POST["name"]) : "";
        $department = isset($_POST["department"]) ? sanitize_text_field($_POST["department"]) : "";

        if (!empty($email) && !empty($name)) {
            $to = "destinatario@tudominio.com"; // Cambia esto por tu correo
            $subject = "Nuevo mensaje de contacto";
            $message = "Nombre: $name\nCorreo: $email\nDepartamento: $department";
            $headers = "From: $email\r\nReply-To: $email\r\n";

            if (wp_mail($to, $subject, $message, $headers)) {
                echo json_encode(["success" => true]);
            } else {
                echo json_encode(["success" => false]);
            }
        } else {
            echo json_encode(["success" => false]);
        }
    }
}
add_action('admin_post_procesar_formulario', 'procesar_formulario'); // Para usuarios logueados
add_action('admin_post_nopriv_procesar_formulario', 'procesar_formulario'); // Para usuarios no logueados


