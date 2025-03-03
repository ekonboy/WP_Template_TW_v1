<?php

/**
 * modalcontent Content section
 *
 * @package      gabii WordPress Starter
 * @author       SQUAD WEB.
 * @since        1.0.0
 */

// Obtener el índice de la sección
$count = get_query_var('prt_count');
$activatedcontent = get_sub_field('activatedcontent');
$content = get_sub_field('content');
$background_color = get_sub_field('background_color');
$ancho_total_texto = get_sub_field('ancho_total_texto');
$imagencontent = get_sub_field('imagencontent');
$content_onlymobile = get_sub_field('content_onlymobile');
?>

<div style="display:<?php echo ($activatedcontent == 0) ? 'none' : 'block'; ?>;">
<section class="modalcontent block <?php echo esc_attr($content_onlymobile == 1 ? 'md:hidden' : ''); ?> <?php echo esc_attr('section-' . $count); ?>" style="display: flex;flex-direction: row;flex-wrap: nowrap;align-content: space-between;justify-content: center;background-color: <?php echo esc_attr($background_color); ?>">
    <div class="container" style="padding: 15px;display: flex;flex-direction: column;align-content: space-around;flex-wrap: wrap;justify-content: center;">

        <?php if ($imagencontent): ?>
            <div style="flex: 1; padding: 20px; display: flex; justify-content: center; align-items: center;">

                <img src="<?php echo esc_url($imagencontent); ?>" alt="Imagen" style="max-width: 100%; height: auto;">

            </div>
        <?php endif; ?>


        <?php if ($content): ?>
            <?php echo $content = get_sub_field('content');
            ?>
        <?php endif; ?>






        <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
            <!-- <form action="form-handler.php" method="post"> -->
            <!-- <form action="<php echo esc_url(admin_url('admin-post.php')); ?>" method="post"> -->
            <form id="formularioContactModal" method="post">
                <!-- <input type="hidden" name="action" value="procesar_formulario"> -->

                <div id="ModalContactForm" class="modal group fixed inset-0 flex items-center py-5 px-3 transition-all duration-500 opacity-0 invisible [&.show]:visible [&.show]:opacity-100 z-[5000]">
                    <div class="modal-close absolute inset-0 bg-slate-700 bg-opacity-50"></div>
                    <div class="modal-body bg-[#0e0f11] rounded-md w-full md:w-1/4 mx-auto transition-transform delay-500 group-[.show]:delay-0 group-[.show]:duration-300 ease-out -translate-y-[30px] group-[.show]:translate-y-0">


                        <div class="p-5 sm:p-6">
                            <h5 class="text-xl leading-tighter font-heading font-bold mb-5 text-[#d0ff71] ">Contacta conmigo</h5>
                            <form action="#" class="flex flex-col gap-y-4">
                                <div class="flex flex-wrap items-center -m-2">
                                    <div class="w-full lg:w-5/12 p-2">
                                        <div class="relative mb-5 last:mb-0">
                                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="wsSiteName">Nombre</label>
                                            <span class="block italic text-xs text-slate-400">Specify your name.</span>
                                        </div>
                                    </div><!-- col -->
                                    <div class="w-full lg:w-7/12 p-2">
                                        <div class="relative mb-5 last:mb-0">
                                            <div class="form-wrap relative">
                                                <div class="absolute h-9 w-9 top-0 end-0 flex items-center justify-center">
                                                    <em class="text-slate-400 text-base leading-none ni ni-user-alt-fill"></em>
                                                </div>
                                                <input id="name" name="name" type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" autocomplete="off">
                                            </div>
                                        </div>
                                    </div><!-- col -->

                                </div><!-- grid -->


                                <div class="flex flex-wrap items-center -m-2">
                                    <div class="w-full lg:w-5/12 p-2">
                                        <div class="relative mb-5 last:mb-0">
                                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" for="wsSiteCopyright">Email</label>
                                            <span class="block italic text-xs text-slate-400">Copyright information of your website.</span>
                                        </div>
                                    </div><!-- col -->
                                    <div class="w-full lg:w-7/12 p-2">
                                        <div class="relative mb-5 last:mb-0">
                                            <div class="form-wrap relative">
                                                <div class="absolute h-9 w-9 top-0 end-0 flex items-center justify-center">
                                                    <em class="text-slate-400 text-base leading-none ni ni-mail"></em>
                                                </div>
                                                <input id="email" name="email" type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" autocomplete="off">
                                            </div>
                                        </div>
                                    </div><!-- col -->
                                </div><!-- grid -->
                                <!--2-->

                                <!--4-->
                                <div class="flex flex-wrap items-center -m-2">
                                    <div class="w-full lg:w-5/12 p-2">
                                        <div class="relative mb-5 last:mb-0">
                                            <label class="inline-block text-sm font-medium text-[slate-700] dark:text-white mb-2" for="wsSiteCopyright">Departmento</label>
                                            <span class="block italic text-xs text-slate-400">Copyright information of your website.</span>
                                        </div>
                                    </div><!-- col -->
                                    <div class="w-full lg:w-7/12 p-2">
                                        <div class="relative mb-5 last:mb-0">
                                            <div class="form-wrap relative">
                                                <div class="absolute h-9 w-9 top-0 end-0 flex items-center justify-center">
                                                    <em class="text-slate-400 text-base leading-none ni ni-view-col-fill"></em>
                                                </div>
                                                <input id="department" name="department" type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" autocomplete="off">
                                            </div>
                                        </div>
                                    </div><!-- col -->
                                </div><!-- grid -->
                                <!--5-->

                                <div class="text-right">
                                    <button type="submit" class="relative inline-flex items-center text-center align-middle text-base font-bold leading-4.5 rounded-full px-6 py-3 tracking-wide border border-[#d0ff71] text-[#d0ff71] hover:bg-primary-700 active:bg-primary-800 transition-all duration-300 mt-4">
                                        Enviar
                                    </button>
                                </div>



                            </form>
                        </div>


                    </div>
                </div>
            </form>
        </div><!-- card -->

<!-- El modal que será ocultado por defecto -->
<div id="popup" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 justify-center items-center z-50">
    <div class="bg-white p-8 rounded-lg w-1/3">
        <p id="popupMensaje" class="text-center text-lg"></p>
        <button id="cerrarPopup" class="mt-4 bg-red-500 text-white px-6 py-2 rounded-full w-full">Cerrar</button>
    </div>
</div>

<!-- formularioContactModal -->
        <script>
     
     document.getElementById("formularioContactModal").addEventListener("submit", function(event) {
    event.preventDefault(); // Evita la recarga de la página

    let formData = new FormData(this);

    // Usa admin-post.php para procesar el formulario
    fetch("<?php echo esc_url(admin_url('admin-post.php')); ?>", {
        method: "POST",
        body: formData
    })
    .then(response => response.json()) // Esperamos respuesta JSON
    .then(data => {
        let popup = document.getElementById("popup");
        let mensaje = document.getElementById("popupMensaje");

        if (data.success) {
            mensaje.textContent = "✅ ¡Formulario enviado con éxito!";
            popup.classList.remove("hidden");
        } else {
            mensaje.textContent = "❌ Error al enviar el formulario.";
            popup.classList.remove("hidden");
        }

        // Cerrar el popup cuando el usuario haga clic en el botón
        document.getElementById("cerrarPopup").addEventListener("click", function() {
            popup.classList.add("hidden");
        });
    })
    .catch(error => {
        console.error("Error:", error);
    });
});

</script>


    </div>
</section>
</div>