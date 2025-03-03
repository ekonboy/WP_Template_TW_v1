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
$activatedcontent = get_sub_field('activatedcontent');
// Variables de ACF (mejor usar get_sub_field())
$heading = get_sub_field('heading');
$content_tituloespecial = get_sub_field('content_tituloespecial');
$content_especial = get_sub_field('content_especial');
$background_color = get_sub_field('background_color');
$colortext_content = get_sub_field('colortext_content');
$colordefondopuntos = get_sub_field('colordefondopuntos');
$ancho_total_texto = get_sub_field('ancho_total_texto');
$ancho_total_texto_gap = get_sub_field('ancho_total_texto_gap');
$texto_centrado = get_sub_field('texto_centrado'); //text-align: justify;
$column_row = get_sub_field('column_row');
$imagencontent = get_sub_field('imagencontent');
$imagencontent_svg = get_sub_field('imagencontent_svg');
$girado = get_sub_field('girado');
$cargar_scripts = get_sub_field('cargar_scripts');

if ($cargar_scripts == '1') { ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
<?php
}
?>


<style>
.contenidoalreves {display: flex;flex-direction: row-reverse;}
.contenidonormal {display: flex;}
.contenidovertical{    display: flex;
    align-items: center;
    max-width: 800px;
    gap: 50px;
    flex-direction: column-reverse;
    text-align: center;
}

.after\:left-1\/2::after {
    content: var(--tw-content);
    left: 50%;
}
</style>

<div style="display:<?php echo ($activatedcontent == 0) ? 'none' : 'block'; ?>;">
<section class="texto-imagen flex <?php echo esc_attr($colordefondopuntos == '1') ? 'colordefondopuntos' : '' ; ?>" style="display: flex; justify-content: space-around; background-color: <?php echo esc_attr($background_color); ?>">

    <div class="container especialmobileimagen 
        <?php echo get_sub_field('girado') ? 'contenidoalreves' : 'contenidonormal'; ?> 
    <?php echo isset($column_row) && $column_row == '0' ? 'initial' : 'contenidovertical'; ?>" style="display: flex; align-items: center; max-width: <?php echo esc_attr($ancho_total_texto); ?>px;gap: <?php echo esc_attr($ancho_total_texto_gap); ?>px">
        <div style="flex: 1;">
            <?php if ($heading): ?>

                <h1 class="<?php echo $texto_centrado ? 'after:left-1/2 after:translate-x-[-50%]' : 'after:left-0'; ?> font-semibold relative after:content[''] after:h-1 after:rounded-full after:bg-brand after:absolute after:w-12 after:content[''] after:bg-brand text-2xl lg:text-3xl mb-8 after:-bottom-3 <?php echo ($background_color === 'transparent') ? 'text-[#0e0f11] dark:text-white' : 'text-white' ; ?> dark:after:bg-[#d0ff71]" style="<?php echo $texto_centrado ? 'text-align: center;' : ''; ?>">
                
                <?php echo !empty($heading) ? esc_html($heading) : ''; ?>
                </h1> 

            <?php endif; ?>

            <?php if ($content_tituloespecial): ?>
                <div class="lg:text-[18px] text-[16px] <?php echo ($background_color === 'transparent') ? 'text-[#0e0f11] dark:text-white' : 'text-white' ; ?> <?php echo (get_sub_field('column_row') && get_sub_field('texto_centrado')) ? 'contenidovertical texto-justificado' : ''; ?>">
                    <?php echo wp_kses_post($content_tituloespecial); ?>
            </div>
            <?php endif; ?>

      
        <?php if ($content_especial): ?>
            <div class="solo-grande lg:text-[18px] text-[16px] lg:w-[calc(80%-20px)] <?php echo ($background_color === 'transparent') ? 'text-[#0e0f11] dark:text-white' : 'text-white' ; ?> <?php echo get_sub_field('texto_centrado') ? 'texto-justificado' : ''; ?>" >

                    <?php echo wp_kses_post($content_especial); ?>
                </div>
            <?php endif; ?>
        </div>

<!-- Columna 2: Imagen -->
        <div style="flex: 1; padding: 20px 0; display: flex; justify-content: center; align-items: center;">
            <?php if ($imagencontent): ?>
                <img src="<?php echo esc_url($imagencontent); ?>" alt="Imagen" style="max-width: 100%; height: auto;">
            <?php else: ?>
                <div class="<?php echo esc_html($imagencontent_svg); ?>"></div>
            <?php endif; ?>
        </div>

    </div>

</section>
</div>