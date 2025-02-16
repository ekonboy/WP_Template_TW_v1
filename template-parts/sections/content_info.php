<?php
/**
 * Content info section
 *
 * @package HS WordPress Starter
 * @author SQUAD WEB.
 * @since 1.0.0
 **/

// Get module order among all modules on the page.
$count = get_query_var( 'prt_count' );

/**
 * Get values from post ACF custom fields.
 ******************************************/

/* Text-related variables */
$heading     = get_post_meta( get_the_id(), 'sections_' . $count . '_heading', true );
$description = get_post_meta( get_the_id(), 'sections_' . $count . '_description', true );

/* Accordions-related variables */
$num_of_accordions = get_post_meta( get_the_id(), 'sections_' . $count . '_accordions', true );
$accordions = array();

// For each accordion
for ($i = 0; $i < $num_of_accordions ; $i++) {

  // Get accordion variables
    $accordion_heading = get_post_meta( get_the_id(), 'sections_' . $count . '_accordions_' . $i . '_accordion_heading' , true );
    $accordion_content = get_post_meta( get_the_id(), 'sections_' . $count . '_accordions_' . $i . '_accordion_content' , true );

    // Bundle accordion variables
    $accordion = array(
      'heading' => $accordion_heading,
      'content' => $accordion_content,
    );

    // Add accordion to accordions array
    $accordions[] = $accordion;
}
?>

<section name="content_info" class="content-info <?php echo esc_attr( 'section-' . $count ); ?>">
	<div class="wrapper">

    <?php if ( $heading || $description ) : ?>
      <header class="content-info__header">

        <?php if ( $heading ) : ?>
          <h2 class="content-info__heading"><?php echo esc_html( $heading ); ?></h2>
        <?php endif; ?>

        <?php if ( $description ) : ?>
          <p class="content-info__description"><?php echo esc_html( $description ); ?></p>
        <?php endif; ?>

      </header>
    <?php endif; ?>

    <div class="content-info__accordions-container content-info__accordions-container--col-<?php echo $num_of_accordions; ?>">
      <?php foreach ( $accordions as $accordion ) : ?>

        <article class="content-info__accordion accordion">

            <header class="accordion__header accordion_heading_class">
              <h3 class="accordion__heading"><?php echo esc_html( $accordion['heading'] ); ?></h3>

            </header>

            <div class="accordion__content" style="max-height: 203px;">
              <p class="content-info__accordion-content"><?php echo esc_html( $accordion['content'] ); ?></p>
            </div>

        </article> <!-- .content-info__accordion -->

      <?php endforeach; ?>
    </div> <!-- .content-info__accordions-container -->
  </div> <!-- .wrapper -->
</section>