<?php

/**
 * content-info section
 *
 * @package      gabii WordPress Starter
 * @author       SQUAD WEB.
 * @since        1.0.0
 */

// Obtener el índice de la sección
$count = get_query_var('prt_count');

// Variables de ACF (mejor usar get_sub_field())
$heading = get_sub_field('heading');
$description = get_sub_field('description');



$background_color = get_sub_field('background_color');
$ancho_total_texto = get_sub_field('ancho_total_texto');

$accordion_heading = get_sub_field('accordion_heading');
$accordion_content = get_sub_field('accordion_content');


$imagenes = [
    "https://randomuser.me/api/portraits/men/1.jpg",
    "https://randomuser.me/api/portraits/women/2.jpg",
    "https://randomuser.me/api/portraits/men/3.jpg",
    "https://randomuser.me/api/portraits/women/4.jpg",
    "https://randomuser.me/api/portraits/men/5.jpg",
    "https://randomuser.me/api/portraits/women/6.jpg",
    "https://randomuser.me/api/portraits/men/7.jpg",
    "https://randomuser.me/api/portraits/women/8.jpg",
    "https://randomuser.me/api/portraits/men/9.jpg",
    "https://randomuser.me/api/portraits/women/10.jpg",
    "https://randomuser.me/api/portraits/men/11.jpg",
    "https://randomuser.me/api/portraits/women/12.jpg",
    "https://randomuser.me/api/portraits/men/13.jpg",
    "https://randomuser.me/api/portraits/women/14.jpg",
    "https://randomuser.me/api/portraits/men/15.jpg",
    "https://randomuser.me/api/portraits/women/16.jpg",
    "https://randomuser.me/api/portraits/men/17.jpg",
    "https://randomuser.me/api/portraits/women/18.jpg",
    "https://randomuser.me/api/portraits/men/19.jpg",
    "https://randomuser.me/api/portraits/women/20.jpg"
];

?>



<!-- accordions -> nombre del repeater -->
<!-- accordion_heading dentro del repeater el campo a mostrar -->

<!-- style="max-width: <php echo esc_attr($ancho_total_texto); ?>px;" -->


<section class="content-info <?php echo esc_attr('section-' . $count); ?>" style="background-color: <?php echo esc_attr($background_color); ?>;">
    <div class="flex flex-col items-center justify-center text-center py-8">
        <h1 class="text-2xl font-semibold"><?php echo $heading; ?></h1>
        <p class="mt-4 text-lg text-gray-600"><?php echo $description; ?></p>
    </div>

    <div class="grid grid-cols-4 gap-4 p-5">
        <?php
        if (have_rows('accordions')):
            while (have_rows('accordions')) : the_row();
                $accordion_heading = get_sub_field('accordion_heading');
                $accordion_content = get_sub_field('accordion_content');
        ?>
                <div class="flex flex-col rounded-xl bg-gray-100 px-6 py-7 w-full"> 
                    <div class="-mt-0.5 flex px-0.5 xl:-mt-2">
                        <div class="mr-4">
                            <img class="h-10 w-10 rounded-full border-2 border-white lg:h-11 lg:w-11 xl:h-12 xl:w-12" srcset="<?php echo $imagenes[array_rand($imagenes)]; ?>" src="<?php echo $imagenes[array_rand($imagenes)]; ?>" loading="lazy" alt="Picture of Caleb Porzio" width="48" height="48">
                        </div>
                        <div class="flex flex-col justify-center text-sm">
                            <span class="text-gray-900"><?php echo $accordion_heading; ?></span>
                            <span class="text-gray-500">Creator of <a href="https://livewire.laravel.com" class="text-teal-400" target="_blank" rel="noopener">Livewire</a> and <a href="https://alpinejs.dev" class="text-teal-400" target="_blank" rel="noopener">Alpine.js</a></span>
                        </div>
                    </div>
                    <div class="mt-4 text-gray-900"><?php echo $accordion_content; ?></div>
                </div>
        <?php
            endwhile;
        endif;
        ?>
    </div>
</section>

