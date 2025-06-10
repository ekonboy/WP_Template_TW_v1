<?php
/**
 * Simpletext Content section
 *
 * @package      gabii WordPress Starter
 * @author       SQUAD WEB.
 * @since        1.0.0
 */

$count = get_query_var('prt_count');
$activatedcontent = get_sub_field('activatedcontent');
$heading = get_sub_field('heading');
$content = get_sub_field('content');
$background_color = get_sub_field('background_color');
$colortext_content = get_sub_field('colortext_content');
$ancho_total_texto = get_sub_field('ancho_total_texto');
$justificar_texto = get_sub_field('justificar_texto'); 
$titulo_centrado = get_sub_field('titulo_centrado');
$ancla = get_sub_field('ancla');
$content_year = get_sub_field('content_year');
$empresa = get_sub_field('empresa');
?>
<style>
    .after\:w-full:after {
    content: var(--tw-content);
    width: 7%;
}
</style>



    <style>
        body,
html {
    overflow-x: visible;
}
  :root {
  --cardwp-height: 50vw;
  --cardwp-margin: 4vw;
  --cardwp-top-offset: 1em;
  --outlinewp-width: 0px;
  --numcardswp: 3;
}

ul#cardswp.ul-cardswp {
  padding-bottom: calc(var(--numcardswp) * var(--cardwp-top-offset))!important;
  margin-bottom: var(--cardwp-margin)!important;
}

#cardwp_1, #cardwp_2, #cardwp_3 {
  /* Index variable para cada tarjeta */
}
#cardwp_1 { --indexwp: 1; }
#cardwp_2 { --indexwp: 2; }
#cardwp_3 { --indexwp: 3; }

#cardwp_1 > .cardwp__content,
#cardwp_2 > .cardwp__content,
#cardwp_3 > .cardwp__content {
  background-repeat: no-repeat !important;
  background-size: cover !important;
  background-position: center !important;
}
#cardwp_1 > .cardwp__content { background-image: url("/wp-content/uploads/2025/06/Benefit-a.webp") !important; }
#cardwp_2 > .cardwp__content { background-image: url("/wp-content/uploads/2025/06/Benefit-b.webp") !important; }
#cardwp_3 > .cardwp__content { background-image: url("/wp-content/uploads/2025/06/Benefit-c.webp") !important; }

.cardwp-li {
  position: sticky;
  top: 9rem !important;
  padding-top: calc(var(--indexwp) * var(--cardwp-top-offset));
  max-height: 550px;
  outline: var(--outlinewp-width) solid lime;
}

.cardwp__content {
  transform-origin: 50% 0%;
  will-change: transform;
  min-height: 550px;
  box-shadow: 0 0.2em 1em rgba(0,0,0,0.1), 0 1em 2em rgba(0,0,0,0.1);
  color: rgb(10,5,7);
  border-radius: 40px;
  overflow: hidden;
  display: grid;
  grid-template-areas: "text img";
  grid-template-columns: 1fr 1fr;
  align-items: stretch;
  outline: var(--outlinewp-width) solid blue;
}

.cardwp__content > div {
  grid-area: text;
  width: 80%;
  place-self: center;
  text-align: left;
  display: grid;
  gap: 1em;
  place-items: start;
}

.cardwp__content > figure {
  grid-area: img;
  overflow: hidden;
}

.cardwp__content > figure > img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

h2.h2-stickwp-cardwp { font-weight: bold; margin-bottom: 80px; }

div.stickywp-cardswp-container {
  display: block;
  width: 80vw;
  margin: 0 auto;
  text-align: center;
  max-width: 1200px;
}

#cardswp {
  list-style: none;
  outline: calc(var(--outlinewp-width) * 10) solid hotpink;
  display: grid;
  grid-template-columns: 1fr;
  grid-template-rows: repeat(var(--numcardswp), var(--cardwp-height));
  gap: var(--cardwp-margin);
}

div.wp-mainwp h2 { font-weight: 300; font-size: 2.5em; }
div.wp-mainwp p { font-family: sans-serif; font-weight: 300; line-height: 1.42; }
div.wp-mainwp .btnwp {
  background: rgb(188 87 36);
  color: #fff;
  text-decoration: none;
  display: inline-block;
  padding: 0.5em;
  border-radius: 0.25em;
}

aside.wp-asidewp { width: 95%; margin: 0 auto; text-align: left; }
aside.wp-asidewp p { margin-bottom: 1em; }

@supports (animation-timeline: scroll()) {
  .cardwp-li {
    --indexwp0: calc(var(--indexwp) - 1);
    --reversewp-index: calc(var(--numcardswp) - var(--indexwp0));
    --reversewp-index0: calc(var(--reversewp-index) - 1);
  }
  @keyframes scalewp {
    to { transform: scale(calc(1.1 - 0.1 * var(--reversewp-index))); }
  }
  #cardswp {
    view-timeline-name: --cardswp-element-scrolls-in-body;
  }
  .cardwp__content {
    --startwp-range: calc(var(--indexwp0) / var(--numcardswp) * 100%);
    --endwp-range: calc(var(--indexwp) / var(--numcardswp) * 100%);
    animation: linear scalewp forwards;
    animation-timeline: scroll();
    animation-range: exit-crossing var(--startwp-range) exit-crossing var(--endwp-range);
  }
}

.featurewp-hero {
  max-width: 360px;
  width: 100%;
  display: flex;
  align-items: center;
  padding: 2rem;
  gap: 20px;
  border-radius: 21px;
  max-height: 100px;
}

</style>

<div class="experiencia_religiosa" v-show="selectedOption === 'curriculum'">
<div style="display:<?php echo ($activatedcontent == 0) ? 'none' : 'block'; ?>;">
<section class="simpletext-content flex justify-center flex-col md:flex-row especialdesktop <?php echo esc_attr('section-' . $count); ?>" style="background-color: <?php echo esc_attr($background_color); ?>;">

<?php if ($ancla): ?><div id="<?php echo $ancla ;?>"></div><?php endif; ?>
    <?php if ($content_year): ?><div class="boxmobilecircle icon-box headlineyear"><div class="anytreballcat"><?php echo $content_year ;?></div></div><?php endif; ?>

    <div class="container boxmobile" style="display: flex;flex-direction: column;flex-wrap: wrap;max-width: <?php echo esc_attr($ancho_total_texto); ?>px;">

                <h1 class="<?php echo $titulo_centrado ? 'after:left-1/2 after:translate-x-[-50%]' : 'after:left-0'; ?> font-semibold relative after:content[''] after:h-1 after:rounded-full after:bg-brand after:absolute after:w-12 after:content[''] after:bg-brand text-2xl lg:text-3xl mb-8 after:-bottom-3 text-slate-600 dark:after:bg-[#d0ff71] dark:text-white" style="<?php echo $titulo_centrado ? 'text-align: center;' : ''; ?>">
                    <?php echo !empty($heading) ? esc_html($heading) : ''; ?>
                </h1>

                <?php if ($empresa): ?>
                <div class="empresa text-white bg-[#1321AC] dark:text-[#0e0f11] dark:bg-[#d0ff71] "><?php echo $empresa ;?></div>
                <?php endif; ?>

        <?php if ($content): ?>
            <div class="lg:text-[18px] text-[16px]  <?php echo get_sub_field('justificar_texto'); ?>"><?php echo wp_kses_post($content); ?></div>
        <?php endif; ?>
    </div>

</section>
</div>
</div>

