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

$background_color  = get_sub_field('background_color');
$espacio_arriba = get_sub_field('espacio_arriba');
$espacio_abajo = get_sub_field('espacio_abajo');
?>


<div name="clearfix" class="<?php echo esc_attr( 'section-' . $count ); ?>" style="padding-top:<?php echo esc_attr($espacio_arriba);?>px;padding-bottom:<?php echo esc_attr($espacio_abajo);?>px ">
    <section class="clearfix" style="background-color: <?php echo esc_attr($background_color); ?>;">

    </section>
</div>