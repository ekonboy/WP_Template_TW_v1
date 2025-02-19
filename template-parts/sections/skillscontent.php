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
    <div class="container flex flex-wrap gap-4 justify-center">

        <?php
        if (have_rows('skillsname')):

            while (have_rows('skillsname')) : the_row();
                $tituloskill = get_sub_field('tituloskill');
        ?>
               <button
                class="w-[150px] h-[50px] text-sm font-medium rounded-full border border-gray-700 dark:border-gray-300 
                    bg-white dark:bg-gray-900 text-gray-800 dark:text-white 
                    hover:bg-gray-600 dark:hover:bg-gray-800 hover:text-gray-200
                    flex items-center justify-center transition-colors duration-200 mb-4
                    sm:w-[180px] sm:h-[60px] sm:text-base
                    md:w-[200px] md:h-[70px] md:text-lg"
                aria-label="JavaScript Button">
                <?php echo $tituloskill; ?>
            </button>

        <?php
            endwhile;
        endif;
        ?>

    </div>
</section>
