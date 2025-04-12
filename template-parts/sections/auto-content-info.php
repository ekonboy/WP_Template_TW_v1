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
    "/wp-content/themes/tailpress-master/resources/img/personajes/1.jpg",
    "/wp-content/themes/tailpress-master/resources/img/personajes/2.jpg",
    "/wp-content/themes/tailpress-master/resources/img/personajes/3.jpg",
    "/wp-content/themes/tailpress-master/resources/img/personajes/4.jpg",
    "/wp-content/themes/tailpress-master/resources/img/personajes/5.jpg",
    "/wp-content/themes/tailpress-master/resources/img/personajes/6.jpg",
    "/wp-content/themes/tailpress-master/resources/img/personajes/7.jpg",
    "/wp-content/themes/tailpress-master/resources/img/personajes/8.jpg",
    "/wp-content/themes/tailpress-master/resources/img/personajes/9.jpg",
    "/wp-content/themes/tailpress-master/resources/img/personajes/10.jpg",
    "/wp-content/themes/tailpress-master/resources/img/personajes/11.jpg",
    "/wp-content/themes/tailpress-master/resources/img/personajes/12.jpg",
    "/wp-content/themes/tailpress-master/resources/img/personajes/13.jpg",
    "/wp-content/themes/tailpress-master/resources/img/personajes/14.jpg",
    "/wp-content/themes/tailpress-master/resources/img/personajes/15.jpg",
    "/wp-content/themes/tailpress-master/resources/img/personajes/16.jpg",
    "/wp-content/themes/tailpress-master/resources/img/personajes/17.jpg",
    "/wp-content/themes/tailpress-master/resources/img/personajes/18.jpg",
    "/wp-content/themes/tailpress-master/resources/img/personajes/19.jpg",
    "/wp-content/themes/tailpress-master/resources/img/personajes/20.jpg"
];

// $accordion_headings = array(
//     "Ludwig van Beethoven",
//     "Charlie Chaplin",
//     "Albert Einstein",
//     "Pablo Picasso",
//     "Miguel de Cervantes Saavedra",
//     "Sócrates",
//     "Yuri Gagarin",
//     "Bruce Lee",
//     "Robin Williams",
//     "Nikola Tesla",
//     "Karl Marx",
//     "Coco Chanel",
//     "Alexander Fleming",
//     "René Descartes",
//     "John Maynard Keynes",
//     "Marie Curie ",
//     "Martin Luther King Jr.",
//     "René Laennec",
//     "Elvis Presley",
//     "Michael Jackson"
// );


$accordion_headings = array(
    "René Descartes (1596–1650)",
    "René Laennec (1781–1826)",
    "René Magritte (1898–1967)",
    "René Girard (1923–2015)",
    "René Favaloro (1923–2000)",
    "René Goscinny ",
    "René Auberjonois",
    "René Rodríguez (Nacido en 1959)",
    "René Vives(1930–2022)",
    "René Arcos Nacido en 1944) ",
    "René Briche (Nacido en 1941)",
    "René Duguay-Trouin (1673–1736)",
    "René Malaval (Nacido en 1929)",
    "René Thimais (Nacido en 1949)",
    "René Péchard (Nacido en 1965)",
    "René Prêtre (Nacido en 1949) ",
    "René Magritte(1898–1967)",
    "René Dufresne(Nacido en 1960)",
    "René Leduc(1905–1981)",
    "René Boivin (1890–1965)"
);

$creator = array(
    "<span class='verde'>Filósofo y matemático</span> francés",
    "<span class='verde'>Inventor</span> del estetoscopio",
    "<span class='verde'>Pintor surrealista</span>",
    "<span class='verde'>Filósofo y antropólogo</span> francés",
    "<span class='verde'>Padre</span> de la cirugía de bypass",
    "<span class='verde'>Creador</span> de Astérix",
    "<span class='verde'>Actor</span> conocido por Star Trek",
    "<span class='verde'>Director de cine</span> productor",
    "<span class='verde'>Matemático y filósofo</span> español",
    "<span class='verde'>Científico e investigador</span> matemático",
    "<span class='verde'>Artista y pintor</span> impresionista",
    "<span class='verde'>Oficial naval</span> francés",
    "<span class='verde'>Escritor y poeta</span> francés",
    "<span class='verde'>Sociólogo y filósofo</span> francés",
    "<span class='verde'>Profesor y sociólogo</span> francés",
    "<span class='verde'>Director</span> de orquesta",
    "<span class='verde'>Pintor</span> surrealista",
    "<span class='verde'>Actor y director</span> de cine",
    "<span class='verde'>Ingeniero</span> aeronáutico",
    "<span class='verde'>Joyería</span> de alto standing"
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

        <h2 class="<?php echo $titulo_centrado ? 'after:left-1/2 after:translate-x-[-50%]' : 'after:left-0'; ?> font-semibold relative after:content[''] after:h-1 after:rounded-full after:bg-brand after:absolute after:w-12 text-2xl lg:text-3xl mb-8 after:-bottom-3 text-slate-600 dark:after:bg-[#d0ff71] dark:text-white"><?php echo $heading; ?></h2>
        <p class="mt-4 text-lg text-gray-600"><?php echo $description; ?></p>
    </div>

    <div class="flex justify-center items-center p-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 grid-rows-3 gap-4 w-[1280px]">

            <?php
            shuffle($imagenes);
            for ($i = 0; $i < 18; $i++) :
                $accordion_content = $accordion_contents[$i];
                $accordion_heading = $accordion_headings[$i];
                // $randomImageIndex = array_rand($imagenes);
                $extraClassDegradado = ($i >= 15) ? 'extraclassdegradado' : '';
            ?>

                <div class="grid grid-cols-1 gap-5">
                    <div class="flex flex-col rounded-xl bg-[#a5a8ad] px-6 py-7 <?php echo $extraClassDegradado; ?>">
                        <div class="-mt-0.5 flex px-0.5 xl:-mt-2">
                            <div class="mr-4">
                                <img class="h-10 w-10 rounded-full border-2 border-white lg:h-11 lg:w-11 xl:h-12 xl:w-12" srcset="<?php echo $imagenes[$i]; ?>" src="<?php echo $imagenes[$i]; ?>" loading="lazy" alt="we're the best" width="48" height="48">
                            </div>
                            <div class="flex flex-col justify-center text-sm">
                                <span class="text-gray-900 font-semibold"><?php echo $accordion_heading; ?><br>
                                <span class="text-[#d0ff71]" style="font-weight: 100;"><?php echo $creator[$i]; ?>
                                
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