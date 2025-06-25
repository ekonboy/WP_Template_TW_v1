<?php

/**
 * Simpletext Content section
 *
 * @package      gabii WordPress Starter
 * @author       SQUAD WEB.
 * @since        1.0.0
 */

$count = get_query_var('prt_count');
$activatedcontent = get_sub_field('activatedcontent');
$heading = get_sub_field('heading');
$ancho_total_texto = get_sub_field('ancho_total_texto');
$justificar_texto = get_sub_field('justificar_texto');
$titulo_centrado = get_sub_field('titulo_centrado');
$ancla = get_sub_field('ancla'); 

$background_color_key = get_sub_field('background_color');
$colortext_content_key = get_sub_field('colortext_content');
$theme_colors = get_theme_colors();
$background_color = isset($theme_colors[$background_color_key]) ? $theme_colors[$background_color_key] : '#fff';
$colortext_content = isset($theme_colors[$colortext_content_key]) ? $theme_colors[$colortext_content_key] : '#000';
?>
<div class="experiencia_religiosa">
  <div style="display:<?php echo ($activatedcontent == 0) ? 'none' : 'block'; ?>;">
    <section class="simpletext-card flex justify-center flex-col md:flex-row especialdesktop <?php echo esc_attr('section-' . $count); ?>" style="background-color: <?php echo esc_attr($background_color); ?>;">

      <?php if ($ancla): ?><div id="<?php echo $ancla; ?>"></div><?php endif; ?>


      <div class="contai22ner" style="display: flex;flex-direction: column;flex-wrap: wrap;max-width: <?php echo esc_attr($ancho_total_texto); ?>px;">



      <?php if (!empty($heading)): ?>
        <h2 class="h1normal <?php echo $titulo_centrado ? 'after:left-1/2 after:translate-x-[-50%]' : 'after:left-0'; ?> font-semibold relative after:content[''] after:h-1 after:rounded-full after:bg-brand after:absolute after:w-12 after:content[''] after:bg-brand text-2xl lg:text-3xl mb-8 after:-bottom-3 text-slate-600 dark:after:bg-color-brand-primary-medium dark:text-white" style="<?php echo $titulo_centrado ? 'text-align: center;' : ''; ?>">
       
          <?php echo !empty($heading) ? esc_html($heading) : ''; ?>
        </h2>
        <?php endif; ?>


        <div class="lg:text-[18px] text-[16px]  <?php echo get_sub_field('justificar_texto'); ?>">
          <div class="onlydesktop">
            <div class="stickywp-cardswp-container wp-mainwp">
              <ul id="cardswp" class="ul-cardswp">
                <li class="cardwp-li" id="cardwp_1">
                  <a href="" class="cardwp__content"> </a>
                </li>
                <li class="cardwp-li" id="cardwp_2">
                  <a href="" class="cardwp__content"> </a>
                </li>
                <li class="cardwp-li" id="cardwp_3">
                  <a href="" class="cardwp__content"> </a>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>

    </section>
  </div>
</div>