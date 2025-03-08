<?php

/**
 * globo_extra Content section
 *
 * @package      gabii WordPress Starter
 * @author       SQUAD WEB.
 * @since        1.0.0
 */

// Obtener el índice de la sección
$count = get_query_var('prt_count');
$activatedcontent = get_sub_field('activatedcontent');
$content_uno = get_sub_field('content_uno');
$content_dos = get_sub_field('content_dos');
$background_color = get_sub_field('background_color');
$ancho_total_texto = get_sub_field('ancho_total_texto');
$heading_uno = get_sub_field('heading_uno');
$heading_dos = get_sub_field('heading_dos');
$content_onlymobile = get_sub_field('content_onlymobile');

//  Only Mobile
// 0 : No -> visible en todas partes
// 1 : Si -> visible solo en mobile
// 2 : Desktop -> visible solo en PC

?>
<style>
.solodesktop {display: block;}
@media only screen and (max-width: 768px) {
    .solodesktop {display: none!important;}
}
</style>
<script>
        function toggleView() {
            console.log("toggleView called");
        }
    </script>
<div style="display:<?php echo ($activatedcontent == 0) ? 'none' : 'block'; ?>;">
<section class="globo_extra block <?php echo esc_attr($content_onlymobile == '1' ? 'solodesktop' : ''); ?> <?php echo esc_attr('section-' . $count); ?>" style="display: flex;flex-direction: column;flex-wrap: nowrap;align-content: space-between;justify-content: center;background-color: <?php echo esc_attr($background_color); ?>">
    <div class="boxmobile">
        <?php if ($content_uno): ?>
            <div class="green-div" id="greenDiv">
                <div class="baselogo gabii_template_bubble">
                    <div class="bubbletext text-[#0e0f11]">
                        <h1 class="after:left-0 font-semibold relative after:content[''] after:h-1 after:rounded-full after:bg-brand after:absolute after:w-12 after:content[''] after:bg-brand text-2xl lg:text-3xl mb-2 after:-bottom-3 text-slate-600 dark:after:bg-[#d0ff71] dark:text-[#0e0f11]">
                            <?php echo $heading_uno = get_sub_field('heading_uno'); ?></h1>
                        <?php echo $content_uno = get_sub_field('content_uno'); ?>
                    </div>
                    <button class="bubblebutton text-white px-5 py-4 items-center bg-gradient-to-tr from-[#1321AC] to-[#881ABD] rounded-full" onclick="toggleView()">Cuéntame más!</button>
                </div>
            </div>
        <?php endif; ?>
    </div>


    <?php if ($content_dos): ?>
        <div class="red-div" id="redDiv" style="display:none">
            <div class="baselogo gabii_template_bubble">
                <div class="bubbletext text-[#0e0f11]">
                        <h1 class="after:left-0 font-semibold relative after:content[''] after:h-1 after:rounded-full after:bg-brand after:absolute after:w-12 after:content[''] after:bg-brand text-2xl lg:text-3xl mb-2 after:-bottom-3 text-slate-600 dark:after:bg-[#d0ff71] dark:text-[#0e0f11]">
                        <?php echo $heading_dos = get_sub_field('heading_dos'); ?></h1>
                    <?php echo $content_dos = get_sub_field('content_dos'); ?>
                </div>
                <button class="bubblebutton text-white px-5 py-4 items-center bg-gradient-to-tr from-[#1321AC] to-[#881ABD] rounded-full" onclick="toggleView()">Volver atrás!</button>
            </div>
        </div>
    <?php endif; ?>

    <div class="circle" id="circle"></div>
    <div class="circle2" id="circle2"></div>

    </div>
</section>
    </div>