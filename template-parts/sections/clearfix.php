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
$background_color  = get_sub_field('background_color');
$espacio_arriba = get_sub_field('espacio_arriba');
$espacio_abajo = get_sub_field('espacio_abajo');
?>

<style>
    /* Condicional para manejar valores nulos o vacíos */
    /* .espacioarriba { margin-top: <php echo ($espacio_arriba !== null && $espacio_arriba !== '' && $espacio_arriba !== 0) ? intval($espacio_arriba) / 5 : '0'; ?>px; }
    .espacioabajo { margin-bottom: <php echo ($espacio_abajo !== null && $espacio_abajo !== '' && $espacio_abajo !== 0) ? intval($espacio_abajo) / 5 : '0'; ?>px; } */

    .espacioarriba {<?php echo  $espacio_arriba; ?>}
 .espacioabajo {<?php echo  $espacio_abajo; ?>}

    @media only screen and (max-width: 768px) {
        /* Asegúrate de que los valores sean válidos */
        /* .espacioarriba { margin-top: <php echo ($espacio_arriba !== null && $espacio_arriba !== '') ? intval($espacio_arriba) : '0'; ?>px; }
        .espacioabajo { margin-bottom: <php echo ($espacio_abajo !== null && $espacio_abajo !== '') ? intval($espacio_abajo) : '0'; ?>px; } */
    }
</style>
<div style="display:<?php echo ($activatedcontent == 0) ? 'none' : 'block'; ?>;">
<div class="<?php echo esc_attr( 'section-' . $count ); ?> ">




    <!-- <php echo ($espacio_abajo !== null && $espacio_abajo !== '') ? 'espacioabajo' : ''; ?>" > -->

    <section class="clearfix <?php echo  ($espacio_arriba) ? 'espacioarriba':''   ?> <?php echo  ($espacio_abajo) ? 'espacioabajo':''   ?>" style="background-color: <?php echo esc_attr($background_color); ?>;">
        <!-- Aquí va el contenido -->
    </section>
    
</div>
</div>
