<!DOCTYPE html>
<html <?php language_attributes(); ?> id="pageroot" class="">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!-- <php echo get_template_directory_uri() . '/css/app.css'; ?> -->




	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-white text-gray-900 antialiased bg-white text-black dark:bg-gray-800 dark:text-white transition-all duration-300' ); ?>>




<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="min-h-screen flex flex-col">

	<?php do_action( 'tailpress_header' ); ?>

	<header>

		<div class="mx-auto container">
			<div class="lg:flex lg:justify-between lg:items-center border-b py-6">
				<div class="flex justify-between items-center">
					<div>
						<?php if ( has_custom_logo() ) { ?>
                            <?php the_custom_logo(); ?>
						<?php } else { ?>
							<a href="<?php echo get_bloginfo( 'url' ); ?>" class="font-extrabold text-lg uppercase">
								<?php echo get_bloginfo( 'name' ); ?>
							</a>

							<p class="text-sm font-light text-gray-600">
								<?php echo get_bloginfo( 'description' ); ?>
							</p>

						<?php } ?>
					</div>

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

				<?php
				wp_nav_menu(
					array(
						'container_id'    => 'primary-menu',
						'container_class' => 'hidden bg-gray-100 mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
						'menu_class'      => 'lg:flex lg:-mx-4',
						'theme_location'  => 'primary',
						'li_class'        => 'lg:mx-4',
						'fallback_cb'     => false,
					)
				);
				?>
			</div>







		</div>

	</header>


<script>
const darkModeInput = document.querySelector('.theme-toggle');
darkModeInput.addEventListener('click', () => {
	document.body.classList.toggle('dark');
	darkModeInput.classList.toggle('dark');
});

	</script>


<li>
<a class="theme-toggle [&amp;>*]:pointer-events-none relative px-7 py-2.5 flex items-center rounded-[inherit] text-sm leading-5 font-medium text-slate-600 dark:text-slate-400 hover:text-primary-600 hover:dark:text-primary-600 transition-all duration-300" href="javascript:void(0)">
<div class="flex dark:hidden items-center">
<em class="text-lg leading-none w-7 ni ni-moon"></em>
<span>Dark Mode</span>
</div>
<div class="hidden dark:flex items-center">
<em class="text-lg leading-none w-7 ni ni-sun"></em>
<span>Light Mode</span>
</div>
<div class="ms-auto relative h-6 w-12 rounded-full border-2 border-gray-200 dark:border-primary-600 bg-white dark:bg-primary-600">
<div class="absolute start-0.5 dark:start-6.5 top-0.5 h-4 w-4 rounded-full bg-gray-200 dark:bg-white transition-all duration-300"></div>
</div>
</a>
</li>


	<div id="content" class="site-content flex-grow">

		<?php if ( is_front_page() ) { ?>
			<!-- Start introduction -->
			<div class="container mx-auto">
				<div class="px-12 py-16 my-12 rounded-xl bg-gradient-to-r from-blue-50 from-10% via-sky-100 via-30% to-blue-200 to-90%">
                    <div class="mx-auto max-w-screen-md">
                        <h1 class="text-3xl lg:text-6xl tracking-tight font-extrabold text-gray-800 mb-6">Genero valor aportando conocimiento <span class="text-secondary">explícito</span> sobre <span class=""> optimización,</span>
						posicionamiento web, <span class="text-primary">desarrollos escalables</span> y diseños <span class="text-red-600"> responsive.</span></h1>
                      
                       
                    </div>
                </div>
			</div>
			<!-- End introduction -->
		<?php } ?>

		<?php do_action( 'tailpress_content_start' ); ?>
		
		<main>

   
