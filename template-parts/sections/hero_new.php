<?php
/**
 * Hero section
 *
 * @package      HS WordPress Starter
 * @author       SQUAD WEB. 
 * @since        1.0.0
 **/

$id = get_the_id();

$count                = get_query_var( 'prt_count' );
$is_big_hero 	      = get_post_meta( get_the_id(), 'sections_' . $count . '_big_hero', true );
$background_color     = get_post_meta( get_the_id(), 'sections_' . $count . '_background_color', true );
$text_color           = get_post_meta( get_the_id(), 'sections_' . $count . '_text_color', true );
$hero_tagline	      = get_post_meta( get_the_id(), 'sections_' . $count . '_section_title', true );
$hero_heading         = get_post_meta( get_the_id(), 'sections_' . $count . '_heading', true );
$hero_subheading      = get_post_meta( get_the_id(), 'sections_' . $count . '_subheading', true );
$hero_description     = get_post_meta( get_the_id(), 'sections_' . $count . '_content', true );
$cta     		      = get_post_meta( get_the_id(), 'sections_' . $count . '_cta', false );
$min_height_hero	  = get_post_meta( get_the_id(), 'sections_' . $count . '_min_height_hero', true );
$ctastylebuttom	      = get_post_meta( get_the_id(), 'sections_' . $count . '_ctastylebuttom', true );
$cta_on_image	      = get_post_meta( get_the_id(), 'sections_' . $count . '_cta_on_image', true );
$special_imagen	      = get_post_meta( get_the_id(), 'sections_' . $count . '_special_imagen', true );
$ajustar_imagen	      = get_post_meta( get_the_id(), 'sections_' . $count . '_ajustar_imagen', true );
$es_home	          = get_post_meta( get_the_id(), 'sections_' . $count . '_wrapperhero', true );
$more_info  	      = get_post_meta( get_the_id(), 'sections_' . $count . '_more_info', false );
$more_space_below  	  = get_post_meta( get_the_id(), 'sections_' . $count . '_more_space_below', true );
$image_little 		  = get_post_meta( get_the_id(), 'sections_' . $count . '_image_little', true );
$image_little_tablet  = get_post_meta( get_the_id(), 'sections_' . $count . '_image_little_tablet', true );
$imagen_especial_hero = get_post_meta( get_the_id(), 'sections_' . $count . '_imagen_especial_hero', true );

$image_html           = wp_get_attachment_image($image_little, 'full', false, array(
	'alt' => 'kuady',
	'class' => $cta_on_image ? 'img_as_bg_mobile2'	: '',
));

$image_htmltablet          = wp_get_attachment_image($image_little_tablet, 'full', false, array(
	'alt' => 'kuady',
	'class' => $cta_on_image ? 'img_as_bg_mobile2'	: '',
));

$video_file_id  	  = get_post_meta( get_the_id(), 'sections_' . $count . '_video_file', true );
$background_image_id  = get_post_meta( get_the_id(), 'sections_' . $count . '_background_image', true );
//$background_image_url = wp_get_attachment_image_src( $background_image_id, 'full');
$heading_width 		  = get_post_meta( get_the_id(), 'sections_' . $count . '_heading_width', true );
$heading_width_center = get_post_meta( get_the_id(), 'sections_' . $count . '_heading_width_center', true );
$noimage 			  = get_post_meta( get_the_id(), 'sections_' . $count . '_noimage', true );
$lightpoint 		  = get_post_meta( get_the_id(), 'sections_' . $count . '_lightpoint', true );
$ajustar_hero_heading = get_post_meta( get_the_id(), 'sections_' . $count . '_ajustar_hero_heading', true );
$logokuadybackground  = get_post_meta( get_the_id(), 'sections_' . $count . '_logokuadybackground', true );
$anchoespecial = get_post_meta( get_the_id(), 'sections_' . $count . '_anchoespecial', true );

//Imagenes flotantes:
$positionleft	 = get_post_meta( get_the_id(), 'sections_' . $count . '_positionleft', true );
$positionright	 = get_post_meta( get_the_id(), 'sections_' . $count . '_positionright', true );
$image_izq	 = get_post_meta( get_the_id(), 'sections_' . $count . '_image_izq', true );
$image_der	 = get_post_meta( get_the_id(), 'sections_' . $count . '_image_der', true );

$image_izq = wp_get_attachment_image($image_izq, 'full', false, array(
	'alt'   => 'kuady',
	'class' => $positionleft == '0' ? 'position-top left animated' : 'position-bottom left animated',
));

$image_der = wp_get_attachment_image($image_der, 'full', false, array(
	'alt'   => 'kuady',
	'class' => $positionright == '0' ? 'position-top right animated' : 'position-bottom right animated',
));

//popup
$ctapopupheropadre	 = get_post_meta( get_the_id(), 'sections_' . $count . '_ctapopupheropadre', true );
?>

<style>
.modalcustom {display: none;}
.hero {min-height: <?php echo $min_height_hero ; ?>vh!important;}
.especialbackgroundkuady {background-image: url('/wp-content/themes/kuady/images/loop-kuady-card.svg');background-repeat: no-repeat;background-position-y:84%;background-position-x: -20px;background-size: 102%!important;}
.anchoespecial {flex-basis: 85% !important;}
.thankyoupage {font-size: 70px;font-weight: 700;line-height: 30px;}
.thankyoupagespan {font-size: 32px;line-height: 70px;color:#110039;font-weight: 400;font-style: normal;font-family:'Moderat',sans-serif;}

@media (max-width: 450px) {
	.anchoespecial {flex-basis: 60% !important;}
	.thankyoupage {font-size: 34px;line-height: 57px;}
	.thankyoupagespan {font-size: 24px;line-height: 30px;}
	.especialbackgroundkuady {display: none;}
}

@media (max-width: 950px) and (min-width: 450px) and (orientation: landscape) {
	.thankyoupage {font-size: 37px;line-height: 64px;}
	.thankyoupagespan {font-size: 32px;line-height: 36px;}
	.anchoespecial {flex-basis: 75% !important;}
}

.modalcustom:target {display: block;}
/*modal por default*/
.modalcustom {position: fixed;top: 0;right: 0;bottom: 0;left: 0;background: rgba(0, 0, 0, 0.8);z-index: 99999;opacity: 0;-webkit-transition: opacity 400ms ease-in;-moz-transition: opacity 400ms ease-in;transition: opacity 400ms ease-in;pointer-events: none;}
.modal-contentcustom {background: #fefefe;/* width: 700px; *//* height: 44vh; */max-width: 700px;width: 95%;min-height: 44vh;position: relative;margin: 13% auto;padding: 30px;border-radius: 50px;}
.modalcustom:target {opacity: 1;pointer-events: auto;}
a.btn.closebtn {padding: 9px 13px;text-decoration: none;color: black;font-family: Arial, Helvetica, sans-serif;background-color: #00EAD0;border-radius: 100%;}
#close {display: none;}
@media only screen and (max-width: 450px) {
    .modal-contentcustom {
        width: 100%;
    }
}
</style>

<section name="hero_new" class="hero hero_new <?php echo (!empty($logokuadybackground)) ? 'especialbackgroundkuady' : '' ?>  <?php echo esc_attr( 'section-' . $count ); ?>
	<?php echo $is_big_hero ? 'big' : 'stripe'; ?>
	<?php echo esc_attr( 'bg-' . $background_color ); ?>
	<?php echo $cta_on_image ? 'cta_on_image' : ''; ?>">


	<!-- Modal lo ponemos aqui por el zindex sobra porque se encuentra en el footer-->
<div class="modalcustom" id="myModalQR">
	<div class="modal-contentcustom">
		<p><a href="#close" class="btn closebtn text-color-general-ultra-marine">x</a></p>
		<iframe class="modal-iframe" src="https://stg-web.kuady.com/kuady-QR.html" scrolling="no"></iframe>
	</div>
</div>
<!-- / Modal -->




	<!-- php echo $cta_on_image ? '' : ''; ?> -->
	<div class="hero__content <?php echo $es_home ? 'wrapper wrapperhero' : ' wrapper'; ?>" style="<?php echo ( $noimage == '0') ? 'justify-content: center;text-align: center;' : null ; ?> <?php echo ( $heading_width_center == '1' ) ? 'text-align: center;display: flex;justify-content: center;' : '' ; ?>">

	<?php if ( $is_big_hero ) { ?>

		<?php if ( $image_little != '' ) : ?>

<?php $is_mobile = wp_is_mobile();

if ($is_mobile) { 
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $is_tablet = false;

    // Verificar si es un dispositivo iPad
    if (strpos($user_agent, 'iPad') !== false) {
        $is_tablet = true;
    } else {
        // Si no es un iPad, verificar otros dispositivos Android y asegurarse de que no es un dispositivo móvil
        if (strpos($user_agent, 'Android') !== false) {
            $is_mobile = strpos($user_agent, 'Mobile');
            if ($is_mobile === false) {
                $is_tablet = true;
            }
        }
    }
    if ($is_tablet) {
        // Es una tablet
        ?>
        <div class="hero__image" style="display:<?php echo ($noimage == '0') ? 'none;' : 'contents'; ?>">
            <div class="<?php echo ($imagen_especial_hero == '1') ? 'imagen_especial_hero' : ''; ?>"><?php echo $image_htmltablet; ?></div>
    <?php
    } else {
        // Es un dispositivo móvil (no una tablet) 
        ?>
        <div class="hero__image" style="display:<?php echo ($noimage == '0') ? 'none;' : 'contents'; ?>">
            <div class="<?php echo ($imagen_especial_hero == '1') ? 'imagen_especial_hero' : ''; ?>"><?php echo $image_html; ?></div>
    <?php
    }

} else {
    // No es un dispositivo móvil
    ?>







    <div class="hero__image" style="display:<?php echo ($noimage == '0') ? 'none;' : null; ?>;">
        <div class="content__gallery hero_new <?php echo ($special_imagen == '1') ? 'hero_new_special_imagen' : ''; ?><?php echo ($ajustar_imagen == '1') ? 'hero_new__ajustar-imagen' : ''; ?>">
            <div class="<?php echo ($imagen_especial_hero == '1') ? 'imagen_especial_hero' : ''; ?> border-green22" style="display: flex;flex-direction: row;align-items: center;justify-content: center;">
                <?php
                echo $image_html;
                // flotantes
                echo $image_der;
                echo $image_izq;
                ?>
            </div>
        </div>
<?php
}
?>
				<?php if ( $video_file_id ) : ?>
					<?php $hero_video_url = wp_get_attachment_url( $video_file_id ); ?>
					<a class="hero__video-play" data-fslightbox="" href="<?php echo esc_url( $hero_video_url ); ?>" role="button" aria-label="<?php echo esc_attr_e( 'Play video', 'kuady' ); ?>" target="_blank">
						<img srcset="<?php echo esc_url( $uri ); ?>/images/icons/play.png, <?php echo esc_url( $uri ); ?>/images/icons/play@2x.png 2x" src="<?php echo esc_url( $uri ); ?>/images/icons/play.png" alt='Kuady' width="148" height="148">
					</a>
				<?php endif; ?>
			</div>
		<?php endif; ?>

	<div class="hero__text <?php echo $cta_on_image ? 'cta_on_image' : ''; ?> hero_content_h1_personal" style="flex-basis: <?php echo $anchoespecial ;?>% !important;">

		<?php if ( !empty($hero_tagline) ) : ?>
		<p class="hero__tagline <?php echo $cta_on_image ? 'cta_on_image' : ''; ?>"><?php echo wp_kses_post( $hero_tagline); ?></p>
		<?php endif; ?>
		<h1 class="hero__heading <?php echo $ajustar_hero_heading ? 'hero__heading_litte' : null ;  ?> <?php echo $cta_on_image ? 'cta_on_image' : ''; ?>" style="color:<?php echo ( $text_color ); ?>"><?php echo wp_kses_post( $hero_heading ); ?></h1>
		<?php if ( !empty($hero_description) ) : ?>
			<?php $is_mobile = wp_is_mobile(); 
			?>

			<p class="hero__description <?php echo $cta_on_image ? 'cta_on_image' : ''; ?>" style="color:<?php echo ( $text_color ); ?>; max-width:<?php echo ( $heading_width ); ?>%;
					<?php if ( $is_mobile ): ?>max-width:100%;<?php endif; ?>">
						<?php echo wp_kses_post( $hero_description ); ?>
			</p>
		<?php endif; ?>

		<div class="hero__links <?php echo $cta_on_image ? 'cta_on_image' : ''; ?>">
			<?php //quitamos el margen del boton para que quede centrado <?php echo sanitize_title( get_the_title() ); ?>


					<?php
					if ( $ctapopupheropadre == '1' ) { ?>
					<a class="hero__cta button button-primary" style="margin-right: 0px!important;" href="myModalQR">
						<?php echo esc_html( $cta[0]["title"] ); ?>
					</a>

					<?php
					} else {
						if ( $noimage == '0' ) {
							if ( !empty($cta[0]) ) : ?>
								<a class="hero__cta button <?php echo ( empty($ctastylebuttom) ? 'button-primary' : 'button-secondary' ); ?>" style="margin-right: 0px!important;" href="<?php echo esc_url( $cta[0]["url"] ); ?>" target="_blank">
									<?php echo esc_html( $cta[0]["title"] ); ?>
								</a>
							<?php endif; ?>
						<?php
						} else {
							if ( !empty($cta[0]) ) : ?>
								<a class="hero__cta button <?php echo ( empty($ctastylebuttom) ? 'button-primary' : 'button-secondary' ); ?>" href="<?php echo esc_url( $cta[0]["url"] ); ?>" target="_blank">
									<?php echo esc_html( $cta[0]["title"] ); ?>
								</a>
							<?php endif; ?>
						<?php
						}
					}
					?>


			<?php if ( !empty($more_info[0]) ) : ?>
			<a class="hero__more-info" href="<?php echo esc_attr( $more_info[0]["url"] ); ?>"><?php echo esc_attr( $more_info[0]["title"] ); ?></a>
			<?php endif; ?>

				<?php
				$is_mobile = wp_is_mobile();

				if ($is_mobile) {

					// no hacer nada

				} else { ?>

					<div style="margin-bottom:<?php echo esc_attr( $more_space_below ); ?>em"></div>

				<? }

				?>
		</div>
	</div>

<?php } else { ?>

	<div class="hero__text">
		<?php if ( !empty($hero_tagline) ) : ?>
		<p class="hero__tagline"><?php echo esc_attr( $hero_tagline); ?></p>
		<?php endif; ?>
		 <h1 class="hero__heading"><?php echo esc_attr( $hero_heading ); ?></h1>
		<?php if ( !empty($hero_subheading) ) : ?>
		<p class="hero__subheading"><?php echo esc_attr( $hero_subheading ); ?></p>
		<?php endif; ?>

	</div>

	<?php } ?>

	<div style="<?php echo ($lightpoint == '1') ? 'position: absolute;top: 0%;width: 50%;margin: 0 auto;left: 30%;' : 'display:none' ; ?>">
          <div class="nuevopuntodeluz"></div>
    </div>

	<div style="<?php echo ($lightpoint == '1') ? 'position: absolute;bottom: 14%;width: 50%;margin: 0 auto;left: 0;' : 'display:none' ; ?>">
          <div class="nuevopuntodeluz nuevopuntodeluz-opacidad" style="height:280px !important"></div>
    </div>
	</div>
</section>
