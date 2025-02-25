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
    .green-div,
    .red-div {
        /* width: 100vw; 
            height: 100vh;  */
        justify-content: center;
        align-items: center;
        position: relative;
        flex-direction: column;
        text-align: center;
        transition: opacity 0.5s ease;
        z-index: 1;
        display: flex;
    }

    /* .green-div {
        background-color: green;
    } */

    .red-div {

        opacity: 0;
        pointer-events: none;
    }

    .green-div p,
    .red-div p {
        font-size: 50px;
        color: white;
        margin: 100px 0 20px 0;
    }

    .circle,
    .circle2 {
        position: absolute;
        width: 600px;
        height: 600px;
        border-radius: 50%;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        visibility: hidden;
        transition: all 0.5s ease-out;
        z-index: 5;
    }

    .circle {
        background-color: #C8FF66;
    }

    .circle2 {
        background-color: #d0ff71;
    }

    .expanded {
        visibility: visible;
        width: max(120vw, 120vh);
        height: max(120vw, 120vh);
    }

    .gabii_template_bubble {
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: flex-start;
        height: 480px;
        position: relative;
    }

    .bubbletext {
        text-align: left;
        width: 100%;
        margin-bottom: 40px;
    }




    .bubblebutton {
        position: absolute;
        bottom: 20px;
        right: 20px;
    }

    .hidden {
        display: none !important;
    }
</style>


<section class="developer block <?php echo esc_attr($content_onlymobile == 1 ? 'md:hidden' : ''); ?> <?php echo esc_attr('section-' . $count); ?>" style="display: flex;flex-direction: column;flex-wrap: nowrap;align-content: space-between;justify-content: center;background-color: <?php echo esc_attr($background_color); ?>">
    <div class="container22" style="">

        <?php if ($imagencontent): ?>
            <div style="flex: 1; padding: 20px; display: flex; justify-content: center; align-items: center;">

                <img src="<?php echo esc_url($imagencontent); ?>" alt="Imagen" style="max-width: 100%; height: auto;">

            </div>
        <?php endif; ?>

        <?php if ($content): ?>
            <?php echo $content = get_sub_field('content');
            ?>
        <?php endif; ?>


        <div class="green-div" id="greenDiv">

            <div class="gabii_template_bubble">
                <div class="bubbletext">
                    <b>111 Formación Complementaria</b><br>
                    - Curso de NODE.JS, aplicaciones para API diciembre 2021.<br>
                    - Curso analítica y plan de marketing digital, CEAM, noviembre 2021.<br>
                    - Formación de DOCKER y GITHUB en Barcelona Activa, agosto 2021.<br>
                    - Formación online de Mobirise en Barcelona Activa, 2021.<br>
                    - Formación de API REST online en Barcelona Activa, 2020.<br>
                </div>
                <button class="bubblebutton text-white px-5 py-2 items-center bg-gradient-to-tr from-[#1321AC] to-[#881ABD] rounded-full" onclick="toggleView()">Haz clic aquí</button>
            </div>

        </div>



    </div>

    <div class="red-div" id="redDiv">
        <div class="gabii_template_bubble">
            <div class="bubbletext">
                <b>333 Formación Complementaria</b><br>
                - Curso de NODE.JS, aplicaciones para API diciembre 2021.<br>
                - Curso analítica y plan de marketing digital, CEAM, noviembre 2021.<br>
                - Formación de DOCKER y GITHUB en Barcelona Activa, agosto 2021.<br>
                - Formación online de Mobirise en Barcelona Activa, 2021.<br>
                - Formación de API REST online en Barcelona Activa, 2020.<br>
            </div>
            <button class="bubblebutton text-white px-5 py-2 items-center bg-gradient-to-tr from-[#1321AC] to-[#881ABD] rounded-full" onclick="toggleView()">Haz clic aquí</button>
        </div>

    </div>

    <!-- Círculos -->
    <div class="circle" id="circle"></div>
    <div class="circle2" id="circle2"></div>


    <script>
        let isGreen = true; // Estado inicial

        function toggleView() {
            const circle = isGreen ? document.getElementById('circle') : document.getElementById('circle2');
            const greenDiv = document.getElementById('greenDiv');
            const redDiv = document.getElementById('redDiv');

            circle.style.visibility = 'visible';
            circle.classList.add('expanded');

            setTimeout(() => {
                circle.style.visibility = 'hidden';
                circle.classList.remove('expanded');

                switch (isGreen) {
                    case true:
                        greenDiv.style.opacity = "0";
                        greenDiv.style.pointerEvents = "none";

                        redDiv.style.opacity = "1";
                        redDiv.style.pointerEvents = "auto";

                        greenDiv.classList.add('hidden'); // Añade la clase hidden
                        redDiv.classList.remove('hidden'); // Elimina la clase hidden
                        break;
                    case false:
                        redDiv.style.opacity = "0";
                        redDiv.style.pointerEvents = "none";

                        greenDiv.style.opacity = "1";
                        greenDiv.style.pointerEvents = "auto";

                        redDiv.classList.add('hidden'); // Añade la clase hidden
                        greenDiv.classList.remove('hidden'); // Elimina la clase hidden

                        break;
                }

                isGreen = !isGreen; // Cambiar estado
            }, 500);
        }
    </script>

    </div>
</section>