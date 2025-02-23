<!DOCTYPE html>
<html <?php language_attributes(); ?> id="pageroot" class="scroll-smooth">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <!-- <php echo get_template_directory_uri() . '/css/app.css'; ?> -->
    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-gray-900 antialiased bg-white text-black dark:bg-gray-800 dark:text-white transition-all duration-300'); ?>>

    <?php do_action('tailpress_site_before'); ?>

    <div id="page" class="min-h-screen flex flex-col">

        <?php do_action('tailpress_header'); ?>

        <header>
            <div class="mx-auto container">
                <div class="headermenu lg:flex lg:justify-bet22ween lg:items-center border-b py-6">
                    <!-- Logo y Toggle del Menú -->
                    <div class="flex justify-between items-center">
                        <div>
                            <?php if (has_custom_logo()) { ?>
                                <?php the_custom_logo(); ?>
                            <?php } else { ?>
                                <a href="<?php echo get_bloginfo('url'); ?>" class="font-extrabold text-lg uppercase">
                                    <?php echo get_bloginfo('name'); ?>
                                </a>
                                <p class="text-sm font-light text-gray-600">
                                    <?php echo get_bloginfo('description'); ?>
                                </p>
                            <?php } ?>
                        </div>

                        <ul class="lg:flex lg:-mx-4">
                            <li>
                                <a class="theme-toggle [&amp;>*]:pointer-events-none relative px-7 py-2.5 flex items-center rounded-[inherit] text-sm leading-5 font-medium text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 transition-all duration-300" href="javascript:void(0)" onclick="toggle()">
                                    <div class="flex dark:hidden items-center">
                                        <em class="text-lg leading-none w-7 ni ni-moon"></em>
                                    </div>
                                    <div class="hidden dark:flex items-center">
                                        <em class="text-lg leading-none w-7 ni ni-sun"></em>
                                    </div>
                                    <div class="ms-auto relative h-6 w-12 rounded-full border-2 border-gray-200 dark:border-primary-600 bg-[#3e3c3c] dark:bg-primary-600">
                                        <div class="absolute start-0.5 dark:start-6.5 top-0.5 h-4 w-4 rounded-full bg-gray-200 dark:bg-[#d0ff71] transition-all duration-300" id="toggle-button"></div>
                                    </div>
                                </a>
                            </li>
                        </ul>


                        <div class="lg:hidden">
                            <a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
                                <svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
                                        <g id="icon-shape">
                                            <path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"
                                                id="Combined-Shape"></path>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Menú y Toggle de Modo Oscuro -->
                    <div class="lg:flex lg:items-center">

                        <?php
                        wp_nav_menu(
                            array(
                                'container_id'    => 'primary-menu',
                                'container_class' => 'hiddenmenu bg-gray-100 mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
                                'menu_class'      => 'lg:flex lg:-mx-4',
                                'theme_location'  => 'primary',
                                'li_class'        => 'lg:mx-4',
                                'fallback_cb'     => false,
                            )
                        );
                        ?>
                    </div>
                </div>
            </div>
        </header>


        <div id="content" class="site-content flex-grow">
            <?php if (is_front_page()) { ?>
                <div class="container mx-auto" style="height: 650px;">
                    <div class="px-4 py-4 my-4">
                        <div class="mx-auto" style="text-align: center;">
                            <p>


                            <div class="mt-16 mb-8 md:mt-20 lg:mt-24 px-4 sm:px-8 mx-auto w-full sm:max-w-screen-md flex flex-col items-center justify-center gap-5 md:gap-6 lg:gap-8"> <a href="#!" class="h-9 group w-fit flex items-center justify-center gap-0 bg-astro-dark-900/55 rounded-full">
                                    <div class="px-3 h-full w-fit flex items-center gap-2 bg-gradient-to-tr from-[#1321AC] to-[#881ABD] rounded-full"> <span class="text-sm text-white font-light">gabii 5.0</span> <svg xmlns="http://www.w3.org/2000/svg" class="size-4 text-white block sm:hidden" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="m16.172 11l-5.364-5.364l1.414-1.414L20 12l-7.778 7.778l-1.414-1.414L16.172 13H4v-2z"></path>
                                        </svg> </div>
                                    <div class="hidden sm:flex px-3 h-full w-fit items-center justify-center gap-2"> <span class="text-sm text-astro-gray-100 group-hover:underline font-light">Available now!</span> <svg xmlns="http://www.w3.org/2000/svg" class="size-4 text-astro-gray-100" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="m16.172 11l-5.364-5.364l1.414-1.414L20 12l-7.778 7.778l-1.414-1.414L16.172 13H4v-2z"></path>
                                        </svg> </div>
                                </a>
                                <div class="flex flex-col items-center">
                                    <h1 class="text-balance mb-4 text-center text-3xl/[1.1] font-bold font-heading sm:max-w-[24ch] md:text-4xl/[1.1] xl:text-5xl/[1.1] no-after">
                                        Experiencia en optimización, SEO, desarrollo escalable y diseño responsive
                                    </h1>
                                   
                                </div>

                                <div class="grid grid-rows-2 gap-2">
    <div data-code-block="" class="px-4 py-2 bg-astro-dark-900/55 rounded-xl">
        <div class="group h-full flex items-center">
            <svg width="22" height="13" viewBox="0 0 22 13" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-2 relative block w-3 -rotate-90 text-astro-gray-200 " aria-hidden="true">
                <path d="M1 1L11 11L21 1" stroke="currentColor" stroke-width="2"></path>
            </svg>
  

            <code id="merchant-id-1" data-code="" class="flex-1 font-mono font-light text-sm text-astro-gray-200 mr-2 merchant-data">
        npm create gabii@latest
    </code>
            <div class="relative">
                

                <button onclick="copyToClipboard()" class="block mr-1 transition hover:scale-110 active:scale-100 active:transition-colors text-astro-gray-200 group-hover:text-astro-gray-100 copy-btn" title="Copy to clipboard">
        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24">
            <path fill="currentColor" d="M7 6V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1h-3v3c0 .552-.45 1-1.007 1H4.007A1.001 1.001 0 0 1 3 21l.003-14c0-.552.45-1 1.006-1zM5.002 8L5 20h10V8zM9 6h8v10h2V4H9z"></path>
        </svg>
    </button>

               

                <div id="copied-message" class="copied-message" data-visible="false">
        Copied!
    </div>

            
            </div>
        </div>
    </div>
</div>
<style>
 


        .copied-message {
            color: green;
            font-weight: bold;
            display: none;
            margin-top: 10px;
        }
    </style>
<script>

    </script>
                            </div>


                            <div class="landing-section gap-4 sm:gap-8">
                                <p class="font-light text-balance mb-4">Algunos de mis clientes donde he prestado servicios:</p>

                                <div class="flex flex-wrap items-center justify-center gap-x-8 gap-y-6 px-4">
                                    <i class="payretailerslogo"></i>
                                    <i class="pacificologo"></i>
                                    <i class="paypagalogo"></i>
                                    <i class="kuadylogo"></i>
                                    <i class="upflogo"></i>
                                    <i class="canalslogo"></i>
                                </div>
                            </div>
                            </p>
                        </div>
                        <img src="<?php echo get_template_directory_uri() . '/resources/img/HeroBackground.webp'; ?>" alt="Hero" class="w-full h-auto">
                    </div>
                </div>
            <?php } ?>

            <?php do_action('tailpress_content_start'); ?>

            <main>


