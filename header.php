<?php
session_start();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> id="pageroot" class="dark scroll-smooth">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php

    wp_enqueue_script('app', get_template_directory_uri() . '/public/js/app.js', [], null, true); // Tu archivo JS personalizado
    ?>
    <?php wp_enqueue_style('app-css', get_template_directory_uri() . '/public/css/app.css'); ?>

    <?php wp_head(); ?>
</head>
<style>

</style>


<body <?php body_class('bg-white text-gray-900 antialiased text-black dark:bg-gray-800 dark:text-white transition-all duration-300'); ?>>

    <?php do_action('tailpress_site_before'); ?>

    <div id="page" class="min-h-screen flex flex-col">

        <?php do_action('tailpress_header'); ?>

        <header>
            <div class="mx-auto lg:container hidden lg:block">
                <div class="headermenu lg:flex lg:justify-between lg:items-center border-b py-6">
                    <!-- Logo y Toggle del Menú -->
                    <div class="menuheaderresponsivemobile flex items-center">
                        <div style="width:15%">
                            <?php has_custom_logo() ? the_custom_logo() : ''; ?>
                        </div>

                        <ul class="lg:flex lg:-mx-4">
                            <li>
                                <a class="theme-toggle [&amp;>*]:pointer-events-none relative px-7 py-2.5 flex items-center rounded-[inherit] text-sm leading-5 font-medium text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 transition-all duration-300" href="javascript:void(0)" onclick="toggleMenuHeaderRes()">
                                    <div class="flex dark:hidden items-center">
                                        <em class="text-lg leading-none w-7 ni ni-moon"></em>
                                    </div>
                                    <div class="hidden dark:flex items-center">
                                        <em class="text-lg leading-none w-7 ni ni-sun"></em>
                                    </div>
                                    <div class="ms-auto relative h-6 w-12 rounded-full border-2 border-gray-200 dark:border-primary-600 bg-[#3e3c3c] dark:bg-primary-600" id="toggle-container">
                                        <button class="absolute start-0.5 dark:start-6.5 top-0.5 h-4 w-4 rounded-full bg-gray-200 dark:bg-brandPrimaryLightest transition-all duration-300" id="toggle-button"></button>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="lg:flex lg:items-center">
                        <?php
                        $menu_args = array(
                            'container_id'    => 'primary-menu',
                            'container_class' => 'hidden mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
                            'menu_class'      => 'lg:flex lg:-mx-4',
                            'theme_location'  => 'primary',
                            'li_class'        => 'lg:mx-4',
                            'fallback_cb'     => false,
                        );

                        // Llamada a wp_nav_menu
                        wp_nav_menu($menu_args);
                        ?>
                    </div>
                </div>
            </div>
        </header>

        <!-- responsive-->
        <header>
            <div class="mx-auto lg:hidden" style="padding: 10px;">
                <nav class="navbar">
                    <input type="checkbox" id="menu-toggle" class="menu-toggle" />
                    <label for="menu-toggle" class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </label>
                    <label for="menu-gabiitest" class="gabiiresetext">gabiirese</label>
                    <ul class="menu">
                        <li><a href="#">Experiencia</a></li>
                        <li><a href="#">CV</a></li>
                        <li><a href="#">Formación</a></li>
                        <li><a href="#">Logros</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>

                        <div class="flex justify-center items-center gap-x-2 w-full">
                            <!-- Logo -->
                            <div class="flex justify-center items-center w-12 h-12">
                                <img src="/wp-content/uploads/2025/03/logo5_.png" alt="Logo Gabii Rese" class="w-12 h-12 object-contain">
                            </div>
                            <!-- Toggle Switch -->
                            <button
                                class="theme-toggle relative flex items-center p-0 bg-transparent border-0 focus:outline-none"
                                onclick="toggleMenuHeaderRes()"
                                aria-label="Toggle menu"
                                type="button">
                                <!-- Iconos modo claro/oscuro -->
                                <span class="flex dark:hidden items-center">
                                    <em class="text-lg leading-none w-5 h-5 ni ni-moon"></em>
                                </span>
                                <span class="hidden dark:flex items-center">
                                    <em class="text-lg leading-none w-5 h-5 ni ni-sun"></em>
                                </span>
                                <!-- Switch visual -->
                                <span class="ms-auto relative h-6 w-12 rounded-full border-2 border-gray-200 dark:border-primary-600 bg-[#3e3c3c] dark:bg-primary-600 ml-2" id="toggle-container">
                                    <span class="absolute left-0.5 dark:left-6.5 top-0.5 h-4 w-4 rounded-full bg-gray-200 dark:bg-brandPrimaryLightest transition-all duration-300" id="toggle-button"></span>
                                </span>
                            </button>
                        </div>
                        <li><a href="#">
                                <button class="btn-contactame">
                                    Hazme pull y te explico!
                                    <img class="avatar" src="/wp-content/uploads/2025/02/gabii_5b.png" alt="Foto de perfil">
                                </button>
                            </a></li>

                        <span class="flex gap-4 justify-center items-center">
                            <a href="https://www.linkedin.com/in/gabiirese" target="_blank" aria-label="LinkedIn">
                                <em class="ni ni-linkedin-round"></em>
                            </a>
                            <a href="https://github.com/eKonboy" target="_blank" aria-label="GitHub">
                                <em class="ni ni-github-round"></em>
                            </a>
                            <a href="https://facebook.com/tuusuario" target="_blank" aria-label="Facebook">
                                <em class="ni ni-wordpress"></em>
                            </a>
                        </span>
                    </ul>
                </nav>
            </div>
        </header>


        <div id="content" class="site-content flex-grow">
            <?php if (is_front_page()) { ?>
                <div class="container mx-auto" style="height: 650px;">
                    <div class="px-4 ">
                        <div class="mx-auto" style="text-align: center;">
                            <p>
                            <div class="mt-16 mb-8 md:mt-20 lg:mt-24 px-4 sm:px-8 mx-auto w-full sm:max-w-screen-md flex flex-col items-center justify-center gap-5 md:gap-6 lg:gap-8">
                                <div class="flex flex-col items-center">
                                    <h2 class="no-after text-balance mb-4 text-center text-3xl/[1.1] font-bold sm:max-w-[24ch] md:text-4xl/[1.1] xl:text-5xl/[1.1] font-[Obviously]">
                                        Competencia en desarrollo escalable, responsive, soluciones personalizadas y <span
                                            class="txt-rotate bg-navbar rounded-0"
                                            data-period="1000"
                                            data-rotate='[ " WPO ", "  UX ", " SEO " ]'>
                                        </span>
                                    </h2>
                                </div>
                            </div>
                            </p>
                        </div>


                        <div class="relative w-full h-screen hidden lg:block">
                            <img loading="eager" fetchpriority="high" src="<?php echo get_template_directory_uri() . '/resources/img/HeroBackground.webp'; ?>" alt="gabii rese Full Stack Developer"
                                class="blur-lg absolute -z-50 -translate-x-1/2 inset-x-1/2 custom-inset w-[2353px] h-[1969px] object-cover max-w-[unset]">
                        </div>
                    </div>
                </div>

            <?php } ?>

            <?php do_action('tailpress_content_start'); ?>

            <main>