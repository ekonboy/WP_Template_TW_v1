<?php

/**
 * globo section
 *
 * @package      gabii WordPress Starter
 * @author       SQUAD WEB.
 * @since        1.0.0
 */

// Obtener el índice de la sección
$count = get_query_var('prt_count');

// Variables de ACF (mejor usar get_sub_field())
$heading = get_sub_field('heading');
$author_content = get_sub_field('author_content');
$author_title = get_sub_field('author_title');
$imagencontent = get_sub_field('imagencontent');

// Variables de estilo
$ancho_total_texto = get_sub_field('ancho_total_texto');
$girado = get_sub_field('girado');

?>

<style>

</style>


<?php if ($girado == '1') { ?>
    <section class="globo <?php echo esc_attr('section-' . $count); ?>">
        <div class="container" style="max-width: <?php echo esc_attr($ancho_total_texto); ?>px;">
            <div class="max-w-[600px] w-full h-auto relative mx-auto p-4" id="unoinverse">
                <div class="w-full h-[200px] bg-[#d0ff71] flex items-center justify-center text-black text-[28px] sm:text-[36px] leading-[36px] p-4 sm:p-[20px] text-end" id="dosinverse">
                    <?php echo esc_attr($heading); ?>
                </div>
                <div class="flex flex-wrap sm:flex-nowrap w-full" id="tresinverse">
                    <div class="w-full sm:w-[300px] h-[100px] bg-[#d0ff71] relative" id="cincoinverse"></div>
                    <div class="w-full sm:w-[300px] h-[100px] bg-[#d0ff71] flex items-center p-3 sm:p-5 gap-3 justify-center sm:justify-start" id="quatroinverse">
                        <img src="<?php echo esc_url($imagencontent); ?>" alt="gbii web developer" class="w-[40px] sm:w-[50px] h-[40px] sm:h-[50px] rounded-full object-cover border border-white" style="max-width: 100%; height: auto;transform: scaleX(-1);background-color: white;">
                        <div class="text-right">
                            <p class="text-black text-[16px] sm:text-[18px] font-bold"> <?php echo esc_attr($author_content); ?></p>
                            <p class="text-black text-[12px] sm:text-[14px]"> <?php echo esc_attr($author_title); ?></p>
                        </div>
                    </div>
                </div>
                <div class="w-[300px] h-[100px] bg-white dark:bg-[#1f2937] rounded-[50%] absolute left-2/2 transform -translate-x-2/2 sm:right-[300px] sm:translate-x-0 bottom-[16px]" id="seisinverse"></div>
            </div>
        </div>
    </section>

<?php } else { ?>
    <section class="globo  <?php echo esc_attr('section-' . $count); ?>">
        <div class="container " style="max-width: <?php echo esc_attr($ancho_total_texto); ?>px;">
            <div class="max-w-[600px] w-full h-auto relative mx-auto p-4" id="uno">
                <div class="w-full h-[200px] bg-[#d0ff71] flex items-center justify-ce22nter text-black text-[28px] sm:text-[36px] leading-[36px] p-4 sm:p-[20px]" id="dos">
                    <?php echo esc_attr($heading); ?>
                </div>
                <div class="flex flex-wrap sm:flex-nowrap w-full" id="tres">
                    <div class="w-full sm:w-[300px] h-[100px] bg-[#d0ff71] flex items-center p-3 sm:p-5 gap-3 " id="quatro">
                        <img src="<?php echo esc_url($imagencontent); ?>" alt="gbii web developer" class="w-[40px] sm:w-[50px] h-[40px] sm:h-[50px] rounded-full object-cover border border-white" style="max-width: 100%; height: auto;">
                        <div class="text-left">
                            <p class="text-black text-[16px] sm:text-[18px] font-bold"> <?php echo esc_attr($author_content); ?></p>
                            <p class="text-black text-[12px] sm:text-[14px]"> <?php echo esc_attr($author_title); ?></p>
                        </div>
                    </div>
                    <div class="w-full sm:w-[300px] h-[100px] bg-[#d0ff71] relative" id="cinco"></div>
                </div>
                <div class="w-[300px] h-[100px] bg-white dark:bg-[#1f2937] rounded-[50%] absolute left-1/2 transform -translate-x-1/2 sm:left-[300px] sm:translate-x-0 bottom-[16px]" id="seis"></div>
            </div>
        </div>
    </section>
<?php } ?>