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
$heading2 = get_sub_field('heading2');
$heading_degradado = get_sub_field('heading_degradado');
$content = get_sub_field('content');
$ancho_total_texto = get_sub_field('ancho_total_texto');
$justificar_texto = get_sub_field('justificar_texto');
$titulo_centrado = get_sub_field('titulo_centrado');
$ancla = get_sub_field('ancla');



// Obtener keys de colores desde ACF
$background_color_key = get_sub_field('background_color');
$colortext_content_key = get_sub_field('colortext_content');
$theme_colors = get_theme_colors();
$background_color = isset($theme_colors[$background_color_key]) ? $theme_colors[$background_color_key] : '#fff';
$colortext_content = isset($theme_colors[$colortext_content_key]) ? $theme_colors[$colortext_content_key] : '#000';
?>
<style>
    .btnbase_textoimagenen88 {
        border-radius: 50px;
        text-align: center;
        max-width: 550px;
        padding: 15px 29px;
        /* margin-top: 25px; */
        position: relative;
        z-index: 1;
    }

    .btn_amarillotexto-imagen88 {
        background: linear-gradient(to right, #00e785, #50c4fe);
        padding: 2px;
    }


    .btn_amarillotexto-imagen88 > span {
        display: block;
        border-radius: 50px;
        background-color: #1e1e1e;
        color: white;
        font-weight: 600;
        padding: 15px 29px;
    }

    .btn_verdetexto{
    background-color: #15dea5;
    color: #0e0f11;
}
.actions {margin-top: 20px;}
</style>




<div class="experiencia_religiosa">
    <div style="display:<?php echo ($activatedcontent == 0) ? 'none' : 'block'; ?>;">
        <section class="simpletext-content flex justify-center flex-col md:flex-row especialdesktop <?php echo esc_attr('section-' . $count); ?>" style="background-color: <?php echo esc_attr($background_color); ?>;">

            <?php if ($ancla): ?><div id="<?php echo $ancla; ?>"></div><?php endif; ?>

            <div class="container boxmobile" style="display: flex;flex-direction: column;flex-wrap: wrap;max-width: <?php echo esc_attr($ancho_total_texto); ?>px;<?php echo $titulo_centrado ? 'align-items: center;' : 'after:left-0'; ?>">

                <h1 class="h1normal 

                    <?php echo $heading_degradado ? 'tagline gradient-text' : 'text-slate-600 dark:text-white'; ?> 
                    dark:after:bg-[#d0ff71]"
                    style="<?php echo $titulo_centrado ? 'text-align: center;' : ''; ?>">

                    <?php echo esc_html($heading); ?>
                    <!-- <php echo !empty($heading2) ? esc_html($heading2) : ''; ?> -->
                       <?php if ($heading_degradado === '1') echo esc_html($heading2); ?>
                </h1>



                <?php if ($content): ?>
                    <div class="lg:text-[18px] text-[16px] <?php echo esc_attr($justificar_texto) ? 'justificar_texto' : ''; ?>">
                        <span class="<?php echo ($colortext_content === 'transparent') ? 'text-slate-600 dark:text-white' : ''; ?>"
                            <?php echo ($colortext_content !== 'transparent') ? 'style="color:' . esc_attr($colortext_content) . '"' : ''; ?>>
                            <?php echo wp_kses_post($content); ?>
                        </span>
                    </div>
                <?php endif; ?>
                

<p class="actions">
<div class="flex flex-col md:flex-row items-center gap-4 md:gap-10">
    <div class="btnbase_textoimagenen88 btn_verdetexto"><span>Why Vue</span></div>
    <div class="btnbase_textoimagenen88 btn_amarillotexto-imagen88"><span>Get Security Updates for Vue 2</span></div>
</div>
</p>




            </div>

        </section>
    </div>
</div>