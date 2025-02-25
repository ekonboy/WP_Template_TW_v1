<?php

/**
 * menuancla Content section
 *
 * @package      gabii WordPress Starter
 * @author       SQUAD WEB.
 * @since        1.0.0
 */

// Obtener el índice de la sección
$count = get_query_var('prt_count');
$background_color = get_sub_field('background_color');
$content_onlymobile = get_sub_field('content_onlymobile');
$ancla = get_sub_field('ancla');
$imagencontent = get_sub_field('imagencontent');
?>
<style>
   
</style>

<section class="menuancla block <?php echo esc_attr($content_onlymobile == 1 ? 'md:hidden' : ''); ?> <?php echo esc_attr('section-' . $count); ?>" style="display: flex;flex-direction: row;flex-wrap: nowrap;align-content: space-between;justify-content: center;height: 500px;background-color: <?php echo esc_attr($background_color); ?>">
    <span id="<?php echo $ancla; ?>"><span>
            <div class="container" style="padding: 15px;display: flex;flex-direction: column;align-content: space-around;flex-wrap: wrap;justify-content: center;">

                <div class="switcher-container bg-astro-dark-900/55" style="margin: 0 auto;">
                    <div id="active-background" class="active-background"></div>

                    <?php
                    if (have_rows('menusancla')) :
                        $menu_items = get_field('menusancla');
                        $total_rows = is_array($menu_items) ? count($menu_items) : 0;

                        echo "<!-- Total de filas: $total_rows -->"; // Debugging

                        $contador = 0;

                        while (have_rows('menusancla')) : the_row();
                            $contador++;
                            $nombreancla = get_sub_field('nombreancla');
                            $iconoancla = get_sub_field('iconoancla');
                            $datatarget = get_sub_field('data-target');
                            $button_class = ($contador == 1) ? 'movespeech-bubble' : 'switcher-option';
                            $button_class = ($contador == 2) ? 'movespeech-bubbledefault' : 'switcher-option';
                            $button_class = ($contador == 3) ? 'switcher-option modal-toggle' : 'switcher-option';
                            $data_target = ($contador == 3) ? 'data-target="' . $datatarget . '"' : '';
                            echo "<!-- Fila actual: $contador -->"; // Debugging
                    ?>
                            <button
                                onclick="handleButtonClick(this)"
                                id="option<?php echo $contador; ?>-btn"
                                class="<?php echo $button_class; ?>"
                                <?php echo $data_target; ?>
                                data-action="<?php echo ($contador == 1) ? 'moverDiv' : 'moverDiv2'; ?>"> <!-- Usamos PHP para definir qué función se ejecutará -->
                                <?php echo $nombreancla; ?> <em class="ni <?php echo $iconoancla; ?>"></em>
                            </button>
                    <?php
                        endwhile;
                        echo "<!-- Total de vueltas del while: $contador -->";
                    endif;
                    ?>
                </div>


                <div id="option1-content" class="switcher-content show">

                    <div class="speech-bubbledefault">
                        <b>Formación Reglada</b><br />
                        DAI, Desarrollo de Aplicaciones Informáticas. (Grado superior, 2 años. Finalizado en 2008).<br />
                        Técnico en Edificación y Obra Civil. (Grado superior, 2 años. Finalizado en 2001).
                    </div>


                    <div class="speech-bubble">
                        <b>Formación Reglada</b><br />
                        DAI, Desarrollo de Aplicaciones Informáticas. (Grado superior, 2 años. Finalizado en 2008).<br />
                        Técnico en Edificación y Obra Civil. (Grado superior, 2 años. Finalizado en 2001).
                    </div>
                </div>

                <div id="option2-content" class="switcher-content">
                    <div class="speech-bubble">
                        <b>Formación Complementaria</b><br />
                        - Curso de NODE.JS, aplicaciones para API diciembre 2021.<br />
                        - Curso analítica y plan de marketing digital, CEAM, noviembre 2021.<br />
                        - Formación de DOCKER y GITHUB en Barcelona Activa, agosto 2021.<br />
                        - Formación online de Mobirise en Barcelona Activa, 2021.<br />
                        - Formación de API REST online en Barcelona Activa, 2020.<br />
                    </div>
                    <div class="speech-bubbledefault">
                        <b>Formación Complementaria</b><br />
                        - Curso de NODE.JS, aplicaciones para API Diciembre 2021.<br />
                        - Curso analítica y plan de marketing digital, CEAM, noviembre 2021.<br />
                        - Formación de Docker y Github en Barcelona Activa, agosto 2021.<br />
                        - Formación online de Mobirise en Barcelona Activa, 2021.<br />
                        - Formación de API REST online en Barcelona Activa, 2020.<br />
                    </div>
                </div>

                <img src="<?php echo get_template_directory_uri() . '/resources/img/HeroBackground.webp'; ?>" alt="Hero" class="w-full h-auto" style="width: 800px;height: 100%;position: relative;top: -200px;z-index: -1;">
            </div>


            <script>

  
    //elimina flyaway
    function moverDiv() {
        document.querySelectorAll(".speech-bubble").forEach(el => {
            el.classList.remove("movespeech-bubbledefault");
            void el.offsetWidth;
            el.classList.add("movespeech-bubble");
        });
    }

    function moverDiv2() {
        document.querySelectorAll(".speech-bubble").forEach(el => {
            el.classList.remove("movespeech-bubbledefault");
            void el.offsetWidth;
            el.classList.add("movespeech-bubbledefault");
        });
    }

    function handleButtonClick(button) {
        var action = button.getAttribute('data-action');
        if (action === 'moverDiv') {
            moverDiv();
        } else if (action === 'moverDiv2') {
            moverDiv2();
        }
    }
            </script> 
            

</section>