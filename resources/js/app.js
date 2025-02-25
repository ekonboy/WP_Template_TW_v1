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




    // Función para el cambio de contenido en el switcher

    const buttonsswitch = document.querySelectorAll(".switcher-option");
    const activeBackground = document.getElementById("active-background");
    const switcherContents = document.querySelectorAll(".switcher-content");
    
    if (buttonsswitch.length > 0 && activeBackground && switcherContents.length > 0) {
        function showContent(index) {
            // Cambiar la clase active en los botones
            buttonsswitch.forEach((btn, i) => {
                btn.classList.toggle("active", i === index);
            });
            
            // Mover el fondo activo
            activeBackground.style.left = `${(index / buttonsswitch.length) * 100}%`;
    
            // Mostrar el contenido correspondiente y ocultar los demás
            switcherContents.forEach((content, i) => {
                content.classList.toggle("show", i === index);
            });
        }
    
        // Añadir los event listeners a cada botón
        buttonsswitch.forEach((buttonswitch, index) => {
            buttonswitch.addEventListener("click", () => showContent(index));
        });
    
        // Inicializar con el contenido de la opción 1 visible
        showContent(1); // Cambié a 1 porque el segundo botón tiene la clase 'active' inicial
    } else {
        console.error("Faltan botones, fondo activo o contenido.");
    }
    
  
    
   


  
    
  
    
  
    


});


