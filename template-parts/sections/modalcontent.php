<?php

/**
 * modalcontent Content section
 *
 * @package      gabii WordPress Starter
 * @author       SQUAD WEB.
 * @since        1.0.0
 */

$count = get_query_var('prt_count');
$activatedcontent = get_sub_field('activatedcontent');
$content = get_sub_field('content');
$ancho_total_texto = get_sub_field('ancho_total_texto');
$imagencontent = get_sub_field('imagencontent');
$content_onlymobile = get_sub_field('content_onlymobile');

if (isset($_SESSION['mensaje_correo'])) {
    echo '<div class="mensaje-correo">' . $_SESSION['mensaje_correo'] . '</div>';
    unset($_SESSION['mensaje_correo']); 
}

$background_color_key = get_sub_field('background_color');
$color_key = get_sub_field('background_color'); // ejemplo: 'brandPrimaryLightest'
$theme_colors = get_theme_colors();
$background_color = isset($theme_colors[$color_key]) ? $theme_colors[$color_key] : '#fff';
?>
<style>
.mensaje-correo {
    padding: 15px 50px;
    border: 1px solid #ccc;
    background-color: #d0ff71;
    color: #0e0f11;
    font-size: 16px;
    text-align: center;
    position: fixed;
    z-index: 999;
    border-radius: 50px;
    top: -100px;
    left: 50%;
    transform: translateX(-50%);
    animation: bajar 3s ease-out forwards, desaparecer 1s ease-out 4s forwards;
}

@keyframes bajar {
    from {
        top: -100px;
        opacity: 0;
    }
    to {
        top: 50%;
        opacity: 1;
        transform: translate(-50%, -50%);
    }
}

@keyframes desaparecer {
    to {
        opacity: 0;
        visibility: hidden;
    }
}
</style>
<div style="display:<?php echo ($activatedcontent == 0) ? 'none' : 'block'; ?>;">
    <section class="modalcontent block <?php echo esc_attr($content_onlymobile == 1 ? 'md:hidden' : ''); ?> <?php echo esc_attr('section-' . $count); ?>" style="display: flex;flex-direction: row;flex-wrap: nowrap;align-content: space-between;justify-content: center;background-color: <?php echo esc_attr($background_color); ?>">
        <div class="container" style="padding: 15px;display: flex;flex-direction: column;align-content: space-around;flex-wrap: wrap;justify-content: center;">

            <?php if ($imagencontent): ?>
                <div style="flex: 1; padding: 20px; display: flex; justify-content: center; align-items: center;">
                    <img src="<?php echo esc_url($imagencontent); ?>" alt="Imagen" style="max-width: 100%; height: auto;">
                </div>
            <?php endif; ?>

            <?php if ($content): ?>
                <?php echo $content; ?>
            <?php endif; ?>


            <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full">
                
                <form id="contactFormPlugin" action="" method="POST">
                    <div id="ModalContactForm" class="modal group fixed inset-0 flex items-center py-5 px-3 transition-all duration-500 opacity-0 invisible [&.show]:visible [&.show]:opacity-100 z-[5000]">
                        <div class="modal-close absolute inset-0 bg-slate-700 bg-opacity-50"></div>
                        <div class="modal-body bg-brandPrimaryDark rounded-md w-full md:w-1/4 mx-auto transition-transform delay-500 group-[.show]:delay-0 group-[.show]:duration-300 ease-out -translate-y-[30px] group-[.show]:translate-y-0">

                            <div class="p-5 sm:p-6">
                                <h5 class="text-xl leading-tighter font-heading font-bold mb-5 text-[#d0ff71]">Contacta conmigo</h5>

                                <div class="flex flex-wrap items-center -m-2">
                                    <div class="w-full lg:w-5/12 p-2">
                                        <div class="relative mb-5 last:mb-0">
                                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-[brandPrimaryLight] mb-2" for="nombre">Nombre*</label>
                                            <span class="block italic text-xs text-slate-400">Indica aquí tu nombre.</span>
                                        </div>
                                    </div><!-- col -->
                                    <div class="w-full lg:w-7/12 p-2">
                                        <div class="relative mb-5 last:mb-0">
                                            <div class="form-wrap relative">
                                                <div class="absolute h-9 w-9 top-0 end-0 flex items-center justify-center">
                                                    <em class="text-slate-400 text-base leading-none ni ni-user-alt-fill"></em>
                                                </div>
                                                <input id="nombre" name="nombre" type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-wrap items-center -m-2">
                                    <div class="w-full lg:w-5/12 p-2">
                                        <div class="relative mb-5 last:mb-0">
                                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-[brandPrimaryLight] mb-2" for="email">Email*</label>
                                            <span class="block italic text-xs text-slate-400">Déjame tu mail y te responderé en menos de 12 horas.</span>
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-7/12 p-2">
                                        <div class="relative mb-5 last:mb-0">
                                            <div class="form-wrap relative">
                                                <div class="absolute h-9 w-9 top-0 end-0 flex items-center justify-center">
                                                    <em class="text-slate-400 text-base leading-none ni ni-mail"></em>
                                                </div>
                                                <input id="email" name="email" type="mail" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--4-->
                                <div class="flex flex-wrap items-center -m-2">
                                    <div class="w-full lg:w-5/12 p-2">
                                        <div class="relative mb-5 last:mb-0">
                                            <label class="inline-block text-sm font-medium text-slate-700 dark:text-[brandPrimaryLight] mb-2" for="department">Departamento</label>
                                            <span class="block italic text-xs text-slate-400">Aquí escribe tu cargo en la empresa.</span>
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-7/12 p-2">
                                        <div class="relative mb-5 last:mb-0">
                                            <div class="form-wrap relative">
                                                <div class="absolute h-9 w-9 top-0 end-0 flex items-center justify-center">
                                                    <em class="text-slate-400 text-base leading-none ni ni-view-col-fill"></em>
                                                </div>
                                                <input id="department" name="department" type="text" class="block w-full box-border text-sm leading-4.5 px-4 py-1.5 h-9 text-slate-700 dark:text-white placeholder-slate-300 bg-white dark:bg-gray-950 border border-gray-200 dark:border-gray-800 outline-none focus:border-primary-500 focus:dark:border-primary-600 focus:outline-offset-0 focus:outline-primary-200 focus:dark:outline-primary-950  disabled:bg-slate-50 disabled:dark:bg-slate-950 disabled:cursor-not-allowed rounded transition-all" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--5-->
                                <div class="text-right">
                                    <button type="submit" class="relative inline-flex items-center text-center align-middle text-base font-bold leading-4.5 rounded-full px-6 py-3 tracking-wide border border-[#d0ff71] text-[#d0ff71] hover:bg-primary-700 active:bg-primary-800 transition-all duration-300 mt-4">
                                        Enviar
                                    </button>
                                </div> 
                            </div>
                        </div>
                    </div>
                </form>
            </div>
<script>
var form = document.getElementById('contactFormPlugin');

    form.addEventListener('submit', function(event) {
        var nombre = document.getElementById('nombre').value.trim();
        var email = document.getElementById('email').value.trim();
        if (nombre === '' || email === '') {
            alert('Por favor, rellena todos los campos mandatory.');
            event.preventDefault(); 
            
        }
        return false;
    });
</script>
        </div>
    </section>
</div>