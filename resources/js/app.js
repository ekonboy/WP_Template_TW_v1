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


});


//funcion de gsap:
let logo = document.querySelector(".logo");

gsap.from(".logo", {
  color: "red",
  duration: 1,
  delay: 0.5,
  ease: "step(0.5)",
  scale: 1,
  fontSize: "20px",
});

gsap.from(".main-nav", {
  y: -100,
});

const text = new SplitType(".hero-title", { types: "words, chars" });

text.chars.forEach((char, index) => {
  let charsTl = gsap.timeline();

  charsTl.from(char, {
    y: gsap.utils.random(-150, 150),
    x: gsap.utils.random(-300, 300),
    rotate: gsap.utils.random(-360, 360),
    scale: gsap.utils.random(0.5, 2),
    opacity: 0,
    duration: 0.75,
    ease: "back.out",
    delay: index * 0.01,
  });
  charsTl.from(
    char,
    {
      color: `rgb(${gsap.utils.random(0, 255)}, ${gsap.utils.random(0, 255)}, ${gsap.utils.random(0, 255)})`,
      duration: 1,
    },
    "-=.25"
  );

  char.addEventListener("mouseenter", charsHover);
  let charOriginalColor = window.getComputedStyle(char).color;

  function charsHover() {
    gsap.timeline()
      .to(char, {
        y: gsap.utils.random(-50, 50),
        x: gsap.utils.random(-50, 50),
        rotate: gsap.utils.random(-90, 90),
        scale: gsap.utils.random(0.5, 2),
        color: `rgb(${gsap.utils.random(0, 255)}, ${gsap.utils.random(0, 255)}, ${gsap.utils.random(0, 255)})`,
        onComplete: () => {
          char.removeEventListener("mouseenter", charsHover);
        },
      })
      .to(char, {
        y: 0,
        x: 0,
        rotate: 0,
        scale: 1,
        color: charOriginalColor,
        delay: 1,
        onComplete: () => {
          char.addEventListener("mouseenter", charsHover);
        },
      });
  }
});
