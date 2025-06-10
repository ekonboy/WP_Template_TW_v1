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
 ***************************** AP I  N E W S  *******************************
 *****************************************************************
 */
// ===== 1. Registrar Custom Post Type "Cursos" =====
add_action('init', function() {
    register_post_type('curso', [
        'labels' => [
            'name' => __('Cursos'),
            'singular_name' => __('Curso')
        ],
        'public' => true,
        'show_in_rest' => true,
        'rest_base' => 'cursos',
        'supports' => ['title', 'editor', 'thumbnail'],
        'menu_icon' => 'dashicons-welcome-learn-more'
    ]);
});

// ===== 2. Campos personalizados para duración =====
add_action('add_meta_boxes', function() {
    add_meta_box(
        'curso_duracion',
        'Duración del Curso',
        'mostrar_campo_duracion',
        'curso',
        'side'
    );
});

function mostrar_campo_duracion($post) {
    $duracion = get_post_meta($post->ID, 'duracion', true);
    echo '<input type="text" name="duracion" value="'.esc_attr($duracion).'" placeholder="Ej: 2h 30m">';
}

add_action('save_post', function($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if ('curso' !== $_POST['post_type']) return;
    
    update_post_meta($post_id, 'duracion', sanitize_text_field($_POST['duracion']));
});

// ===== 3. Configurar REST API =====
add_action('rest_api_init', function() {
    // Campos personalizados en la API
    register_rest_field('curso', 'duracion', [
        'get_callback' => function($post) {
            return get_post_meta($post['id'], 'duracion', true);
        },
        'schema' => [
            'description' => 'Duración del curso',
            'type' => 'string'
        ]
    ]);

    register_rest_field('curso', 'imagen', [
        'get_callback' => function($post) {
            return get_the_post_thumbnail_url($post['id'], 'medium');
        },
        'schema' => [
            'description' => 'URL de la imagen destacada',
            'type' => 'string'
        ]
    ]);

    // Endpoint de autenticación JWT
    register_rest_route('weee/v1', '/login', [
        'methods' => 'POST',
        'callback' => 'manejar_login',
        'args' => [
            'username' => ['required' => true],
            'password' => ['required' => true]
        ]
    ]);
});

// ===== 4. Manejo de autenticación JWT =====
function manejar_login(WP_REST_Request $request) {
    $credenciales = [
        'user_login' => $request['username'],
        'user_password' => $request['password'],
        'remember' => true
    ];

    $usuario = wp_signon($credenciales, false);

    if (is_wp_error($usuario)) {
        return new WP_Error(
            'autenticacion_fallida',
            'Credenciales inválidas',
            ['status' => 401]
        );
    }

    return [
        'token' => generar_jwt($usuario->ID),
        'user_email' => $usuario->user_email
    ];
}

function generar_jwt($user_id) {
    $header = base64_encode(json_encode(['alg' => 'HS256', 'typ' => 'JWT']));
    $payload = base64_encode(json_encode([
        'user_id' => $user_id,
        'exp' => time() + (7 * DAY_IN_SECONDS) // Token válido por 7 días
    ]));
    
    $clave_secreta = defined('JWT_AUTH_SECRET_KEY') ? JWT_AUTH_SECRET_KEY : 'tu_clave_secreta_única';
    $firma = hash_hmac('sha256', "$header.$payload", $clave_secreta, true);
    
    return "$header.$payload." . base64_encode($firma);
}

// ===== 5. Añadir clave secreta JWT =====
define('JWT_AUTH_SECRET_KEY', 'tu_clave_secreta_única_y_compleja_'.md5(home_url()));
