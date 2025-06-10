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


$accordion_headings = array(
    "René Descartes (1596–1650)",
    "René Laennec (1781–1826)",
    "René Magritte (1898–1967)",
    "René Girard (1923–2015)",
    "René Favaloro (1923–2000)",
    "René Goscinny ",
    "René Auberjonois",
    "René Rodríguez (Nacido en 1959)",
    "René Vives (1930–2022)",
    "René Arcos (Nacido en 1944) ",
    "René Briche (Nacido en 1941)",
    "René Duguay-Trouin (1673–1736)",
    "René Malaval (Nacido en 1929)",
    "René Thimais (Nacido en 1949)",
    "René Péchard (Nacido en 1965)",
    "René Prêtre (Nacido en 1949) ",
    "René Magritte (1898–1967)",
    "René Dufresne (Nacido en 1960)",
    "René Leduc (1905–1981)",
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
    "Descartes was a French philosopher and mathematician, known for: I think, therefore I am. He is considered the father of modern philosophy and made key contributions to analytic geometry. 👌 ❤️",
    "René Laennec was a French physician who invented the stethoscope. He revolutionized the diagnosis of chest diseases and is considered a pioneer in clinical medicine and auscultation.",
    "René Magritte was a Belgian surrealist artist known for thought-provoking images. His work challenges perceptions of reality, famously painting This is not a pipe in The Treachery of Images..",
    "René Girard was a French historian and philosopher known for his theory of mimetic desire, scapegoating, and the role of religion in human culture and violence.",
    "René Favaloro was an Argentine cardiac surgeon who pioneered coronary artery bypass surgery. He greatly advanced heart surgery and emphasized ethics and public healthcare in medicine.",
    "René Goscinny was a French writer and humorist, co-creator of Asterix and Lucky Luke. His storytelling deeply influenced European comics and children's literature.",
    "René Auberjonois was an American actor best known for roles in Star Trek: Deep Space Nine, Benson, and voice acting in animated films like The Little Mermaid.",
    "René Rodríguez is a Cuban-American journalist and film critic, known for his work with the Miami Herald, covering cinema and cultural topics with insight and depth. 👍",
    "René Vives was a Venezuelan actor, known for his performances in theater, television, and film. He was a respected figure in the Venezuelan cultural scene. 🤟",
    "René Arcos is a French contemporary artist and sculptor, recognized for his abstract and symbolic works, often inspired by nature and human emotion.",
    "René Briche is a French painter known for landscapes and still life compositions. His work is characterized by vivid colors and a strong sense of atmosphere.",
    "René Duguay-Trouin was a celebrated French naval officer and privateer. He earned fame for his naval victories against the British and Dutch during the War of Spanish Succession.",
    "René Malaval is a French writer and novelist known for his works depicting rural life in Provence, blending regional culture with humanist themes in accessible, evocative storytelling.",
    "René Thimais is a French painter recognized for his vibrant use of color and expressive style, often portraying abstract figures and emotional landscapes.",
    "René Péchard is a French humanitarian doctor known for his medical missions in developing countries, focusing on child health and access to care in underserved regions.",
    "René Prêtre is a renowned Swiss pediatric heart❤️ surgeon, known for his life-saving operations and humanitarian work. He was named Swiss of the Year in 2009.",
    "René Magritte was a Belgian surrealist artist, famous for exploring reality and illusion. His iconic works challenge perception, like The Treachery of Images",
    "René Dufresne is a Canadian political journalist known for his work in radio and print, covering provincial and federal politics with in-depth analysis and clarity.",
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