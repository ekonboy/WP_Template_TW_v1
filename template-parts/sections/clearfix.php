<?php
/**
 * Clearfix section
 *
 * @package      gabii WordPress Starter
 * @author       SQUAD WEB.
 * @since        1.0.0
 */

// Obtener el índice de la sección
$count = get_query_var('prt_count');
$activatedcontent = get_sub_field('activatedcontent');
$espacio_arriba = get_sub_field('espacio_arriba');
$espacio_abajo = get_sub_field('espacio_abajo');

$background_color_key = get_sub_field('background_color');
$color_key = get_sub_field('background_color'); // ejemplo: 'brandPrimaryLightest'
$theme_colors = get_theme_colors();
$background_color = isset($theme_colors[$color_key]) ? $theme_colors[$color_key] : '#fff';
?>

    <style> 
    .espacioarriba {margin-top: <?php echo  $espacio_arriba; ?>px;}
    .espacioabajo {margin-bottom:<?php echo  $espacio_abajo; ?>px;}
    </style>
    
<div style="display:<?php echo ($activatedcontent == 0) ? 'none' : 'block'; ?>;">
<div class="<?php echo esc_attr( 'section-' . $count ); ?> ">
    <section class="clearfix <?php echo  ($espacio_arriba) ? 'espacioarriba':''   ?> <?php echo  ($espacio_abajo) ? 'espacioabajo':''   ?>" style="background-color: <?php echo esc_attr($background_color); ?>;">
        <!-- Aquí va el contenido -->
    </section>
    
</div>
</div>
