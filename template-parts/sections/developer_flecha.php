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
$activatedcontent = get_sub_field('activatedcontent');
$content = get_sub_field('content');
$background_color = get_sub_field('background_color');
$ancho_total_texto = get_sub_field('ancho_total_texto');
$imagencontent = get_sub_field('imagencontent');
$content_onlymobile = get_sub_field('content_onlymobile');
?>

<style>
    .arrowcv {
        width: 30px;
        height: 30px;
        animation: moveArrow 2s infinite;
        margin: 0 auto;
        display: flex;
    }

    @keyframes moveArrow {
        0% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(20px);
        }

        100% {
            transform: translateY(0);
        }
    }

    .ni-arrow-up {
        opacity: 0.5;
        font-size: 90px;
        font-weight: 600;
    }
</style>

<div style="display:<?php echo ($activatedcontent == 0) ? 'none' : 'block'; ?>;">
    <section class="developer block <?php echo esc_attr($content_onlymobile == 1 ? 'md:hidden' : ''); ?> <?php echo esc_attr('section-' . $count); ?>" style="display: flex;flex-direction: column;flex-wrap: nowrap;align-content: space-between;justify-content: center;background-color: <?php echo esc_attr($background_color); ?>">

        <?php if ($imagencontent): ?>
            <div style="flex: 1; padding: 20px; display: flex; justify-content: center; align-items: center;">

                <img src="<?php echo esc_url($imagencontent); ?>" alt="Imagen" style="max-width: 100%; height: auto;">

            </div>
        <?php endif; ?>

        <?php if ($content): ?>
            <?php echo $content = get_sub_field('content');
            ?>
        <?php endif; ?>

</section>
</div>
