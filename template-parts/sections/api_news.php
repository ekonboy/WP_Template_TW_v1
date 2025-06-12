<?php

/**
 * developer Content section
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

$background_color_key = get_sub_field('background_color');
$color_key = get_sub_field('background_color'); // ejemplo: 'brandPrimaryLightest'
$theme_colors = get_theme_colors();
$background_color = isset($theme_colors[$color_key]) ? $theme_colors[$color_key] : '#fff';
?>

<style>

#news-containerapi {
   display: grid;
   grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); 
   gap: 20px; 
   padding: 20px;
   width: 100%;
   grid-auto-rows: minmax(200px, auto);
}

.divnews1 {
  background-color: #2a3549;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease;
  display: grid;
  grid-template-rows: auto auto 1fr auto auto; 
  justify-items: space-between;
  height: 100%; 
  box-sizing: border-box;
  min-width: 0; 
  width: 100%;
}

.divnews1:hover {
  transform: translateY(-10px);
}

.title {
  font-size: 1rem;
  font-weight: bold;
  color: #d0ff71;
  margin-bottom: 5px;
  text-align: center;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.date {
  font-size: 0.9rem;
  color: #A9B3C1;
  margin-bottom: 5px;
  text-align: center;
}

.text-container {
  flex-grow: 1;
  display: flex;
  flex-direction: column;
  justify-content: flex-start; 
}

.text {
  font-size: 0.8rem;
  color: #A9B3C1;
  line-height: 1.4;
  text-align: justify;
  overflow: hidden;
  text-overflow: ellipsis;
  display: -webkit-box;
  -webkit-line-clamp: 4;
  -webkit-box-orient: vertical;
}

.bottom-section {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 10px; 
}

.blog-image {
  width: 100%;
  height: auto;
  border-radius: 10px;
  object-fit: cover;
}

.date {
  font-size: 0.9rem;
  color: #d0ff71;
  margin-bottom: 10px;
  text-align: left;
}
.btnloadmorenews {display: flex;justify-content: center;}

@media (max-width: 500px) {

#news-containerapi {
    display: grid;
    grid-template-columns: repeat(1, 1fr);
 }
}
@media (min-width: 1200px) {
    #news-containerapi {
        grid-template-columns: repeat(5, 1fr); /* Hasta un máximo de 5 columnas en pantallas grandes */
    }
}
</style>


<section class="developer block <?php echo esc_attr($content_onlymobile == 1 ? 'md:hidden' : ''); ?> <?php echo esc_attr('section-' . $count); ?>" style="display: flex;flex-direction: row;flex-wrap: nowrap;align-content: space-between;justify-content: center;background-color: <?php echo esc_attr($background_color); ?>">
    <div id="#newsapi"></div>
  <div class="container">
    <?php if ($imagencontent): ?>
      <div style="flex: 1; padding: 20px; display: flex; justify-content: center; align-items: center;">
        <img src="<?php echo esc_url($imagencontent); ?>" alt="Imagen" style="max-width: 100%; height: auto;">
      </div>
    <?php endif; ?>

    <?php if ($content): ?>
      <?php echo $content = get_sub_field('content');
      ?>
    <?php endif; ?>

    <div class="containerbasenews">
      <div class="contentnews">
        <div id="news-containerapi">
          <!-- Las noticias se cargarán aquí -->
        </div>
      </div>
    </div>

    <div class="btnloadmorenews">
        <button id="load-more" class="btnbase_textoimagenen btn_amarillotexto-imagen mt-4 mb-4" onclick="displayNews()">Más noticias</button>
    </div>

  </div>


  <script>
let page = 1; // Página actual
const perPage = 10; // Cantidad de noticias por carga
let noticias = []; // Almacena todas las noticias
let noticiasMostradas = 0; 

function formatDate(dateString) {
  const date = new Date(dateString); 

  if (isNaN(date)) {
    return ''; 
  }

  const day = String(date.getDate()).padStart(2, '0'); 
  const month = String(date.getMonth() + 1).padStart(2, '0'); 
  const year = date.getFullYear();

  return `${day}-${month}-${year}`; 
}

function displayNews() {
  const newsContainer = document.getElementById("news-containerapi");
  const loadMoreBtn = document.getElementById("load-more");

  for (let i = noticiasMostradas; i < noticiasMostradas + perPage && i < noticias.length; i++) {
    const news = noticias[i];
    const formattedDate = formatDate(news.publishedAt);

    const newsHtml = `
      <div class="divnews1"> 
        <div class="title">${news.title}</div>
        <div class="date">${formattedDate}</div>
        <div class="text-container">
          <div class="text">${news.description}</div>
        </div>
        <div class="bottom-section">
          <img src="${news.urlToImage}" alt="No hay imagen de noticia!" class="blog-image">
          <div class="btnbase_textoimagenen btn_amarillotexto-imagen">
            <a href="${news.url}" target="_blank">Leer más</a>
          </div>
        </div>
      </div>
    `;
    newsContainer.innerHTML += newsHtml;
  }

  noticiasMostradas += perPage;

  if (noticiasMostradas >= noticias.length) {
    loadMoreBtn.style.display = "none"; 
  }
}

// Cargar noticias desde la API y mostrar las primeras
fetch('https://weee.vistarapida.es/everything-wordpress.json')
  .then(response => response.json())
  .then(data => {
    noticias = data.articles;
    displayNews(); // Mostrar las primeras noticias
  })
  .catch(error => console.log('Error fetching the news: ', error));

// Evento para el botón "Cargar más"
document.getElementById("load-more").addEventListener("click", displayNews);
</script>





</section>
    </div>

