<?php
/**
 * menuanclacv Content section
 *
 * @package      gabii WordPress Starter
 * @author       SQUAD WEB.
 * @since        1.0.0
 */
$count = get_query_var('prt_count');
$activatedcontent = get_sub_field('activatedcontent');
$content_onlymobile = get_sub_field('content_onlymobile');
$background_color_key = get_sub_field('background_color');
$color_key = get_sub_field('background_color'); // ejemplo: 'brandPrimaryLightest'
$theme_colors = get_theme_colors();
$background_color = isset($theme_colors[$color_key]) ? $theme_colors[$color_key] : '#fff';
?>
<div style="display:<?php echo ($activatedcontent == 0) ? 'none' : 'block'; ?>;">
    <section class="menuanclacv block <?php echo esc_attr($content_onlymobile == 1 ? 'md:hidden' : ''); ?> <?php echo esc_attr('section-' . $count); ?>" style="height: 50px;background-color: <?php echo esc_attr($background_color); ?>">
     
        <div class="flex flex-row md:flex-col flex-wrap content-around mx-4">
            <div class="switcher-containercv bg-gabii-dark-900/55" style="margin: 0 auto;">
                <div id="active-backgroundcv" class="active-backgroundcv active-bakanchototal"></div>

                <button data-opcion="curriculum" class="switcher-optioncv active"> 
                    Trabajos <em class="ni ni-notice"></em>
                </button>

                <button data-opcion="portfolio" class="switcher-optioncv">
                    Portfolio <em class="ni ni-filter-fill"></em>
                </button>

                <button data-opcion="portal" class="switcher-optioncv">
                  <a href="https://portal.vistarapida.es" target="_blank"> Portal <em class="ni ni-laravel"></em></a>
                </button>

            </div>
        </div>
    </section>
</div>