<?php

/**
 * globo section
 *
 * @package      gabii WordPress Starter
 * @author       SQUAD WEB.
 * @since        1.0.0
 */

$count = get_query_var('prt_count');
$activatedcontent = get_sub_field('activatedcontent');
$heading = get_sub_field('heading');
$author_content = get_sub_field('author_content');
$author_title = get_sub_field('author_title');
$imagencontent = get_sub_field('imagencontent');
$ancho_total_texto = get_sub_field('ancho_total_texto');
$girado = get_sub_field('girado');
?>

<div style="display:<?php echo ($activatedcontent == 0) ? 'none' : 'block'; ?>;">
<?php if ($girado == '1') { ?>
    <section class="globo boxmobilecircleizq  <?php echo esc_attr('section-' . $count); ?>">
        <div class="container logrosgirado" style="max-width: <?php echo esc_attr($ancho_total_texto); ?>px;">

        <div class="girado speech-bubbledefault" style="transform: scaleX(-1);">
                <div class="w-full h-[200px] flex items-center justify-center text-black text-[28px] sm:text-[36px] leading-[36px] p-4 sm:p-[20px] text-end" style="transform: scaleX(-1);text-align: left;">
                    <?php echo esc_attr($heading); ?>
                </div>

                <div class="text-right flex items-center justify-start textoglobogirado">
                    <img src="<?php echo esc_url($imagencontent); ?>" alt="gabii web developer" class="w-[40px] sm:w-[50px] h-[40px] sm:h-[50px] rounded-full object-cover border border-white bg-white" style="max-width: 10%; height: auto;">

                    <div class="flex flex-col items-start mr-4 ">
                        <p class="text-black text-[16px] sm:text-[18px] font-bold"> <?php echo esc_attr($author_content); ?></p>
                        <p class="text-black text-[12px] sm:text-[14px]"> <?php echo esc_attr($author_title); ?></p>
                    </div>
                </div>
               
            </div>
        </div>
    </section>

<?php } else { ?>
    <section class="globo boxmobilecircle <?php echo esc_attr('section-' . $count); ?>">
    <div class="container logros" style="max-width: <?php echo esc_attr($ancho_total_texto); ?>px;">

            <div class="speech-bubbledefault">
                <div class="w-full h-[200px] flex items-center justify-center text-black text-[28px] sm:text-[36px] leading-[36px] p-4 sm:p-[20px] text-end">
                    <?php echo esc_attr($heading); ?>
                </div>

                <div class="text-right flex items-center justify-end">
                    <div class="flex flex-col items-end mr-4">
                        <p class="text-black text-[16px] sm:text-[18px] font-bold"> <?php echo esc_attr($author_content); ?></p>
                        <p class="text-black text-[12px] sm:text-[14px]"> <?php echo esc_attr($author_title); ?></p>
                    </div>
                    <img src="<?php echo esc_url($imagencontent); ?>" alt="gabii web developer" class="w-[40px] sm:w-[50px] h-[40px] sm:h-[50px] rounded-full object-cover border border-white" style="max-width: 10%; height: auto;">
                </div>

            </div>
        </div>
    </section>
<?php } ?>
</div>