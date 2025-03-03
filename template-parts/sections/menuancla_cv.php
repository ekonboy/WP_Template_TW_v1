<?php
// Obtener el índice de la sección
$count = get_query_var('prt_count');
$activatedcontent = get_sub_field('activatedcontent');
$background_color = get_sub_field('background_color');
$content_onlymobile = get_sub_field('content_onlymobile');
?>

<style>
.switcher-containercv {
    position: relative;
    transition: top 0.3s ease, left 0.3s ease;
}

/* Cuando se fija en la pantalla */
.fixed-switcher {
    position: fixed;
    left: 50%;
    transform: translateX(-50%);
}

/* Cuando el usuario hace scroll hacia abajo */
.fixed-switcher.scrolling-down {
    top: 50px;
}

/* Cuando el usuario hace scroll hacia arriba */
.fixed-switcher.scrolling-up {
    top: 140px;
}

</style>

<div style="display:<?php echo ($activatedcontent == 0) ? 'none' : 'block'; ?>;">
    <section class="menuanclacv block <?php echo esc_attr($content_onlymobile == 1 ? 'md:hidden' : ''); ?> <?php echo esc_attr('section-' . $count); ?>" style="height: 50px;background-color: <?php echo esc_attr($background_color); ?>">
     
        <div class="flex flex-row md:flex-col flex-wrap content-around mx-4">
            <div class="switcher-containercv bg-astro-dark-900/55" style="margin: 0 auto;">
                <div id="active-backgroundcv" class="active-backgroundcv" style="width: 133px; left: 0px;"></div>

                <button data-opcion="curriculum" class="switcher-optioncv active">
                    Curriculum <em class="ni ni-notice"></em>
                </button>

                <button data-opcion="portfolio" class="switcher-optioncv">
                    Portfolio <em class="ni ni-trash-alt"></em>
                </button>

                <button data-opcion="portal" class="switcher-optioncv">
                  <a href="https://portal.vistarapida.es" target="_blank"> Portal <em class="ni ni-laravel"></em></a>
                </button>

            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function() {

 
                function eliminarExperiencia() {
                    const experiencias = document.getElementsByClassName("experiencia_desastrosa");
                    for (let i = 0; i < experiencias.length; i++) {
                        experiencias[i].style.display = "none"; 
                    }
                };

                function cargarExperiencia() {
                    const experiencias = document.getElementsByClassName("experiencia_desastrosa");
                    for (let i = 0; i < experiencias.length; i++) {
                        experiencias[i].style.display = "inline"; 
                    }
                };

                function recargarExperiencia() {
                    const contenidoCurriculum = document.querySelectorAll(".curriculum-content");

                    contenidoCurriculum.forEach(function(caja) {
                        caja.style.display = "block";
                    });

                    cargarExperiencia();
                }

                // Seleccionamos los botones y los contenidos
                const botonesToggleCV = document.querySelectorAll(".switcher-optioncv");
                const cajasContenidoCV = document.querySelectorAll(".simpletext-contentcv");
                const activeBackgroundcv = document.getElementById("active-backgroundcv");

                // Asegurarse de que todos los contenidos estén ocultos al inicio, excepto el primero
                cajasContenidoCV.forEach((caja, index) => {
                    if (index !== 0) {
                        caja.classList.add("oculto");
                    }
                });

                // Función para alternar la visibilidad del contenido correspondiente
                function toggleContentCV(index) {
                    cajasContenidoCV.forEach((contentcv, i) => {
                        if (i === index) {
                            contentcv.classList.remove("oculto");
                        } else {
                            contentcv.classList.add("oculto");
                        }
                    });

                    // Movimiento de fondo
                    const buttonWidthcv = botonesToggleCV[0].offsetWidth;
                    activeBackgroundcv.style.width = `${buttonWidthcv}px`;
                    activeBackgroundcv.style.left = `${buttonWidthcv * index}px`;

                    botonesToggleCV.forEach((btn, i) => {
                        btn.classList.remove("active");
                        if (i === index) {
                            btn.classList.add("active");
                        }
                    });
                }

                botonesToggleCV.forEach((boton, index) => {
                    boton.addEventListener("click", function() {
                        toggleContentCV(index); 
                        if (boton.dataset.opcion === "curriculum") {
                            recargarExperiencia(); 
                        } else if (boton.dataset.opcion === "portfolio") {
                            eliminarExperiencia();
                        }
                    });
                });
            });
        </script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const switcherContainer = document.querySelector(".switcher-containercv");
    const offsetTop = switcherContainer.offsetTop;
    let lastScrollTop = 0; 
    let scrollUpCount = 0; 

    window.addEventListener("scroll", function () {
        const currentScroll = window.scrollY;

        if (currentScroll >= offsetTop) {
            switcherContainer.classList.add("fixed-switcher");

            if (currentScroll > lastScrollTop) {
                switcherContainer.classList.remove("scrolling-up");
                switcherContainer.classList.add("scrolling-down");
                scrollUpCount = 0;
            } else {
                scrollUpCount++;
                if (scrollUpCount >= 0) {
                    switcherContainer.classList.add("scrolling-up");
                    switcherContainer.classList.remove("scrolling-down");
                }
            }
        } else {
            switcherContainer.classList.remove("fixed-switcher", "scrolling-up", "scrolling-down");
        }

        lastScrollTop = currentScroll;
    });
});
</script>

    </section>
</div>