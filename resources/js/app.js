//gabii v1.0
function toggle() {
    const button = document.getElementById('toggle-button');
    button.classList.toggle('translate-x-6'); 
}

  window.addEventListener("scroll", function () {
      const menu = document.querySelector(".headermenu");
      if (window.scrollY > 50) {
          menu.classList.add("scrolled");
      } else {
          menu.classList.remove("scrolled");
      }
  });


    // function copyToClipboard() {
    //     const text = document.getElementById("merchant-id-1").textContent;
    //     navigator.clipboard.writeText(text).then(() => {
    //         const message = document.getElementById("copied-message");
    //         message.style.display = "block";
  
    //         setTimeout(() => {
    //             message.style.display = "none";
    //         }, 2000);
    //     }).catch(err => console.error("Error al copiar:", err));
    // }

    // Obtener los botones y los contenidos
    const option1Btn = document.getElementById('option1-btn');
    const option2Btn = document.getElementById('option2-btn');
    const option3Btn = document.getElementById('option3-btn');

    const option1Content = document.getElementById('option1-content');
    const option2Content = document.getElementById('option2-content');
    const option3Content = document.getElementById('option3-content');

    const activeBackground = document.getElementById('active-background');

    // Función para mostrar el contenido correspondiente y activar el botón
    function showContent(option) {
      // Ocultar todos los contenidos
      option1Content.classList.remove('show');
      option2Content.classList.remove('show');
      option3Content.classList.remove('show');

      // Quitar la clase 'active' de todos los botones
      option1Btn.classList.remove('active');
      option2Btn.classList.remove('active');
      option3Btn.classList.remove('active');

      // Mover el fondo azul
    //   activeBackground.style.left = `${(option - 1) * 33.33}%`;

      if (option === 1) {
        activeBackground.style.left = "-0.8%"; // Ajusta el valor de left aquí
      } else if (option === 2) {
        activeBackground.style.left = "33.33%"; // Para la opción 2
      } else if (option === 3) {
        activeBackground.style.left = "66.4%"; // Para la opción 3
      }



      // Mostrar el contenido correspondiente a la opción seleccionada
      if (option === 1) {
        option1Content.classList.add('show');
        option1Btn.classList.add('active');
      } else if (option === 2) {
        option2Content.classList.add('show');
        option2Btn.classList.add('active');
      } else if (option === 3) {
        option3Content.classList.add('show');
        option3Btn.classList.add('active');
      }
    }

    // Asignar eventos a los botones
    option1Btn.addEventListener('click', () => showContent(1));
    option2Btn.addEventListener('click', () => showContent(2));
    option3Btn.addEventListener('click', () => showContent(3));

    // Mostrar la opción 1 por defecto
    showContent(1);




    function copyToClipboard() {
        if (navigator.clipboard) {
            const text = document.getElementById("merchant-id-1").textContent;
            navigator.clipboard.writeText(text).then(() => {
                const message = document.getElementById("copied-message");
                message.style.display = "block";
    
                setTimeout(() => {
                    message.style.display = "none";
                }, 2000);
            }).catch(err => console.error("Error al copiar:", err));
        } else {
            console.error("La API Clipboard no está disponible.");
        }
    }






  document.addEventListener("DOMContentLoaded", () => {

    // Variables para el menú
    let lastScrollY = window.scrollY;
    let scrollDownCount = 0; // Contador de scrolls hacia abajo
    const threshold = 10; // Número de scrolls antes de ocultar el menú
    const menu = document.querySelector(".headermenu");
    let isHidden = false; // Controla si el menú está oculto

    // Función para el toggle del menú
    const toggleButton = document.querySelector('#primary-menu-toggle');
    if (toggleButton) {
        toggleButton.addEventListener('click', function (e) {
            e.preventDefault();
            const main_navigation = document.querySelector('#primary-menu');
            main_navigation.classList.toggle('hiddenmenu');
            document.getElementById('primary-menu').classList.toggle('open');
            // menu.classList.add("hiddenmenu");
        });
    }

    // Función para el scroll del menú y las animaciones
    window.addEventListener("scroll", function () {
        let currentScrollY = window.scrollY;

        // Comportamiento del menú (desaparece al hacer scroll hacia abajo)
        if (currentScrollY > lastScrollY) {
            // Scroll hacia abajo
            scrollDownCount++;
            if (scrollDownCount >= threshold && !isHidden) {
                menu.classList.add("hidden");
                isHidden = true; // Evita que siga ejecutando la acción en cada scroll
            }
        } else {
            // Scroll hacia arriba → Mostrar menú y resetear contador
            menu.classList.remove("hidden");
            scrollDownCount = 0; // Reinicia el contador cuando sube
            isHidden = false;
        }

        // Animación de los elementos .boxmobile
        const boxes = document.querySelectorAll(".boxmobile");
        boxes.forEach(boxmobile => {
            const rect = boxmobile.getBoundingClientRect();
            if (rect.top < window.innerHeight * 0.8) {
                boxmobile.classList.add("show");
            } else {
                boxmobile.classList.remove("show");
            }
        });

        // Animación de los elementos .boxmobilecircle
        const elements = document.querySelectorAll(".boxmobilecircle, .boxmobilecircleizq");
        elements.forEach(element => {
            const rect = element.getBoundingClientRect();
            if (rect.top < window.innerHeight - 100) { // Aparece un poco antes de llegar al final
                element.classList.add("visible");
            } else {
                element.classList.remove("visible");
            }
        });

        lastScrollY = currentScrollY;
    });

    // Función para el toggle del botón
    const button = document.getElementById('toggle-button');
    if (button) {
        button.addEventListener('click', function() {
            button.classList.toggle('translate-x-6');
        });
    }


  




});


