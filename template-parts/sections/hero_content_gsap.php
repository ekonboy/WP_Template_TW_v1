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
$heading3 = get_sub_field('heading3');
$content = get_sub_field('content');
$ancho_total_texto = get_sub_field('ancho_total_texto');
$imagencontent = get_sub_field('imagencontent');
$content_onlymobile = get_sub_field('content_onlymobile');
$justificar_texto = get_sub_field('justificar_texto');

$background_color_key = get_sub_field('background_color');
$color_key = get_sub_field('background_color');
$theme_colors = get_theme_colors();
$background_color = isset($theme_colors[$color_key]) ? $theme_colors[$color_key] : '#f7f7fd';
?>


<section class="hero_content <?php echo esc_attr('section-' . $count); ?>" style="background-color: <?php echo esc_attr($background_color); ?>;">
    <div class="container" style="max-width: <?php echo esc_attr($ancho_total_texto); ?>px;">
        <div class="hero-content">





 <main>
<?php if ($heading): ?>
<section id="inicio">
<h1 class="hero-title <?php echo esc_html($justificar_texto) ?>">
<?php echo esc_html($heading); ?>
<?php if (!empty($heading2)): ?>
<span class="clase-heading2"><?php echo esc_html($heading2); ?></span>
<?php echo esc_html($heading3); ?>
<?php endif; ?>
</h1>
</section>
<?php endif; ?>
  </main>

             
    

 





            <?php if ($content): ?>
                <div class="hero-description">
                    <?php echo wp_kses_post($content); ?>
                </div>
            <?php endif; ?>
        </div>
        <?php if ($imagencontent): ?>
            <div class="hero-image">
                <img src="<?php echo esc_url($imagencontent['url']); ?>" alt="<?php echo esc_attr($imagencontent['alt']); ?>" />
            </div>
        <?php endif; ?>
    </div>
</section>

 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  <script src="https://unpkg.com/split-type"></script>