//gabii v1.0 original-editor
function toggleMenuHeaderRes() {
  const buttontoggle3 = document.getElementById("toggle-button");
  buttontoggle3.classList.toggle("translate-x-6");
  
}




document.addEventListener("DOMContentLoaded", () => {
  const menuToggle = document.getElementById("primary-menu-toggle");
  const primaryMenu = document.getElementById("primary-menu");

  // Función para mostrar/ocultar el menú
  if (menuToggle && primaryMenu) {
    menuToggle.addEventListener("click", function (event) {
      event.preventDefault();

      // Si el menú ya está visible
      if (primaryMenu.classList.contains("visible")) {
        primaryMenu.style.height = "0"; // Reduce el tamaño a 0 (cerrar el menú)
        setTimeout(() => {
          primaryMenu.classList.remove("visible");
        }, 400); // Espera a que la animación termine antes de quitar la clase
      } else {
        primaryMenu.classList.add("visible");
        primaryMenu.style.height = primaryMenu.scrollHeight + "px"; // Expande el menú
        primaryMenu.style.top = window.scrollY + 60 + "px"; // Ajusta la posición del menú según el desplazamiento
      }
    });
  }





  // Función para el scroll del menú y las animaciones
  window.addEventListener("scroll", function () {
    let currentScrollY = window.scrollY;

    if (currentScrollY > lastScrollY) {
      // Scroll hacia abajo
      scrollDownCount++;
      if (scrollDownCount >= threshold && !isHidden) {
        menu.classList.add("hidden");
        isHidden = true; // Evita que siga ejecutando la acción en cada scroll
      }
    } else {
      menu.classList.remove("hidden");
      scrollDownCount = 0;
      isHidden = false;
    }

    const boxes = document.querySelectorAll(".boxmobile");
    boxes.forEach((boxmobile) => {
      const rect = boxmobile.getBoundingClientRect();
      if (rect.top < window.innerHeight * 0.8) {
        boxmobile.classList.add("show");
      } else {
        boxmobile.classList.remove("show");
      }
    });

    const elements = document.querySelectorAll(".boxmobilecircle, .boxmobilecircleizq");
    elements.forEach((element) => {
      const rect = element.getBoundingClientRect();
      if (rect.top < window.innerHeight - 100) {
        element.classList.add("visible");
      } else {
        element.classList.remove("visible");
      }
    });
    lastScrollY = currentScrollY;
  });

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

      const buttonWidth = buttonsswitch[0].offsetWidth;
      activeBackground.style.width = `${buttonWidth}px`;
      activeBackground.style.left = `${buttonWidth * index}px`;
      switcherContents.forEach((content, i) => {
        content.classList.toggle("show", i === index);
      });
    }

    buttonsswitch.forEach((buttonswitch, index) => {
      buttonswitch.addEventListener("click", () => showContent(index));
    });
    showContent(0);
  }

  //toogle de globo_extra.php
  let isGreen = true; // Estado inicial

  function toggleView() {
    const circle = isGreen ? document.getElementById("circle") : document.getElementById("circle2");
    const greenDiv = document.getElementById("greenDiv");
    const redDiv = document.getElementById("redDiv");

    circle.style.visibility = "visible";
    circle.classList.add("expanded");
    redDiv.style.pointerEvents = "none";

    setTimeout(() => {
      circle.style.visibility = "hidden";
      circle.classList.remove("expanded");

      switch (isGreen) {
        case true:
          greenDiv.style.opacity = "0";
          greenDiv.style.pointerEvents = "none";
          greenDiv.style.display = "none";
          redDiv.style.opacity = "1";
          redDiv.style.pointerEvents = "auto";
          redDiv.style.display = "block";
          greenDiv.classList.add("hiddengloboextra");
          redDiv.classList.remove("hiddengloboextra");
          break;
        case false:
          redDiv.style.opacity = "0";
          redDiv.style.pointerEvents = "none";
          redDiv.style.display = "none";
          greenDiv.style.opacity = "1";
          greenDiv.style.pointerEvents = "auto";
          greenDiv.style.display = "block";
          redDiv.classList.add("hiddengloboextra");
          greenDiv.classList.remove("hiddengloboextra");
          break;
      }
      isGreen = !isGreen;
    }, 500);
  }
  document.querySelectorAll(".bubblebutton").forEach((button) => {
    button.addEventListener("click", toggleView);
  });



  //menu ancla
  function eliminarExperiencia() {
    const experiencias = document.getElementsByClassName("experiencia_religiosa");
    for (let i = 0; i < experiencias.length; i++) {
      experiencias[i].style.display = "none";
    }
  }

  function cargarExperiencia() {
    const experiencias = document.getElementsByClassName("experiencia_religiosa");
    for (let i = 0; i < experiencias.length; i++) {
      experiencias[i].style.display = "inline";
    }
  }

  function recargarExperiencia() {
    const contenidoCurriculum = document.querySelectorAll(".curriculum-content");

    contenidoCurriculum.forEach(function (caja) {
      caja.style.display = "block";
    });

    cargarExperiencia();
  }

  const botonesToggleCV = document.querySelectorAll(".switcher-optioncv");
  const cajasContenidoCV = document.querySelectorAll(".simpletext-contentcv");
  const activeBackgroundcv = document.getElementById("active-backgroundcv");

  cajasContenidoCV.forEach((caja, index) => {
    if (index !== 0) {
      caja.classList.add("oculto");
    }
  });

  function toggleContentCV(index) {
    cajasContenidoCV.forEach((contentcv, i) => {
      if (i === index) {
        contentcv.classList.remove("oculto");
      } else {
        contentcv.classList.add("oculto");
      }
    });

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

  // botonesToggleCV.forEach((boton, index) => {
  //   boton.addEventListener("click", function () {
  //     toggleContentCV(index);
  //     if (boton.dataset.opcion === "curriculum") {
  //       recargarExperiencia();
  //     } else if (boton.dataset.opcion === "portfolio") {
  //       eliminarExperiencia();
  //     }
  //   });
  // });

  // Código de scroll
  const switcherContainer = document.querySelector(".switcher-containercv");

  if (switcherContainer) {
    const offsetTop = switcherContainer.getBoundingClientRect().top + window.scrollY;
    let lastScrollTop = 0;
    let scrollUpCount = 0;

    window.addEventListener("scroll", function () {
      const currentScroll = window.scrollY;

      if (currentScroll >= offsetTop - 150) {
        switcherContainer.classList.add("fixed-switcher");
        switcherContainer.style.top = "150px";

        if (currentScroll > lastScrollTop) {
          switcherContainer.classList.remove("scrolling-up");
          switcherContainer.classList.add("scrolling-down");
          scrollUpCount = 0;
        } else {
          scrollUpCount++;
          if (scrollUpCount >= 1) {
            switcherContainer.classList.add("scrolling-up");
            switcherContainer.classList.remove("scrolling-down");
          }
        }
      } else {
        switcherContainer.classList.remove("fixed-switcher", "scrolling-up", "scrolling-down");
        switcherContainer.style.top = "";
      }

      lastScrollTop = currentScroll;
    });
  }









});
