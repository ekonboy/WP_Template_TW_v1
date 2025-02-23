<?php

/**
 * texto-imagen section
 *
 * @package      gabii WordPress Starter
 * @author       SQUAD WEB.
 * @since        1.0.0
 */

// Obtener el índice de la sección
$count = get_query_var('prt_count');

// Variables de ACF (mejor usar get_sub_field())
$heading = get_sub_field('heading');
$content = get_sub_field('content');

// Variables de estilo
$background_color = get_sub_field('background_color');
$colordefondopuntos = get_sub_field('colordefondopuntos');
$ancho_total_texto = get_sub_field('ancho_total_texto');
$texto_centrado = get_sub_field('texto_centrado'); //text-align: justify;

$imagencontent = get_sub_field('imagencontent');
$girado = get_sub_field('girado');
$cargar_scripts = get_sub_field('cargar_scripts');


if ($cargar_scripts == '1') { ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
<?php
}
?>




<section class="texto-imagen  <?php echo esc_attr($colordefondopuntos == '1') ? 'colordefondopuntos' : '' ; ?> <?php echo esc_attr('section-' . $count); ?>" style="display: flex; justify-content: space-around; background-color: <?php echo esc_attr($background_color); ?>";>
    <div class="container flex flex-col md:flex-row especialmobileimagen" style="display: flex; flex-direction: <?php echo get_sub_field('girado') ? 'row-reverse' : ''; ?>; align-items: center; max-width: <?php echo esc_attr($ancho_total_texto); ?>px;">

        <!-- Columna 1: Heading y Content -->
        <div style="flex: 1;">
            <?php if ($heading): ?>
                <h1 class="after:left-0 font-semibold relative after:content[''] after:h-1 after:rounded-full after:bg-brand after:absolute after:w-12 text-2xl lg:text-3xl after:-bottom-3 text-slate-600 dark:text-white dark:after:bg-[#d0ff71] mb-4"><?php echo esc_html($heading); ?></h1>
            <?php endif; ?>

            <?php if ($content): ?>
                <span class="lg:text-[18px] text-[16px] text-white <?php echo get_sub_field('texto_centrado') ? 'texto-justificado' : ''; ?>">
                    <?php echo wp_kses_post($content); ?>
                </span>
            <?php endif; ?>
        </div>

        <!-- Columna 2: Imagen -->
        <div style="flex: 1; padding: 20px 0; display: flex; justify-content: center; align-items: center;">
            <?php if ($imagencontent): ?>
                <img src="<?php echo esc_url($imagencontent); ?>" alt="Imagen" style="max-width: 100%; height: auto;">
            <?php endif; ?>
        </div>

    </div>
</section>


