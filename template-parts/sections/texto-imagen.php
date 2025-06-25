<?php

/**
 * texto-imagen section
 *
 * @package      gabii WordPress Starter
 * @author       SQUAD WEB.
 * @since        1.0.0
 */

$count = get_query_var('prt_count');
$activatedcontent = get_sub_field('activatedcontent');
$heading = get_sub_field('heading');
$heading2 = get_sub_field('heading2');//color
$heading3 = get_sub_field('heading3');
$button_title = get_sub_field('button_title');
$button_title_link = get_sub_field('button_title_link');
$button_design = get_sub_field('button_design');
$content_tituloespecial = get_sub_field('content_tituloespecial');
$content_especial = get_sub_field('content_especial');
$colordefondopuntos = get_sub_field('colordefondopuntos');
$ancho_total_texto = get_sub_field('ancho_total_texto');
$ancho_total_texto_gap = get_sub_field('ancho_total_texto_gap');
$texto_centrado = get_sub_field('texto_centrado'); //text-align: justify;
$column_row = get_sub_field('column_row');
$imagencontent = get_sub_field('imagencontent');
$imagencontent_svg = get_sub_field('imagencontent_svg');
$imagen_align = get_sub_field('imagen_align');
$girado = get_sub_field('girado');
$cargar_scripts = get_sub_field('cargar_scripts');

if ($cargar_scripts == '1') { ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
<?php
}

$button_classes = [
    'btn_amarillotexto-imagen', // 0
    'btn_negrotexto-imagen',    // 1
    'btn_gristexto-imagen',     // 2
    'btn_degstexto-imagen'      // 3
];
$classbuttondesign = $button_classes[$button_design] ?? 'btn_amarillotexto-imagen';


$background_color_key = get_sub_field('background_color');
$colortext_content_key = get_sub_field('colortext_content');
$theme_colors = get_theme_colors();

$background_color = isset($theme_colors[$background_color_key]) ? $theme_colors[$background_color_key] : '#fff';
$colortext_content = isset($theme_colors[$colortext_content_key]) ? $theme_colors[$colortext_content_key] : '#000';

?>
 
<div style="display:<?php echo ($activatedcontent == 0) ? 'none' : 'block'; ?>;">
    <section id="<?php echo esc_attr('section-' . $count); ?>" class="texto-imagen flex <?php echo esc_attr($colordefondopuntos == '1') ? 'colordefondopuntos' : ''; ?> <?php echo esc_attr('section-' . $count); ?>" style="display: flex; justify-content: space-around; background-color: <?php echo esc_attr($background_color); ?>">

        <div class="especialmobileimagen 
        <?php echo get_sub_field('girado') ? 'contenidoalreves' : 'contenidonormal'; ?> 
    <?php echo isset($column_row) && $column_row == '0' ? 'initial' : 'contenidovertical'; ?>" style="display: flex; align-items: center; max-width: <?php echo esc_attr($ancho_total_texto); ?>px;gap: <?php echo esc_attr($ancho_total_texto_gap); ?>px">
            <div class="lineahoriizq" style="flex: 1;">
                <?php if ($heading): ?>

                    <h1 class="h1normal 
                        <?php echo isset($texto_centrado) && $texto_centrado ? 'after:left-1/2 after:translate-x-[-50%] no-before' : ''; ?> 
                        <?php echo isset($texto_centrado) && !$texto_centrado ? '' : ''; ?> 
                        p-4 font-semibold relative 
                        <?php echo isset($texto_centrado) && $texto_centrado ? 'after:content[\'\'] after:h-1 after:rounded-full after:bg-color-brand-primary-medium after:absolute after:w-full' : ''; ?>
                        text-2xl lg:text-3xl mb-8 after:-bottom-3 
                        <?php echo ($background_color === 'transparent') ? 'text-[#00e785] dark:text-[#00e785]' : 'text-[#00e785]'; ?> 
                        dark:after:bg-color-brand-primary-medium"
                                                style="<?php echo isset($texto_centrado) && $texto_centrado ? 'text-align: center;' : ''; ?>">
                                                <span class="clase-heading2"><?php echo !empty($heading2) ? wp_kses_post($heading2) : ''; ?></span><?php echo !empty($heading) ? wp_kses_post($heading) : ''; ?><?php echo !empty($heading3) ? wp_kses_post($heading3) : ''; ?>
                    </h1>


                <?php endif; ?>

                <?php if ($content_tituloespecial): ?>
                    <div class="hero-description p-4 <?php echo ($background_color === 'transparent') ? 'text-[#0e0f11] dark:text-white' : 'text-white'; ?> <?php echo (get_sub_field('column_row') && get_sub_field('texto_centrado')) ? 'contenidovertical texto-justificado' : ''; ?>">
                        <?php echo wp_kses_post($content_tituloespecial); ?>

                        <?php if ($button_title): ?>
                            <a href="<?php echo esc_url($button_title_link); ?>" target="_blank">
                                <div class="btnbase_textoimagenen <?php echo ($classbuttondesign); ?>">
                                    <?php echo wp_kses_post($button_title); ?>
                                </div>
                            </a>
                        <?php endif; ?>

                    </div>
                <?php endif; ?>

                <?php if ($content_especial): ?>
                    <div class="solo-grande hero-description lg:w-[calc(80%-20px)] p-4 <?php echo ($background_color === 'transparent') ? 'text-[#0e0f11] dark:text-white' : 'text-white'; ?> <?php echo get_sub_field('texto_centrado') ? 'texto-justificado' : ''; ?>">
                        <?php echo wp_kses_post($content_especial); ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Columna 2: Imagen ;-->
            <div class="lineahorider" style="flex: 1; padding: 20px 0; display: flex; justify-content: center; align-items: center; <?php echo ($imagen_align == 0) ? 'justify-content: flex-start;' : 'justify-content: flex-end;'; ?>">
                <?php if ($imagencontent): ?>
                    <img src="<?php echo esc_url($imagencontent); ?>" alt="gabii rese FSD" style="max-width: 100%; height: auto;padding:15px">
                <?php else: ?>
                    <div class="<?php echo esc_html($imagencontent_svg); ?>"></div>
                <?php endif; ?>
            </div>

        </div>
    </section>

</div>