<?php

/**
 * Automatic content-info section
 *
 * @package      gabii WordPress Starter
 * @author       SQUAD WEB.
 * @since        1.0.0
 */

// Obtener el índice de la sección
$count = get_query_var('prt_count');
$activatedcontent = get_sub_field('activatedcontent');

$heading = get_sub_field('heading');
$description = get_sub_field('description');
$background_color = get_sub_field('background_color');
$ancho_total_texto = get_sub_field('ancho_total_texto');
$titulo_centrado = get_sub_field('titulo_centrado');
$activatedcontent = get_sub_field('activatedcontent');


$imagenes = [
    "https://randomuser.me/api/portraits/men/1.jpg",
    "https://randomuser.me/api/portraits/women/2.jpg",
    "https://randomuser.me/api/portraits/men/3.jpg",
    "https://randomuser.me/api/portraits/women/4.jpg",
    "https://randomuser.me/api/portraits/men/5.jpg",
    "https://randomuser.me/api/portraits/women/6.jpg",
    "https://randomuser.me/api/portraits/men/7.jpg",
    "https://randomuser.me/api/portraits/women/8.jpg",
    "https://randomuser.me/api/portraits/men/9.jpg",
    "https://randomuser.me/api/portraits/women/10.jpg",
    "https://randomuser.me/api/portraits/men/11.jpg",
    "https://randomuser.me/api/portraits/women/12.jpg",
    "https://randomuser.me/api/portraits/men/13.jpg",
    "https://randomuser.me/api/portraits/women/14.jpg",
    "https://randomuser.me/api/portraits/men/15.jpg",
    "https://randomuser.me/api/portraits/women/16.jpg",
    "https://randomuser.me/api/portraits/men/17.jpg",
    "https://randomuser.me/api/portraits/women/18.jpg",
    "https://randomuser.me/api/portraits/men/19.jpg",
    "https://randomuser.me/api/portraits/women/20.jpg"
];

$accordion_headings = array(
    "John Smith",
    "Emily Johnson",
    "Lucas García",
    "Sofia Martinez",
    "Liam Brown",
    "Olivia Davis",
    "Mateo Rodríguez",
    "Ava Wilson",
    "Ethan Lopez",
    "Mia Anderson",
    "Sebastián Pérez",
    "Isabella Thomas",
    "Noah Taylor",
    "Emma Moore",
    "Daniel Fernández",
    "Charlotte Jackson",
    "Carlos White",
    "Amelia Harris",
    "Diego Clark",
    "Grace Lewis"
);

$creator = array(
    "Creator of <span class='verde'>Livewire</span> and Alpine.js",
    "Creator of <span class='verde'>Laravel</span> and <span class='verde'>Eloquent ORM</span>",
    "Founder of <span class='verde'>Vue.js</span> and <span class='verde'>Nuxt.js</span>",
    "Creator of <span class='verde'>React</span> and <span class='verde'>Redux</span>",
    "Founder of <span class='verde'>Tailwind CSS</span> and <span class='verde'>Alpine.js</span>",
    "Creator of <span class='verde'>Django</span> and <span class='verde'>DRF</span>",
    "Founder of <span class='verde'>Node.js</span> and <span class='verde'>Express</span>",
    "Creator of <span class='verde'>Angular</span> and <span class='verde'>RxJS</span>",
    "Founder of <span class='verde'>MongoDB</span> and <span class='verde'>Mongoose</span>",
    "Creator of <span class='verde'>Ruby on Rails</span> and <span class='verde'>ActiveRecord</span>",
    "Founder of <span class='verde'>Symfony</span> and <span class='verde'>Doctrine</span>",
    "Creator of <span class='verde'>JQuery</span> and <span class='verde'>Bootstrap</span>",
    "Founder of <span class='verde'>WordPress</span> and <span class='verde'>WooCommerce</span>",
    "Creator of <span class='verde'>Bootstrap</span> and <span class='verde'>Font Awesome</span>",
    "Founder of <span class='verde'>Figma</span> and <span class='verde'>Framer Motion</span>",
    "Creator of <span class='verde'>GraphQL</span> and <span class='verde'>Apollo</span>",
    "Founder of <span class='verde'>Go</span> and <span class='verde'>Gin</span>",
    "Creator of <span class='verde'>Electron</span> and <span class='verde'>React Native</span>",
    "Founder of <span class='verde'>ASP.NET</span> and <span class='verde'>Blazor</span>",
    "Creator of <span class='verde'>Svelte</span> and <span class='verde'>Sapper</span>"
);

// Array con 20 contenidos ficticios
$accordion_contents = array(
    "Everything I build goes with gabii. Makes server management too easy 👌 ❤️",
    "gabii has saved us hundreds of hours of precious development time and I couldn’t imagine running our business without it. There is no other way to get set up quickly as with gabii. They have thought of everything!",
    "I've used gabii since its launch, and I've honestly never thought about switching anywhere else.",
    "Using gabii is an absolute no brainer. It has every thing a Laravel dev needs to host their applications!",
    "I would not want to manage servers and deployments any other way again.",
    "Been using gabii for almost 2 years. I just wonder why I didn't start earlier.",
    "I always recommend that people use gabii to host Laravel and other PHP frameworks, like Craft CMS or WordPress. ",
    "Changer in server management. It gave us the confidence to move from crappy shared hosting to reliable, quality servers. Using gabii feels like having a server specialist in our team. Proud to be a day-one customer! 👍",
    "The feature rich deployment tool you need for every day operations. Worth every penny 🤟",
    "I never thought managing servers could be this easy. gabii is a game changer!",
    "Nunca pensé que gestionar servidores podría ser tan fácil. ¡gabii es un cambio total!",
    "Before gabii, we spent hours configuring servers. Now, it takes minutes and we can concentrate on building awesome features.",
    "Antes de gabii, pasábamos horas configurando servidores. Ahora, solo toma minutos y podemos concentrarnos en construir increíbles características.",
    "With gabii, I no longer worry about the complexity of server management. It just works seamlessly.",
    "Cwith gabii, ya no me preocupo por la complejidad de la gestión de servidores. Simplemente funciona sin problemas.",
    "If you’re serious about Laravel, gabii is a must-have. It simplifies every aspect of server management and deployment.",
    "Si eres serio con Laravel, gabii es imprescindible. Simplifica todos los aspectos de la gestión de servidores y despliegue.",
    "I’ve been using gabii for months and it’s still one of the best investments I’ve made for my development workflow.",
    "He estado usando gabii durante meses y sigue siendo una de las mejores inversiones que he hecho para mi flujo de trabajo de desarrollo.",
    "Deploying with ❤️gabii❤️ is so easy, I now spend more time coding than managing servers!",
    "¡Desplegar cwith gabii es tan fácil que ahora paso más tiempo programando que gestionando servidores!",
    "Managing servers with gabii is a breeze. I can now deploy new features in just a few clicks.",
    "Gestionar servidores cwith gabii es pan comido. Ahora puedo desplegar nuevas características con solo unos pocos clics.",
    "gabii helped us automate our server deployment process, making it fast, reliable, and cost-effective.",
    "gabii nos ayudó a automatizar nuestro proceso de despliegue de servidores, haciéndolo rápido, confiable y rentable."
);

?>
<div style="display:<?php echo ($activatedcontent == 0) ? 'none' : 'block'; ?>;">
<section class="auto-content-info <?php echo esc_attr('section-' . $count); ?>" style="background-color: <?php echo esc_attr($background_color); ?>;">
    <div class="flex flex-col items-center justify-center text-center py-8 px-4">

        <h1 class="<?php echo $titulo_centrado ? 'after:left-1/2 after:translate-x-[-50%]' : 'after:left-0'; ?> font-semibold relative after:content[''] after:h-1 after:rounded-full after:bg-brand after:absolute after:w-12 text-2xl lg:text-3xl mb-8 after:-bottom-3 text-slate-600 dark:after:bg-[#d0ff71] dark:text-white"><?php echo $heading; ?></h1>
        <p class="mt-4 text-lg text-gray-600"><?php echo $description; ?></p>
    </div>

    <div class="flex justify-center items-center p-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 grid-rows-3 gap-4 w-[1280px]">

            <?php
            for ($i = 0; $i < 18; $i++) :
                $accordion_content = $accordion_contents[$i];
                $accordion_heading = $accordion_headings[$i];
                $randomImageIndex = array_rand($imagenes);
                $extraClassDegradado = ($i >= 15) ? 'extraclassdegradado' : '';
            ?>

                <div class="grid grid-cols-1 gap-5">
                    <div class="flex flex-col rounded-xl bg-[#a5a8ad] px-6 py-7 <?php echo $extraClassDegradado; ?>">
                        <div class="-mt-0.5 flex px-0.5 xl:-mt-2">
                            <div class="mr-4">
                                <img class="h-10 w-10 rounded-full border-2 border-white lg:h-11 lg:w-11 xl:h-12 xl:w-12" srcset="<?php echo $imagenes[$randomImageIndex]; ?>" src="<?php echo $imagenes[$randomImageIndex]; ?>" loading="lazy" alt="we're the best" width="48" height="48">
                            </div>
                            <div class="flex flex-col justify-center text-sm">
                                <span class="text-gray-900 font-semibold"><?php echo $accordion_heading; ?></span>
                                <span class="text-[#d0ff71]"><?php echo $creator[array_rand($creator)]; ?>
                                </span>
                            </div>
                        </div>
                        <div class="mt-4 text-gray-900 text-xs">
                            <?php echo $accordion_content; ?>
                        </div>
                    </div>
                </div>
            <?php
            endfor;
            ?>
        </div>
    </div>
</section>
</div><!--activated-->