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
$titulo_centrado = get_sub_field('titulo_centrado');

$background_color_key = get_sub_field('background_color');
$color_key = get_sub_field('background_color'); // ejemplo: 'brandPrimaryLightest'
$theme_colors = get_theme_colors();
$background_color = isset($theme_colors[$color_key]) ? $theme_colors[$color_key] : '#f7f7fd';
?>



<div style="display:<?php echo ($activatedcontent == 0) ? 'none' : 'block'; ?>;">

<section class="grid_absolute flex justify-center flex-col md:flex-row especialdesktop <?php echo esc_attr('section-' . $count); ?>" style="background-color: <?php echo esc_attr($background_color); ?>;">

<div class="grid_absolute_content">

    <div class="container boxmobile" style="display: flex;flex-direction: column;flex-wrap: wrap;padding-top: 90px;max-width: <?php echo esc_attr($ancho_total_texto); ?>px;">
    <h2 class="<?php echo $titulo_centrado ? 'after:left-1/2 after:translate-x-[-50%]' : 'after:left-0'; ?> font-semibold relative after:content[''] after:h-1 after:rounded-full after:bg-brand after:absolute after:w-12 after:content[''] after:bg-brand text-2xl lg:text-3xl mb-8 after:-bottom-3 text-slate-600 dark:after:bg-color-brand-primary-medium dark:text-[brandPrimaryLight]" style="<?php echo $titulo_centrado ? 'text-align: center;' : ''; ?>">
                <?php echo !empty($heading) ? esc_html($heading) : ''; ?>
                </h2>

        

        <?php if ($content): ?>
            <div class="lg:text-[18px] text-[16px]  <?php echo get_sub_field('justificar_texto'); ?>"><?php echo wp_kses_post($content); ?>
          
          
          

            
<?php if (have_rows('contenido_grid')): ?>
  <div class="contenido-grid-container"> <!-- Contenedor principal -->
    <div class="contenido-grid"> <!-- Grid -->
      <?php while (have_rows('contenido_grid')): the_row(); 
        $logo = get_sub_field('grid_logo');
        $titulo = get_sub_field('grid_titulo');
        $texto = get_sub_field('grid_texto');
      ?>
        <div class="grid-item"> <!-- Item individual -->
          <?php if ($logo): ?>
            <div class="grid-image-container">
              <img src="<?php echo esc_url($logo['url']); ?>" 
                   alt="<?php echo esc_attr($logo['alt']); ?>" 
                   class="grid-logo" />
            </div>
          <?php endif; ?>
          
          <?php if ($titulo): ?>
            <h3 class="grid-titulo"><?php echo esc_html($titulo); ?></h3>
          <?php endif; ?>
          
          <?php if ($texto): ?>
            <p class="grid-texto"><?php echo esc_html($texto); ?></p>
          <?php endif; ?>
        </div>
      <?php endwhile; ?>
    </div>
  </div>

 
<?php endif; ?>



          
          
          </div>
        <?php endif; ?>
    </div>







</div><!-- grid_absolute_content -->

</section>






  <script>

  
  </script>


    </div>

