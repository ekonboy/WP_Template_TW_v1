<?php

/**
 * developer Content section
 *
 * @package      gabii WordPress Starter
 * @author       SQUAD WEB.
 * @since        1.0.0
 */

// Obtener el índice de la sección
$count = get_query_var('prt_count');
$content = get_sub_field('content');

// Variables de estilo
$background_color = get_sub_field('background_color');
$ancho_total_texto = get_sub_field('ancho_total_texto');
$imagencontent = get_sub_field('imagencontent');

?>

<section class="developer <?php echo esc_attr('section-' . $count); ?>" style="background-color: <?php echo esc_attr($background_color); ?>">
    <div class="container" style="display: flex;gap: 10px;justify-content: center;">
 
<?php if ($imagencontent): ?>
    <div style="flex: 1; padding: 20px; display: flex; justify-content: center; align-items: center;">
            
                <img src="<?php echo esc_url($imagencontent); ?>" alt="Imagen" style="max-width: 100%; height: auto;">
            
        </div>
<?php endif; ?>











    </div>
</section>



