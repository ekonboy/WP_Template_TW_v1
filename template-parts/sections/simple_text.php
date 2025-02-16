<?php
/**
 * Simple text section
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
$tooltipintext = get_sub_field('tooltipintext');
?>

<section class="simple-text <?php echo esc_attr('section-' . $count); ?>" style="background-color: <?php echo esc_attr($background_color); ?>;">
    <div class="container">
        <?php if ($heading): ?>
            <h2><?php echo esc_html($heading); ?></h2>
        <?php endif; ?>
        
        <?php if ($content): ?>
            <p><?php echo wp_kses_post($content); ?></p>
        <?php endif; ?>

        <?php if ($tooltipintext): ?>
            <span class="tooltip"><?php echo esc_html($tooltipintext); ?></span>
        <?php endif; ?>
    </div>
</section>


