<?php

/**
 * developer Content section
 *
 * @package      gabii WordPress Starter
 * @author       SQUAD WEB.
 * @since        1.0.0
 */

$count = get_query_var('prt_count');
$activatedcontent = get_sub_field('activatedcontent');
$heading = get_sub_field('heading');
$content = get_sub_field('content');
$ancho_total_texto = get_sub_field('ancho_total_texto');
$imagencontent = get_sub_field('imagencontent');
$content_onlymobile = get_sub_field('content_onlymobile');

$superior = get_sub_field('superior');

$background_color_key = get_sub_field('background_color');
$color_key = get_sub_field('background_color'); // ejemplo: 'brandPrimaryLightest'
$theme_colors = get_theme_colors();
$background_color = isset($theme_colors[$color_key]) ? $theme_colors[$color_key] : '#fff';
?>

<!-- <img src="https://dummyimage.com/4000x600/000/fff" alt="Imagen dummy" /> -->

<section class="fondo_imagen_texto block <?php echo esc_attr($content_onlymobile == 1 ? 'md:hidden' : ''); ?> <?php echo ($superior == 0) ? 'imagensuperior' : ''; ?> <?php echo esc_attr('section-' . $count); ?>" style="position: relative; overflow: hidden;">
  <?php
  if (!empty($imagencontent)) {
    $bg_url = is_array($imagencontent) ? ($imagencontent['sizes']['large'] ?? $imagencontent['url']) : $imagencontent;
  ?>
    <div class="background-fullwidth" style="background-image: url('<?php echo esc_url($bg_url); ?>');"></div>
  <?php } ?>

  <div class="container-fluid fondo_imagen_texto-content">
    <h1 class="font-semibold relative after:content[''] after:h-1 after:rounded-full after:bg-brand after:absolute after:w-12 after:content[''] after:bg-brand text-2xl lg:text-3xl mb-8 after:-bottom-3 text-slate-600 dark:after:bg-color-brand-primary-medium dark:text-white">
      <?php echo !empty($heading) ? esc_html($heading) : ''; ?>
    </h1>

    <?php echo wp_kses_post($content); ?>

  </div>
</section>
</div>