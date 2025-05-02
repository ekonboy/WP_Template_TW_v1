<?php

/**
 * payments web section
 *
 * @package      gabii WordPress Starter
 * @author       SQUAD WEB.
 * @since        1.0.0
 */

$count = get_query_var('prt_count');
$activatedcontent = get_sub_field('activatedcontent');
$content = get_sub_field('content');
$background_color = get_sub_field('background_color');
$ancho_total_texto = get_sub_field('ancho_total_texto');
$imagencontent = get_sub_field('imagencontent');
$content_onlymobile = get_sub_field('content_onlymobile');
?>

<?php
// require_once('vendor/autoload.php'); 

// require_once( get_template_directory() . '/vendor/autoload.php' );
require_once( get_template_directory() . '/vendor/stripe/stripe-php/init.php' );

\Stripe\Stripe::setApiKey('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');

// Procesa la solicitud de pago
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $token = $_POST['stripeToken'];
        $charge = \Stripe\Charge::create([
            'amount' => 3000,  // Monto en centavos (5000 = $50.00)
            'currency' => 'EUR',
            'description' => 'Pago por los servicios de desarrollo web',
            'source' => $token,
        ]);
        echo 'Pago realizado con éxito';
    } catch (\Stripe\Exception\CardException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
?>



<style>



</style>




<section class="payments_web block <?php echo esc_attr($content_onlymobile == 1 ? 'md:hidden' : ''); ?> <?php echo esc_attr('section-' . $count); ?>" style="display: flex;flex-direction: row;flex-wrap: nowrap;align-content: space-between;justify-content: center;background-color: <?php echo esc_attr($background_color); ?>">
  <div class="container">
    <?php if ($imagencontent): ?>
      <div style="flex: 1; padding: 20px; display: flex; justify-content: center; align-items: center;">
        <img src="<?php echo esc_url($imagencontent); ?>" alt="Imagen" style="max-width: 100%; height: auto;">
      </div>
    <?php endif; ?>

    <?php if ($content): ?>
      <?php echo $content = get_sub_field('content');
      ?>
    <?php endif; ?>



    <form action="stripe-payment.php" method="POST">
    <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="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"
        data-amount="3000" 
        data-name="gabii rese - Full Stack Developer"
        data-description="Pago por los servicios de desarrollo web"
        data-image="resources/img/skills/gabii-mobile_LOGO33.png" 
        data-currency="EUR"
        data-locale="auto">
    </script>
</form>



    <button id="pago-hora">Comprar 1 hora - 30€</button>
<button id="pago-pack">Comprar Pack 10 horas - 250€</button>


  </div>







</section>
    </div>
