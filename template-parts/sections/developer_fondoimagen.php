<?php

/**
 * developer fondo imagen Content section
 *
 * @package      gabii WordPress Starter
 * @author       SQUAD WEB.
 * @since        1.0.0
 */

$count = get_query_var('prt_count');
$activatedcontent = get_sub_field('activatedcontent');
$content = get_sub_field('content');
$background_color = get_sub_field('background_color');
$ancho_total_texto = get_sub_field('ancho_total_texto');
$content_onlymobile = get_sub_field('content_onlymobile');
$visible_on = get_sub_field('visible_on');
// 0 : Mobile
// 1 : Desktop
?>
<div style="display:<?php echo ($activatedcontent == 0) ? 'none' : 'block'; ?>;">
  <section class="developer_fondoimagen <?php echo esc_attr(($visible_on == 0 ? 'block md:hidden' : 'hidden md:block')); ?> <?php echo esc_attr('section-' . $count); ?>" style="flex-direction: column;flex-wrap: nowrap;align-content: space-between;justify-content: center;background-color: <?php echo esc_attr($background_color); ?>">
    <div class="container">
      <?php if ($content): ?>
        <?php echo $content = get_sub_field('content');
        ?>
      <?php endif; ?>
    </div>
  </section>
</div>