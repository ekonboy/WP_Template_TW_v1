<?php

/**
 * globo_grande extra section
 *
 * @package      gabii WordPress Starter
 * @author       SQUAD WEB.
 * @since        1.0.0
 */

$count = get_query_var('prt_count');
$activatedcontent = get_sub_field('activatedcontent');
$ancho_total_texto = get_sub_field('ancho_total_texto');
$globo_girado = get_sub_field('globo_girado');
$globo_grande = get_sub_field('globo_grande');
$heading = get_sub_field('heading');
$author_content = get_sub_field('author_content');
$author_title = get_sub_field('author_title');
$imagencontent = get_sub_field('imagencontent');
$heading_grande = get_sub_field('heading_grande');
$author_content_grande = get_sub_field('author_content_grande');
$author_title_grande = get_sub_field('author_title_grande');
$imagencontent_grande = get_sub_field('imagencontent_grande');
?>

<div style="display:<?php echo ($activatedcontent == 0) ? 'none' : 'block'; ?>;">
<?php if ($globo_grande == '1') { ?>
    <section class="globo_grande flex justify-center flex-col sm:flex-row <?php echo esc_attr('section-' . $count); ?> <?php echo ($globo_girado == '1') ? 'globogirado' : '' ?>">

        <div class="containeritems mx-auto w-full sm:w-auto">
        <div class="item1 boxmobilecircle">
            <div class="speech-bubbledefaultbig">
                <div class="w-full flex items-center justify-center text-black p-4 lg:p-5 text-end text-xl lg:text-xl 2xl:text-4xl leading-5 lg:leading-7 2xl:leading-10">

                <?php echo esc_attr($heading_grande); ?>
                </div>
                <div class="text-right flex items-center justify-end mt-10 sm:mt-6 xl:mt-8">
                    <div class="flex flex-col items-end mr-4">
                        <p class="text-black text-[16px] sm:text-[18px] font-bold"> <?php echo esc_attr($author_content_grande); ?></p>
                        <p class="text-black text-[12px] sm:text-[14px]"> <?php echo esc_attr($author_title_grande); ?></p>
                    </div>
                    <img src="<?php echo esc_url($imagencontent_grande); ?>" alt="gabii web developer" class="w-[40px] sm:w-[50px] h-[40px] sm:h-[50px] rounded-full object-cover border border-white" style="max-width: 15%; height: auto;">
                </div>
            </div>
        </div>
        <div class="item2 boxmobilecircleizq">
            <div class="girado speech-bubbledefaultbig" style="transform: scaleX(-1);">
                <div class="w-full flex items-center justify-center text-black p-4 lg:p-5 text-end text-xl leading-5 lg:text-xl lg:leading-7 2xl:text-4xl 2xl:leading-10" style="transform: scaleX(-1);text-align: left;">
                <?php echo esc_attr($heading); ?>
                </div>
                <div class="text-right flex items-center justify-start textoglobogirado mt-10 sm:mt-6 xl:mt-8" style="gap: 16px;">
                    <img src="<?php echo esc_url($imagencontent); ?>" alt="gabii web developer" class="w-[40px] sm:w-[50px] h-[40px] sm:h-[50px] rounded-full object-cover border border-white bg-white" style="max-width: 15%; height: auto;">
                    <div class="flex flex-col items-start mr-4 ">
                        <p class="text-black text-[16px] sm:text-[18px] font-bold leading-tight"> <?php echo esc_attr($author_content); ?></p>
                        <p class="text-black text-[12px] sm:text-[14px] leading-tight" style="text-align: left;"> <?php echo esc_attr($author_title); ?></p>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </section>

<?php } else {  ?>

    <section class="globo_grande boxmobilecircle <?php echo esc_attr('section-' . $count); ?>">
        <div class="container logros" style="max-width: <?php echo esc_attr($ancho_total_texto); ?>px;">

            <div class="speech-bubbledefaultbig">
            <div class="w-full h-[200px] flex items-center justify-center text-black p-4 lg:p-[20px] text-end responsive-textglobo">
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
<?php }
?>
</div>