<?php

/**
 * skillscontent Content section
 *
 * @package      gabii WordPress Starter
 * @author       SQUAD WEB.
 * @since        1.0.0
 */

// Obtener el índice de la sección
$count = get_query_var('prt_count');

// Variables de ACF (mejor usar get_sub_field())
$skillsname = get_sub_field('skillsname');
$background_color = get_sub_field('background_color');
?>


<section class="skillscontent <?php echo esc_attr('section-' . $count); ?>" style="background-color: <?php echo esc_attr($background_color); ?>">
    <div class="containe22r flex flex-wrap gap-4 justify-center">

        <?php
        if (have_rows('skillsname')):

            while (have_rows('skillsname')) : the_row();
                $tituloskill = get_sub_field('tituloskill');
                $skill = get_sub_field('skill');
        ?>

                <button class="px-3 h-full w-fit flex items-center gap-2 bg-gradient-to-tr  from-[#1321AC] to-[#881ABD] rounded-full w-[150px] h-[50px] text-[24px] font-medium rounded-full border border-gray-700 dark:border-gray-300 
     dark:bg-gray-900 dark:text-white  text-white
    hover:bg-gray-600 dark:hover:bg-gray-800 hover:text-gray-200
    flex items-center justify-center gap-[14px] transition-colors duration-200 mb-6
    sm:w-[180px] sm:h-[60px] sm:text-base
    md:w-[200px] md:h-[70px] md:text-lg"
                    aria-label="skills Button">

                    <!-- Icono (siempre visible) -->
                    <span class="text-[26px]"> <?php if ($skill): ?> <?php echo $skill; ?> <?php endif; ?> </span>

                    <!-- Texto (oculto en móviles y visible en sm o superior) -->
                    <span class="hidden sm:inline"> <?php if ($tituloskill): ?> <?php echo esc_html($tituloskill); ?><?php endif; ?></span>

                </button>

        <?php
            endwhile;
        endif;
        ?>

    </div>
</section>