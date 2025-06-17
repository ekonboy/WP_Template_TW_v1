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
$content = get_sub_field('content');
$ancho_total_texto = get_sub_field('ancho_total_texto');
$imagencontent = get_sub_field('imagencontent');
$content_onlymobile = get_sub_field('content_onlymobile');

$background_color_key = get_sub_field('background_color');
$color_key = get_sub_field('background_color'); // ejemplo: 'brandPrimaryLightest'
$theme_colors = get_theme_colors();
$background_color = isset($theme_colors[$color_key]) ? $theme_colors[$color_key] : '#fff';
?>

<style>





</style>



<section class="slider_content block <?php echo esc_attr($content_onlymobile == 1 ? 'md:hidden' : ''); ?> <?php echo esc_attr('section-' . $count); ?>" style="display: flex;flex-direction: column;flex-wrap: nowrap;align-content: space-between;justify-content: center;background-color: <?php echo esc_attr($background_color); ?>">
  <div class="container">
    <?php if ($imagencontent): ?>
      <div style="flex: 1; padding: 20px; display: flex; justify-content: center; align-items: center;">
        <img src="<?php echo esc_url($imagencontent); ?>" alt="Imagen" style="max-width: 100%; height: auto;">
      </div>
    <?php endif; ?>

    <?php if ($content): ?>
      <?php echo $content = get_sub_field('content');
      ?>
    <?php endif; ?>
  </div>


  <script>

  
  </script>

</section>
    </div>
