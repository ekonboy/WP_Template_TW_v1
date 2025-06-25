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
$heading2 = get_sub_field('heading2');
$ancho_total_texto = get_sub_field('ancho_total_texto');
$titulo_grande = get_sub_field('titulo_grande');

$background_color_key = get_sub_field('background_color');
$color_key = get_sub_field('background_color'); // ejemplo: 'brandPrimaryLightest'
$theme_colors = get_theme_colors();
$background_color = isset($theme_colors[$color_key]) ? $theme_colors[$color_key] : '#fff';
?>


<div style="display:<?php echo ($activatedcontent == 0) ? 'none' : 'block'; ?>;">
  <section class="slider_content_fondo flex justify-center flex-col md:flex-row especialdesktop <?php echo esc_attr('section-' . $count); ?>" style="background-color: <?php echo esc_attr($background_color); ?>;">

    <?php if (have_rows('contenido_grid')): ?>
      <section class="game-section_fondo">

            <?php if ($heading): ?>
                <h2 class="h3hero tituloslider">
                    <?php echo esc_html($heading); ?><br />
                    <?php if (!empty($heading2)): ?>
                        <span class="clase-heading2"><?php echo esc_html($heading2); ?></span>
                        
                    <?php endif; ?>
                </h2>
            <?php endif; ?>

        <div class="owl-carousel custom-carousel owl-theme">
          <?php 
          $counter = 0;
          while (have_rows('contenido_grid')): the_row();
            $icono = get_sub_field('grid_logo'); // Usamos esta imagen como fondo
            $titulo = get_sub_field('grid_titulo');
            $texto = get_sub_field('grid_texto');
            $color = get_sub_field('grid_color');
          ?>
          <div class="itemslider_fondo <?php echo ($counter === 0) ? 'active' : ''; ?>" 
               style="background-image: url('<?php echo esc_url($icono['url']); ?>'); background-size: cover; background-position: center; position: relative;">
            <div class="overlay_fondo"></div>
            
              <div class="galleria__item-inner_fondo <?php echo esc_attr($titulo_grande == '0') ? 'slidertitulo' : 'textotitulgran' ;?>" 
                   style="color: <?php echo $color ? esc_attr($color) : '#fff'; ?>; position: relative; z-index: 2;">
              
                <?php echo nl2br(esc_html($titulo)); ?>
                
                <div class="textolittel_slider_fondo">
                  <?php echo esc_html($texto); ?>
                </div>
              </div>
            
          </div>
          <?php 
            $counter++;
          endwhile; ?>
        </div>
      </section>
    <?php endif; ?>

  </section>
</div>

<script>
  $(".custom-carousel").owlCarousel({
    autoWidth: true,
    loop: false,
    stagePadding: 100,
    startPosition: 0,
    responsive: {
      0: {
        stagePadding: 50
      },
      768: {
        stagePadding: 100
      }
    }
  });
</script>
