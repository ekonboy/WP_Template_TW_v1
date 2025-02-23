<?php

/**
 * developer Content section
 *
 * @package      gabii WordPress Starter
 * @author       SQUAD WEB.
 * @since        1.0.0
 */

// Obtener el índice de la sección
$count = get_query_var('prt_count');
$content = get_sub_field('content');

// Variables de estilo
$background_color = get_sub_field('background_color');
$ancho_total_texto = get_sub_field('ancho_total_texto');
$imagencontent = get_sub_field('imagencontent');
$content_onlymobile = get_sub_field('content_onlymobile');

?>
 <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->

<section class="developer block <?php echo esc_attr( $content_onlymobile == 1 ? 'md:hidden' : '' ); ?> <?php echo esc_attr('section-' . $count); ?>" style="display: flex;flex-direction: row;flex-wrap: nowrap;align-content: space-between;justify-content: center;background-color: <?php echo esc_attr($background_color); ?>">
    <div class="container" style="padding: 15px;display: flex;flex-direction: column;align-content: space-around;flex-wrap: wrap;justify-content: center;">

        <?php if ($imagencontent): ?>
            <div style="flex: 1; padding: 20px; display: flex; justify-content: center; align-items: center;">

                <img src="<?php echo esc_url($imagencontent); ?>" alt="Imagen" style="max-width: 100%; height: auto;">

            </div>
        <?php endif; ?>
   

        <style>
.switcher-container {
    position: relative;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #000000;
    border-radius: 50px;
    border: 2px solid #b6b3b3;
    width: 565px;
    height: 60px;
    margin-bottom: 20px;
}

.switcher-option {
    color: white;
    padding: 22px 20px;
    border: none;
    border-radius: 37px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    width: 33.3%;
    text-align: center;
    position: relative;
    display: flex
;
    flex-direction: row;
    justify-content: center;
    gap: 9px;
}

    .switcher-option:hover {
      /* background-color: #ddd; */
    }

    .switcher-option.active {
    color: white;
    font-weight: 700;
}

    /* Estilo para el fondo azul */
    .active-background {
    position: absolute;
    top: -2px;
    left: 0;
    width: 34.33%;
    height: 109%;
    border-radius: 50px;
    
    transition: left 0.3s ease;
    border: 4px solid red;
}

    .switcher-content {
      width: 540px;
      height: 200px;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 8px;
      background-color: white;
      text-align: center;
      font-size: 18px;
      display: none;
    }

    /* Mostrar contenido cuando se activa */
    .show {
      display: block;
    }

    .ni-plus-medi-fill,
.ni-flag,
.ni-call-alt-fill {font-size: 24px;}
        </style>



        <?php if ($content): ?>
            <?php echo $content = get_sub_field('content');
            ?>
        <?php endif; ?>


          <!-- Contenedor del toggle -->
  <div class="switcher-container">
    <!-- Fondo azul que se moverá al hacer clic -->
    <div id="active-background" class="active-background"></div>

    <button id="option1-btn" class="switcher-option active"><em class="ni ni-plus-medi-fill"></em>Formación</button>
    <button id="option2-btn" class="switcher-option"><em class="ni ni-flag"></em>Idiomas</button>
    <button id="option3-btn" class="switcher-option"><em class="ni ni-call-alt-fill"></em> Contacto</button>
  </div>

  <!-- Contenido que cambia con cada opción -->
  <div id="option1-content" class="switcher-content show">
    <h2>Contenido de Opción 1</h2>
    <p>Este es el contenido de la primera opción.</p>
  </div>
  <div id="option2-content" class="switcher-content">
    <h2>Contenido de Opción 2</h2>
    <p>Este es el contenido de la segunda opción.</p>
  </div>
  <div id="option3-content" class="switcher-content">
    <h2>Contenido de Opción 3</h2>
    <p>Este es el contenido de la tercera opción.</p>
  </div>

    </div>
</section>