<?php
/**
 * Content section
 *
 * @package      HS WordPress Starter 
 * @author       kuadydevelopment-team.
 * @since        1.0.0
 **/

$count = get_query_var('prt_count');

/* Text-related variables  */
$tagline            = get_post_meta(get_the_id(), 'sections_' . $count . '_section_title', true);
$heading            = get_post_meta(get_the_id(), 'sections_' . $count . '_heading', true);
$textcolor 			= get_post_meta(get_the_id(), 'sections_' . $count . '_textcolor', true);
$sinpaddingupdown 	= get_post_meta(get_the_id(), 'sections_' . $count . '_sinpaddingupdown', true);

$cta                = get_post_meta(get_the_id(), 'sections_' . $count . '_cta', true);
$cta_margin         = get_post_meta(get_the_id(), 'sections_' . $count . '_cta_margin', true);
$description        = get_field('sections_' . $count . '_content', get_the_id());
$background_boton   = get_post_meta(get_the_id(), 'sections_' . $count . '_background_boton', true);
$description_width	= get_post_meta(get_the_id(), 'sections_' . $count . '_description_width', true);
$svgcode = get_post_meta(get_the_id(), 'sections_' . $count . '_svgcode', true);
$topandleftsvg = get_post_meta(get_the_id(), 'sections_' . $count . '_topandleftsvg', true);

/* Background-related variables  */
$full_width_bg        = get_post_meta(get_the_id(), 'sections_' . $count . '_full-width-bg', true);
$color_de_texto2	  = get_post_meta(get_the_id(), 'sections_' . $count . '_color_de_texto2', true);
$background_color 	  = get_post_meta(get_the_id(), 'sections_' . $count . '_background_color', true);
$backgroundpegadobottom = get_post_meta(get_the_id(), 'sections_' . $count . '_backgroundpegadobottom', true);

$backgroundimagenbottom 	   = get_post_meta(get_the_id(), 'sections_' . $count . '_backgroundimagenbottom', true);
$backgroundimagenbottom_mobile = get_post_meta(get_the_id(), 'sections_' . $count . '_backgroundimagenbottom_mobile', true);
$alturaimagenbottom = get_post_meta(get_the_id(), 'sections_' . $count . '_alturaimagenbottom', true);


$imagebottom_html       = wp_get_attachment_image($backgroundimagenbottom, 'full', false, array(
	'alt' => 'kuady',
	'style' => 'position: relative;top:' . $alturaimagenbottom . 'em;background-repeat: no-repeat; background-position-x: right;background-position-y: 100%;',
));

$imagebottom_html_mobile       = wp_get_attachment_image($backgroundimagenbottom_mobile, 'full', false, array(
	'alt' => 'kuady',
	'style' => 'position: relative;top:' . $alturaimagenbottom . 'em;background-repeat: no-repeat; background-position-x: right;background-position-y: 100%;',
));

$background_image_id  = get_post_meta(get_the_id(), 'sections_' . $count . '_background_image', true);
if ($background_image_id) {
	$background_image_url = wp_get_attachment_image_src($background_image_id, 'full');
}

$background_image_id2  = get_post_meta(get_the_id(), 'sections_' . $count . '_background_image_little', true);
if ($background_image_id2) {
	$background_image_url2 = wp_get_attachment_image_src($background_image_id2, 'full');
}

$background_image_position	  = get_post_meta(get_the_id(), 'sections_' . $count . '_background_image_position', true);
/* Gallery-related variables */
$has_gallery = get_post_meta(get_the_id(), 'sections_' . $count . '_has_gallery', true);
$gallery     = get_post_meta(get_the_id(), 'sections_' . $count . '_gallery', true);

/* Animation-related variables */
$has_animation = get_post_meta(get_the_id(), 'sections_' . $count . '_has_animation', true);
$animation_file_id = get_post_meta(get_the_id(), 'sections_' . $count . '_animation_file', true);

$animation_url = get_post_meta(get_the_id(), 'sections_' . $count . '_animation_url', true);
if ($animation_file_id) {
	$animation_file_url = wp_get_attachment_url($animation_file_id);
}



/* Image-related variables */
$image_id        = get_post_meta(get_the_id(), 'sections_' . $count . '_image', true);
$image_alignment = get_post_meta(get_the_id(), 'sections_' . $count . '_image_align', true);
$image_on_edge   = get_post_meta(get_the_id(), 'sections_' . $count . '_sticked_to_the_edge', true);
$image_on_edge_button   = get_post_meta(get_the_id(), 'sections_' . $count . '_sticked_to_the_edge_button', true);
$image_on_mobile = get_post_meta(get_the_id(), 'sections_' . $count . '_hidden_on_mobile', true);
$strip_on_mobile = get_post_meta(get_the_id(), 'sections_' . $count . '_strip_on_mobile', true);
$image_html = wp_get_attachment_image($image_id, 'medium-retina', false, array(
	'alt' 	=> 'PayRetailers - One application. One integration',
	'class' => (empty($image_on_mobile)) ? 'content__image' : 'content__image content__image--hidden-on-mobile',
));

$nombre_clase_especial = get_post_meta(get_the_id(), 'sections_' . $count . '_nombre_clase_especial', true);
$nombre_clase_especial_imagen = get_post_meta(get_the_id(), 'sections_' . $count . '_nombre_clase_especial_imagen', true);
$heading_especial_copiar = get_post_meta(get_the_id(), 'sections_' . $count . '_heading_especial_copiar', true);
$lightpoint = get_post_meta(get_the_id(), 'sections_' . $count . '_lightpoint', true);
$espacio_arriba_texto = get_post_meta(get_the_id(), 'sections_' . $count . '_espacio_arriba_texto', true);
$espacio_arriba_texto_double = get_post_meta(get_the_id(), 'sections_' . $count . '_espacio_arriba_texto_double', true);

//video
$cta_on_image	      = get_post_meta(get_the_id(), 'sections_' . $count . '_cta_on_image', true);
$video_file_id  	  = get_post_meta(get_the_id(), 'sections_' . $count . '_video_file', true);
$background_image_id  = get_post_meta(get_the_id(), 'sections_' . $count . '_background_image', true);
$background_image_url = $background_image_id ? wp_get_attachment_image_src($background_image_id, 'full') : ($cta_on_image ? wp_get_attachment_image_src($image_id, 'full') : '');
?>

<style>
section#test-content.position-background-heart{
			background: url("/wp-content/uploads/2024/03/test-heart.png.webp") !important; 
			background-color: #00E7CA !important;
			background-repeat: no-repeat !important;
			background-position-x: -20% !important;
			background-size: 105% !important;
			background-position-y: 10% !important;
}

@media (max-width: 1400px) {
	section#test-content.position-background-heart{
			background:#00E7CA !important;

}
}
	.sinpaddingupdown {
		padding: 0 !important;
		min-height: 0 !important;
	}

	.api-test>div.content__content{
		@media (width < 992px){
			display: block;
		}
	}
	.api-test div.content__img-area--no-img::before {
		content: url('/wp-content/uploads/animations/img/kuady_api_business.png');
		display: inline-block;
		margin-right: 8px;
		width: 99px;
		height: 99px;
	}
	.api-test div.content__img-area--no-img {
		display: flex;
		flex-direction: column-reverse;
		align-items: flex-end;
		@media (width < 992px) {
			align-items: flex-start;
		}
	}

	.arrow-business>div.content__content>div.content__img-area{
		justify-content: center;
    	align-items: center;
    	margin-bottom: 16%;
		@media (width < 992px) {
			display: none;
		}
	}

	@media screen and (min-width: 1200px) {
		.content__img-area.derechadeltodo {display: flex;justify-content: flex-end!important;}
		.arrow-business {
			background-position-y: 140%;
			height: 70vh;
			background-size: 70vw;
		}

		.position-background-heart {
			background-position-x: -20% !important;
			background-size: 105% !important;
			background-position-y: 10% !important;
		}

		.alto-centrado-vertical>div {
			height: 90%;
		}

		.gap-centra-texto>div {
			gap: 15%;
		}
	}

	.altura-minima {
		min-height: 100vh;
		@media (width < 768px) {
			min-height: 70vh;
		}
	}

	section.api-test {
		background-position-x: 87%;
		background-size: 105%;

		@media (width < 1200px) {
			background-size: cover;
		}
	}
	section.float-card{
		height: 60vh;
		background-position-y: bottom;
		background-position-x: 85%;
    	background-size: 45%;

		@media (width < 768px){
			text-align: center;
			background-size: 65% !important;
			background-position-x: center !important;
		}
	}
	section.mock-up-card-mobile{
		background-size: 35%;
		background-position-y: 101%;
		background-position-x: 20%;
	}
	section.mock-up-card-mobile>div.wrapper>div.content__img-area{
		margin-right: 120px;
	}
	section.mock-up-card-mobile>div.wrapper>div.content__text-area>.content__description>.content-btn-download{
		margin-top: 18px;
		display: flex;
		gap: 10px;
	}
	.app-btn{
		max-width: 200px;
		width: 100%;
	}

	section.mock-up-card-mobile img{
		width: 100%;
	}

	@media (max-width: 576px){
		section.float-card {
			background-size: 100% !important;	/*semana27G */
		}

		section.mock-up-card-mobile{
		background-size: 72%;
		background-position-x: center;
		}

		span.about-us-img > div >img{
			padding-inline: 16px;
		}

	}

	@media  (max-width: 768px){
		section.mock-up-card-mobile>div.content__content>div.content__text-area>div.content__heading-area> h2.content_padre_titulo_especial{
			font-size: 6.3rem !important;
			line-height: 6.3rem !important;
		}
		section.mock-up-card-mobile>div.wrapper>div.content__img-area{
			display: none;
		}
		section.mock-up-card-mobile>div.wrapper>div.content__text-area{
			text-align: center;
		}

		section.mock-up-card-mobile>div.wrapper>div.content__text-area>.content__description>.content-btn-download{
			display: flex;
			align-items: center;
			margin: auto;
			max-width: 340px;
			justify-content: center;

		}
		section.mock-up-card-mobile{
			background-position-x: center !important;
			background-size: 50vh !important;
		}
	}

	@media (min-width: 769px) and (max-width: 832px){
		section.mock-up-card-mobile>div.content__content>div.content__text-area>div.content__heading-area> h2.content_padre_titulo_especial{
			font-size: 6.3rem !important;
			line-height: 6.3rem !important;
		}
		section.mock-up-card-mobile{
			background-size: 55% !important;
		}
	}

	@media (max-width: 992px){
		section.mock-up-card-mobile{
			background-position-x: center;
			background-size: 45%;
			align-items: flex-start;
        	justify-content: center;

		}
		section.mock-up-card-mobile>div.content__content>div.content__text-area>div.content__heading-area> h2.content_padre_titulo_especial{
			text-align: center;
		}
		section.mock-up-card-mobile .wrapper{
			flex-direction: column;
		}
		section.mock-up-card-mobile>div.wrapper>div.content__text-area{
			align-items: center;
		}
		section.mock-up-card-mobile .wrapper>.content__img-area--no-img{
			display: none;
		}
		section.video-pick-card > .content__content >.content__img-area{
			visibility: visible;
		}
	}

	
	@media (max-width: 1280px){
		section.float-card{
			background-size: 50%;	
		}

		section.mock-up-card-mobile{
			background-size: 35%;
		}
	}

	.video-bg{
		display: none;
	}

	section.video-pick-card{
		position: relative;

	}
	section.video-pick-card > .content__content >.content__img-area{
		visibility: hidden !important;
		@media (width < 996px) {
			visibility: visible !important;
			display: flex;
    		justify-content: center;
		}
	}

	section.video-pick-card > .content__content >.content__text-area>.content__heading-area > h2.content_padre_titulo_especial> br {
		@media (width < 996px) {
			display: none;
		}
	}


	section.video-pick-card video{
		display: block !important;
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		object-fit: cover;
		object-position: center;

		@media (width < 996px) {
			display: none !important;
		}
	}
</style>

<section id="test-content" name="contentPadre" class="<?php echo $nombre_clase_especial; ?> <?php echo (!empty($sinpaddingupdown)) ? 'sinpaddingupdown' : ''; ?> <?php echo esc_attr(empty($backgroundpegadobottom) ? 'content' : 'content backgroundpegadobottom'); ?> <?php echo esc_attr('section-' . $count); ?>
												<?php echo esc_attr($has_gallery ? 'content--has_gallery' : ''); ?>
												<?php echo esc_attr($full_width_bg ? 'content--full_width_bg' : ''); ?>
												<?php echo esc_attr('bg-' . $background_color); ?>" <?php echo (!empty($background_image_url[0]) && empty($background_image_position)) ? 'style="background-image: url(\'' . esc_url($background_image_url[0]) . '\')"' : ''; ?>>

												<video class="video-bg" autoplay muted loop>
												<!-- <source src="/wp-content/uploads/2024/05/video-pick-card.webm" type="video/mp4" /> -->
												<source src="/wp-content/uploads/2024/05/video-pick-card.mp4" type="video/mp4" />
												</video>
	<?php
	// Selecciona tu diseño: 
	// 1: texto centrado arriba
	// 2: texto en lateral con img lateral
	// 3: texto arriba ancho con img abajo del texto
	// options: 
	// 1 : 1
	// 2 : 2
	// 3 : 3
	?>

	<?php if ($heading_especial_copiar == '1') : ?>
		<div class="content__text-area prt_inner_centred_content" style="color:<?php echo ($color_de_texto2); ?>;display: flex;justify-content: center;">
			<h2 class="content__heading centred_content__heading h2_Content" style="color:<?php echo esc_html($textcolor) ?>">
				<?php echo wp_kses_post($heading); ?>
			</h2>
		</div>
	<?php endif; ?>
	<!-- .content__text-area -->

	<div class="content__content wrapper <?php echo (empty($image_id)) ? 'no-img' : ''; ?>
	<?php echo ($image_alignment == 'right' || empty($image_alignment)) ?  'content__content--text-align-left' : ''; ?>
	<?php echo esc_attr(($image_on_edge && $image_alignment == 'left') ?  'content__content--img-edge-left' :  ''); ?>
	<?php echo esc_attr(($image_on_edge && $image_alignment == 'right') ? 'content__content--img-edge-right' : ''); ?>" <?php echo (!empty($background_image_url[0]) && !empty($background_image_position)) ?  'style="background-image: url(\'' . esc_url($background_image_url[0]) . '\'); background-repeat: no-repeat; background-position-x: right;background-position-y: 106%;"' : ''; ?> <?php echo (!empty($background_image_url2[0]) && !empty($background_image_position)) ? 'style="background-image: url(\'' . esc_url($background_image_url2[0]) . '\'); background-repeat: no-repeat;"' : ''; ?>>


		<?php
		if (!empty($video_file_id)) { ?>
			<!-- new video -->
			<?php $hero_video_url = wp_get_attachment_url($video_file_id); ?>
			<?php if ($video_file_id) : ?>
				<div class="<?php echo ($image_alignment == 'right') ? 'video_amazing' : 'video_amazing-left'; ?> only-desktop22 ">
					<video id="teaser" autoplay loop muted playsinline class="hero__video video-border-resolution" preload="none" poster="">
						<source src="<?php echo ($hero_video_url); ?>" type="video/mp4">
						<span style="color:#fff;font-size:20px">Your browser does not support video.</span>
					</video>
				</div>
			<?php endif; ?>
			<!-- /new video -->
		<?php
		} else {
		?>

			<div class="content__img-area  <?php echo $nombre_clase_especial_imagen ;?><?php echo (empty($image_id) || (!empty($image_on_mobile))) ? ' content__img-area--no-img' : null; ?>
												<?php echo esc_attr($heading_especial_copiar == '3') ? ' content_padre_titulo_especial_imagen' : null; ?>
												<?php echo ($strip_on_mobile) ? ' content__img-area--strip' : ''; ?>">
				<?php if (!$has_gallery && !$has_animation) : ?>
					<span class="<?php echo ($image_on_edge_button == 1) ? 'sticked_to_the_edge_button' : ''; ?> about-us-img">
						<div>
						<?php echo $image_html; ?>
						</div>
						<?php $is_mobile = wp_is_mobile(); ?>
						<?php if (!$is_mobile) {
							echo $imagebottom_html;
						} else {
							echo $imagebottom_html_mobile;

						};
						?>
					</span>

				<?php elseif ($has_gallery) : ?>
					<div class="padre_gallery <?php echo $nombre_clase_especial; ?>">
						<div class="content__gallery">
							<?php

							foreach ($gallery as $item => $image_id) {
								echo wp_get_attachment_image($image_id, 'medium-retina', false, array(
									'alt' 	=> 'Kuady your payment method - ' . ($item + 1),
									'class' => "content__gallery-image",
								));
							}
							?>
						</div>
					</div>
				<?php endif; ?>
			</div> <!-- .content__img-area -->
		<?php
		}
		?>
		<?php //final del if $video_file_id 
		?>

		<?php if (!$has_gallery) : ?>
			<div class="content__text-area">
			<?php endif; ?>
			<div class="content__heading-area <?php echo $espacio_arriba_texto ? 'espacio_arriba_texto' : null;  ?> <?php echo $espacio_arriba_texto_double ? 'espacio_arriba_texto_double' : null;  ?>">
				<?php if (!empty($tagline)) : ?>
					<p class="content__tagline <?php echo ($background_color == 'dark' || $background_color == 'darky') ? ' content__tagline--bg-dark ' : ' content__description--bg-white33'; ?>"><?php echo wp_kses_post($tagline) ?></p>
				<?php endif; ?>

				<?php if ($heading_especial_copiar == '2') : ?>
					<h2 class="content__heading <?php echo esc_attr($heading_especial_copiar == '2') ? ' content_padre_titulo_especial' : null; ?> <?php echo ($background_color == 'dark' || $background_color == 'darky') ? ' content__description--bg-dark' : ' content__description--bg-white33'; ?>" style="color:<?php echo esc_html($textcolor) ?>">
						<?php echo wp_kses_post($heading); ?>
					</h2>
				<?php endif; ?>

				<?php if ($heading_especial_copiar == '3') : ?>
					<h2 class="content__heading <?php echo esc_attr($heading_especial_copiar == '3') ? ' content_padre_titulo_especial_izq' : null; ?> <?php echo ($background_color == 'dark' || $background_color == 'darky') ? ' content__description--bg-dark' : ' content__description--bg-white33'; ?>" style="color:<?php echo esc_html($textcolor) ?>">
						<?php echo wp_kses_post($heading); ?>
					</h2>
				<?php endif; ?>
			</div>

			<?php if ($has_gallery) : ?>
				<div class="content__text-area">
				<?php endif; ?>

				<?php if (!empty($description)) : ?>

					<?php $is_mobile = wp_is_mobile();

					?>

					<div class="content__description " style="max-width:<?php echo ($description_width); ?>%;color:<?php echo ($color_de_texto2); ?>;
				<?php if ($is_mobile) : ?>max-width:100%;<?php endif; ?>">
						<?php echo $description; ?>
					</div>

				<?php endif; ?>

				<?php $is_mobile = wp_is_mobile(); ?>
				<?php if (!empty($cta)) : ?>

					<?php if (!$is_mobile) { ?>
						<a class="content__cta button <?php echo $background_boton; ?>" href="<?php echo esc_attr($cta['url']); ?>" target="_blank" style="margin-bottom:<?php echo ($cta_margin); ?>%">
							<?php echo esc_html($cta['title']) ?></a>
					<?php
					} else { ?>
						<a class="content__cta button <?php echo $background_boton; ?> " href="<?php echo esc_attr($cta['url']); ?>" target="_blank">
							<?php echo esc_html($cta['title']) ?></a>
					<? } ?>


				<?php endif; ?>
				</div> <!-- .content__text-area -->

				<div style="<?php echo ($lightpoint == '1') ? 'position: absolute;top: 0%;width: 50%;margin: 0 auto;left: 30%;z-index: 1;' : 'display:none'; ?>">
					<img src="/wp-content/uploads/2024/05/kuady_puntodeluz_v1.svg" width="1400" height="1436" alt='Kuady' loading="lazy">
				</div>

				<?php if (!empty($svgcode)) : ?>
					<div style="position: absolute;margin: 0 auto;<?php echo $topandleftsvg; ?>">
						<img src="<?php echo (!empty($svgcode) ? $svgcode : ''); ?>" width="2500" height="1436" alt='Kuady' loading="lazy">
					</div>
				<?php endif; ?>
			</div> <!-- .wrapper -->
</section>
