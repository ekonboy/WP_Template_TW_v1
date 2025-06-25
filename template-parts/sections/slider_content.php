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
$izquierda = get_sub_field('izquierda');

$background_color_key = get_sub_field('background_color');
$color_key = get_sub_field('background_color'); // ejemplo: 'brandPrimaryLightest'
$theme_colors = get_theme_colors();
$background_color = isset($theme_colors[$color_key]) ? $theme_colors[$color_key] : '#fff';
?>
<?php
$iconos = [
  '<em class="ni ni-comments"></em>',
  '<em class="ni ni-list-thumb-fill"></em>',
  '<em class="ni ni-masonry"></em>',
  '<em class="ni ni-layers"></em>',
  '<em class="ni ni-clipboad-check-fill"></em>',
  '<em class="ni ni-archive-fill"></em>',
  '<em class="ni ni-plus-medi-fill"></em>',
  '<em class="ni ni-cross-c"></em>'
];
?>


<div style="display:<?php echo ($activatedcontent == 0) ? 'none' : 'block'; ?>;">
  <section class="slider_content flex justify-center flex-col md:flex-row especialdesktop <?php echo esc_attr('section-' . $count); ?>" style="background-color: <?php echo esc_attr($background_color); ?>;">

    <?php if (have_rows('contenido_grid')): ?>
      <section class="game-section">

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
            $icono = get_sub_field('grid_logo');
            $titulo = get_sub_field('grid_titulo');
            $texto = get_sub_field('grid_texto');
            $color = get_sub_field('grid_color');
          ?>

            <div class="itemslider <?php echo ($counter === 0) ? 'active' : ''; ?> ">
              <div class="item-desc">
                <div class="galleria__item-inner <?php echo (!$izquierda == '0') ? '' : 'izquierda'; ?>"
                  style="color: <?php echo $color ? esc_attr($color) : '#fff'; ?>">

                  <?php if ($icono && !empty($icono['url'])): ?>
                    <div class="slider-icon-container">
                      <img src="<?php echo esc_url($icono['url']); ?>"
                        alt="<?php echo esc_attr($icono['alt']); ?>"
                        class="slider-icon" />
                    </div>
                  <?php else: ?>
                    <div class="slider-icon-container">
                      <?php echo $iconos[$counter % count($iconos)]; ?>
                    </div>
                  <?php endif; ?>


                  <span class="slidertitulo"><?php echo nl2br(esc_html($titulo)); ?></span>

                  <div class="textolittel_slider <?php echo (!$izquierda == '0') ? '' : 'izquierda'; ?>">
                    <?php echo esc_html($texto); ?>
                  </div>
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
    loop: false
  });



  //   $(".custom-carousel").owlCarousel({
  //   autoWidth: true,
  //   loop: false,
  //   stagePadding: 100, // Espacio inicial a la izquierda
  //   startPosition: 0, // Comienza desde la primera posición
  //   responsive: {
  //     0: {
  //       stagePadding: 50 // Menor padding en móviles
  //     },
  //     768: {
  //       stagePadding: 100
  //     }
  //   }
  // });
</script>