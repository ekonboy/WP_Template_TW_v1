<?php

/**
 * menuancla Content section
 *
 * @package      gabii WordPress Starter
 * @author       SQUAD WEB.
 * @since        1.0.0
 */

$count = get_query_var('prt_count');
$activatedcontent = get_sub_field('activatedcontent');
$background_color = get_sub_field('background_color');
$content_onlymobile = get_sub_field('content_onlymobile');
$ancla = get_sub_field('ancla');
$imagencontent = get_sub_field('imagencontent');
?>
<div style="display:<?php echo ($activatedcontent == 0) ? 'none' : 'block'; ?>;">
    <section class="menuancla block <?php echo esc_attr($content_onlymobile == 1 ? 'md:hidden' : ''); ?> <?php echo esc_attr('section-' . $count); ?>" style="height: 450px;background-color: <?php echo esc_attr($background_color); ?>">
        <span id="<?php echo $ancla; ?>"><span>
                <div class="flex flex-row md:flex-col flex-wrap content-around mx-4">

                    <div class="switcher-container bg-gabii-dark-900/55" style="margin: 0 auto;">
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
                            
                        endif;
                        ?>
                    </div>

                    <div id="option1-content" class="switcher-content show">
                        <div class="speech-bubbledefault">
                            <b>Formación Reglada</b><br />
                            <em class="ni ni-check-fill-c"></em> DAI, Desarrollo de Aplicaciones Informáticas. (Grado superior, 2 años. Finalizado en 2008).<br />
                            <em class="ni ni-check-fill-c"></em> Técnico en Edificación y Obra Civil. (Grado superior, 2 años. Finalizado en 2001).
                        </div>
                        <div class="speech-bubble">
                            <b>Formación Reglada</b><br />
                            <em class="ni ni-check-fill-c"></em> DAI, Desarrollo de Aplicaciones Informáticas. (Grado superior, 2 años. Finalizado en 2008).<br />
                            <em class="ni ni-check-fill-c"></em> Técnico en Edificación y Obra Civil. (Grado superior, 2 años. Finalizado en 2001).
                        </div>
                    </div>

                    <div id="option2-content" class="switcher-content">
                        <div class="speech-bubbledefault">
                            <b>Formación Complementaria</b><br />
                            <em class="ni ni-check-fill-c"></em> Formación de GIT y GITHUB para programadores, 2025.<br />
                            <em class="ni ni-check-fill-c"></em> Formación de DOCKER, marzo 2025.<br />
                            <em class="ni ni-check-fill-c"></em> Curso de VUE.JS, diciembre 2023.<br />
                            <em class="ni ni-check-fill-c"></em> Formación de API REST, 2022.<br />
                            <em class="ni ni-check-fill-c"></em> Curso analítica y plan de marketing digital, CEAM, noviembre 2021.<br />
                            <b>Catalán y castellano: nativo. Inglés: nivel B2. 😊</b><br />
                        </div>
                        <div class="speech-bubble">
                            <b>Formación Complementaria</b><br />
                            <em class="ni ni-check-fill-c"></em> Formación de GIT y GITHUB para programadores, 2025.<br />
                            <em class="ni ni-check-fill-c"></em> Formación de DOCKER, marzo 2025.<br />
                            <em class="ni ni-check-fill-c"></em> Curso de VUE.JS, diciembre 2023.<br />
                            <em class="ni ni-check-fill-c"></em> Formación de API REST, 2022.<br />
                            <em class="ni ni-check-fill-c"></em> Curso analítica y plan de marketing digital, CEAM, noviembre 2021.<br />
                        </div>
                    </div>

                    <div id="option3-content" class="switcher-content">
                        <div class="speech-bubbledefault">
                            <b><em class="ni ni-check-fill-c"></em> Desarrollo sitios web optimizados para un fácil mantenimiento, aprovechando Advanced Custom Fields (ACF) para una gestión intuitiva de contenidos en WordPress.<br /><br />
                                <em class="ni ni-check-fill-c"></em>Creo soluciones personalizadas que permiten a los usuarios administrar su web sin complicaciones, asegurando flexibilidad y escalabilidad. </b>
                        </div>
                        <div class="speech-bubble">
                            <b><em class="ni ni-check-fill-c"></em> Desarrollo sitios web optimizados para un fácil mantenimiento, aprovechando Advanced Custom Fields (ACF) para una gestión intuitiva de contenidos en WordPress.<br /><br />
                                <em class="ni ni-check-fill-c"></em> Creo soluciones personalizadas que permiten a los usuarios administrar su web sin complicaciones, asegurando flexibilidad y escalabilidad. </b>
                        </div>
                    </div>
                </div>

                <script defer>
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
                        console.log('Button clicked', button);
                        var action = button.getAttribute('data-action');
                        console.log('Action:', action);
                        if (action === 'moverDiv') {
                            moverDiv();
                        } else if (action === 'moverDiv2') {
                            moverDiv2();
                        }
                    }
                </script>
    </section>
</div>