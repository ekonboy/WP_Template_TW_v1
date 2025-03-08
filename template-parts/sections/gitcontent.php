<?php

/**
 * git Content section
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

<div style="display:<?php echo ($activatedcontent == 0) ? 'none' : 'block'; ?>;">
<section class="gitcontent block md:hidden <?php echo esc_attr( $content_onlymobile == 1 ? 'md:hidden' : '' ); ?> <?php echo esc_attr('section-' . $count); ?>" style="background-color: <?php echo esc_attr($background_color); ?>">
    <div class="container">

        <div class="area-master headline" onclick="vamosalcvmaster();">Master
                
        </div>
        <div class="area-skills headline" onclick="vamosalcvskills();">Skills
        </div>
        <div class="area-logros headline" onclick="vamosalcvlogros();">Logros
        </div>

        <?php if ($content): ?>
            <?php echo $content = get_sub_field('content');
            ?>
        <?php endif; ?>

    </div>

    <script>
        /*area maps*/
        function vamosalcvmaster() {
            window.location.hash = "experiencia";
        }

        function vamosalcvskills() {
            window.location.hash = "skills";
        }

        function vamosalcvlogros() {
            window.location.hash = "logros";
        }
    </script>

</section>
</div>