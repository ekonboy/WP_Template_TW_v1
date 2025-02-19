<?php
/**
 * Simpletext Content section
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
$ancho_total_texto = get_sub_field('ancho_total_texto');
$texto_centrado = get_sub_field('texto_centrado'); //text-align: justify;
$titulo_centrado = get_sub_field('titulo_centrado');
$ancla = get_sub_field('ancla');
$content_year = get_sub_field('content_year');
$empresa = get_sub_field('empresa');
?>


<section class="simpletext-content flex justify-center flex-col md:flex-row especialdesktop <?php echo esc_attr('section-' . $count); ?>" style="background-color: <?php echo esc_attr($background_color); ?>;">

<?php if ($ancla): ?><div id="<?php echo $ancla ;?>"></div><?php endif; ?>
    <?php if ($content_year): ?><div class="icon-box"><?php echo $content_year ;?></div><?php endif; ?>
    <div class="container" style="display: flex;flex-direction: column;flex-wrap: wrap;max-width: <?php echo esc_attr($ancho_total_texto); ?>px;">

    <h1 class="lg:text-5xl text-[30px] mb-4" style="<?php echo $titulo_centrado ? 'text-align: center;' : ''; ?>">
                <?php echo !empty($heading) ? esc_html($heading) : ''; ?>
                </h1>

                <?php if ($empresa): ?>
                <div class="empresa"><?php echo $empresa ;?></div>
                <?php endif; ?>

        <?php if ($content): ?>
            <span class="lg:text-[18px] text-[16px] <?php echo get_sub_field('texto_centrado') ? 'texto-justificado' : ''; ?>"><?php echo wp_kses_post($content); ?></span>
        <?php endif; ?>
    </div>
</section>



