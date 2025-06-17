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
.foryourconsumers {color:#ABF9F1;position: relative;top: 13rem;z-index: 1;}
.retoquegalleriatotal {background:linear-gradient(181deg, #45299F -3.9%, #351C6F 108.73%)}
.retoquegalleria {display: flex;flex-direction: row;justify-content: flex-start;float: left;left: 23%;position: relative;}
.galleria{height: 100vh;background:linear-gradient(181deg, #45299F -3.9%, #351C6F 108.73%);margin: auto;position: relative;overflow: hidden;display: flex;flex-direction: column;justify-content: center;flex: none;}
.galleria__inner{display: flex;align-items: start;position: relative;cursor: grab;touch-action: none;}
.galleria:active{ cursor: grabbing;}
.galleria__item{flex: 0 0 300px;padding: 0 1rem;}
.galleria__item-inner {height: 540px;display: flex;align-items: center;justify-content: flex-start;font-size: 2rem;font-family: 'Moderat',sans-serif;border-radius: 50px;flex-direction: column;flex-wrap: nowrap;align-content: center;text-align: center;padding-top: 10%;font-style: normal;font-weight: 700;line-height: 100%; }
.textolittel_slider {font-size: 20px;width:333px;font-style: normal;font-weight: 400;line-height: normal;font-family:'Moderat',sans-serif;margin-top:20px;color:#fff}
 
.game-section {padding: 60px 0;}
.game-section .owl-stage {margin: 15px 0;display: flex;display: -webkit-flex;}
.game-section .itemslider {margin: 0 15px 60px;width: 350px;height: 540px;display: flex;display: -webkit-flex;align-items: flex-end;-webkit-align-items: flex-end;background: #343434 no-repeat center center / cover;border-radius: 40px;overflow: hidden;position: relative;transition: all 0.4s ease-in-out;-webkit-transition: all 0.4s ease-in-out;cursor: pointer;justify-content: center;flex-direction: row;flex-wrap: nowrap;}
.game-section .itemslider.active {width: 350px;}
.game-section .itemslider:after {content: "";display: block;position: absolute;height: 100%;width: 100%;left: 0;top: 0;/*background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 1));*/}
.game-section .itemslider-desc {padding: 0 24px 12px;color: #fff;position: relative;z-index: 1;overflow: hidden;transform: translateY(calc(100% - 54px));-webkit-transform: translateY(calc(100% - 54px));transition: all 0.4s ease-in-out;-webkit-transition: all 0.4s ease-in-out;}
.game-section .itemslider.active .itemslider-desc {transform: none;-webkit-transform: none;}
.game-section .itemslider-desc p {opacity: 0;-webkit-transform: translateY(32px);transform: translateY(32px);transition: all 0.4s ease-in-out 0.2s;-webkit-transition: all 0.4s ease-in-out 0.2s;}
.game-section .itemslider.active .itemslider-desc p {opacity: 1;-webkit-transform: translateY(0);transform: translateY(0);}
.game-section .owl-theme.custom-carousel .owl-dots {margin-top: -20px;position: relative;z-index: 5;}
 
/***** responsive css Start ******/
@media (min-width: 992px) and (max-width: 1199px) {
  .game-section {padding: 50px 30px;}
  .game-section .itemslider { margin: 0 12px 60px;}
  .game-section .itemslider.active {width: 250px;}
}
@media (min-width: 768px) and (max-width: 991px) {
  .game-section {padding: 50px 30px 40px;}
  .game-section .itemslider {margin: 0 12px 60px;}
  .game-section .itemslider.active {width: 250px;}
}
@media (max-width: 767px) {
  .galleria__item-inner {font-size: 3.1rem;line-height: 3.5rem;height: 450px;padding-top: 15%; }
  .textolittel_slider {font-size: 2.3rem;width:270px;line-height: 2.5rem;padding: 15px;}
  .game-section {padding: 30px 15px 20px;}
  .game-section .itemslider {margin: 0 10px 40px;width: 270px;height: 430px;}
  .game-section .itemslider.active {width: 270px;box-shadow: 6px 10px 10px rgba(0, 0, 0, 0.25);-webkit-box-shadow: 6px 10px 10px rgba(0, 0, 0, 0.25);}
  .game-section .itemslider-desc {padding: 0 14px 5px;transform: translateY(calc(100% - 42px));-webkit-transform: translateY(calc(100% - 42px));}
}
 .no-scrollbar::-webkit-scrollbar {
    display: none;
  }
  .no-scrollbar {
    -ms-overflow-style: none;
    scrollbar-width: none;
  }
  body {
    overflow-x: hidden;
  }
</style>


<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


  <!-- fondo con imagen -->
   <?php if (have_rows('contenido_grid')): ?>
  <section class="game-section" style="float: right;">
    <div class="owl-carousel custom-carousel owl-theme">
      <?php 
      $counter = 0;
      while (have_rows('contenido_grid')): the_row();
        $fondo = get_sub_field('grid_logo'); 
        $titulo = get_sub_field('grid_titulo');
        $texto = get_sub_field('grid_texto');
        $color = get_sub_field('grid_color'); 
        ?>
        
        <div class="itemslider <?php echo ($counter === 0) ? 'active' : ''; ?>" 
             style="background-image: url('<?php echo esc_url($fondo['url']); ?>')">
          <div class="item-desc">
            <div class="galleria__item-inner" style="color: <?php echo $color ? esc_attr($color) : '#fff'; ?>">
              <?php echo nl2br(esc_html($titulo)); ?>
              <div class="textolittel_slider" style="color: <?php echo $color ? esc_attr($color) : '#fff'; ?>">
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





  
<script>
    $(".custom-carousel").owlCarousel({
    autoWidth: true,
    loop: false
  });
 
  </script>