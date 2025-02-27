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
$background_color = get_sub_field('background_color');
$ancho_total_texto = get_sub_field('ancho_total_texto');
$imagencontent = get_sub_field('imagencontent');
$content_onlymobile = get_sub_field('content_onlymobile');
?>

<style>

</style>


<section class="developer block <?php echo esc_attr($content_onlymobile == 1 ? 'md:hidden' : ''); ?> <?php echo esc_attr('section-' . $count); ?>" style="display: flex;flex-direction: column;flex-wrap: nowrap;align-content: space-between;justify-content: center;background-color: <?php echo esc_attr($background_color); ?>">

  <div class="container22">

    <?php if ($imagencontent): ?>
      <div style="flex: 1; padding: 20px; display: flex; justify-content: center; align-items: center;">

        <img src="<?php echo esc_url($imagencontent); ?>" alt="Imagen" style="max-width: 100%; height: auto;">

      </div>
    <?php endif; ?>

    <?php if ($content): ?>
      <?php echo $content = get_sub_field('content');
      ?>
    <?php endif; ?>

    <div class="circle-container">
      <div class="text-circle"></div>
      <div class="logo-container">
        <i class="wplogo"></i> <!-- Icono como texto, o reemplaza con un icono si tienes -->
      </div>
    </div>


  </div>
  <!-- const text = "FULL STACK DEVELOPER - W O R D P R E S S - © 2025 - " -->
  <script>
        const text = "F U L L S T A C K D E V E L O P E R - W O R D P R E S S - ";
        const container = document.querySelector(".text-circle");

        // Generar las letras en círculo
        for (let i = 0; i < text.length; i++) {
            let span = document.createElement("span");
            span.innerText = text[i];
            let angle = (360 / text.length) * i;
            span.style.transform = `rotate(${angle}deg) translate(0, -120px)`; // Ajustamos la posición de las letras
            container.appendChild(span);
        }

        let rotation = 0;

        window.addEventListener("wheel", (event) => {
            rotation += event.deltaY > 0 ? 10 : -10; // Girar en función del scroll
            container.style.transform = `rotate(${rotation}deg)`; // Girar el texto sobre su eje
        });
    </script>

  </div>
</section>