fetch(jsonData.json_url)
  .then(response => response.json())
  .then(data => {
    console.log(data);
    displayNews(data);
  })
  .catch(error => {
    console.error("Error al cargar el archivo JSON:", error);
  });
 
function displayNews(data) {
  const newsContainer = document.getElementById("news-container");

  // Limpiar el contenedor antes de agregar las noticias
  newsContainer.innerHTML = "";

  data.articles.forEach(news => {
    const newsHtml = `
      <div class="divnews1">
        <div class="contentnews">
          <div class="title">${news.title}</div>
          <div class="text">${news.description}</div>
        </div>
        <img src="${news.urlToImage}" alt="Imagen de la noticia">
      </div>
    `;
    newsContainer.innerHTML += newsHtml;
  });
}
