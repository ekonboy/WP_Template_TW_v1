/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/css/app.css":
/*!*******************************!*\
  !*** ./resources/css/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/css/editor-style.css":
/*!****************************************!*\
  !*** ./resources/css/editor-style.css ***!
  \****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

//gabii v1.0
function toggleMenuHeaderRes() {
  var buttontoggle3 = document.getElementById("toggle-button");
  buttontoggle3.classList.toggle("translate-x-6");
}
window.addEventListener("scroll", function () {
  var menu = document.querySelector(".headermenu");
  if (window.scrollY > 50) {
    menu.classList.add("scrolled");
  } else {
    menu.classList.remove("scrolled");
  }
});

//letras home que se mueven
var TxtRotate = function TxtRotate(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 1000;
  this.txt = "";
  this.isDeleting = false;
  this.tick();
};
TxtRotate.prototype.tick = function () {
  var i = this.loopNum % this.toRotate.length;
  var fullText = this.toRotate[i];
  this.txt = this.isDeleting ? fullText.substring(0, this.txt.length - 1) : fullText.substring(0, this.txt.length + 1);
  this.el.innerHTML = '<span class="wrap">' + this.txt + '</span><span class="cursor">|</span>';
  var that = this;
  var delta = this.isDeleting ? 50 : 100; // Más rápido

  if (!this.isDeleting && this.txt === fullText) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === "") {
    this.isDeleting = false;
    this.loopNum++;
    delta = 200;
  }
  setTimeout(function () {
    that.tick();
  }, delta);
};
window.onload = function () {
  var elements = document.getElementsByClassName("txt-rotate");
  for (var i = 0; i < elements.length; i++) {
    var toRotate = elements[i].getAttribute("data-rotate");
    var period = elements[i].getAttribute("data-period");
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
};

//header barba.js transaction
var toggleContainer = document.getElementById("toggle-container");
var toggleButton2 = document.getElementById("toggle-button");
var colorTransition = document.getElementById("colorTransition");
var handleClick = function handleClick() {
  colorTransition.style.display = "block";
  colorTransition.style.animation = "none";
  void colorTransition.offsetWidth;
  colorTransition.style.animation = "slideSmooth 0.8s linear forwards";
};
toggleContainer.addEventListener("click", function (event) {
  handleClick();
});
toggleButton2.addEventListener("click", function (event) {
  event.stopPropagation();
  handleClick();
});
function copyToClipboard() {
  if (navigator.clipboard) {
    var text = document.getElementById("merchant-id-1").textContent;
    navigator.clipboard.writeText(text).then(function () {
      var message = document.getElementById("copied-message");
      message.style.display = "block";
      setTimeout(function () {
        message.style.display = "none";
      }, 2000);
    })["catch"](function (err) {
      return console.error("Error al copiar:", err);
    });
  } else {
    console.error("La API Clipboard no está disponible.");
  }
}
document.addEventListener("DOMContentLoaded", function () {
  var menuToggle = document.getElementById("primary-menu-toggle");
  var primaryMenu = document.getElementById("primary-menu");

  // Función para mostrar/ocultar el menú
  if (menuToggle && primaryMenu) {
    menuToggle.addEventListener("click", function (event) {
      event.preventDefault();

      // Si el menú ya está visible
      if (primaryMenu.classList.contains("visible")) {
        primaryMenu.style.height = "0"; // Reduce el tamaño a 0 (cerrar el menú)
        setTimeout(function () {
          primaryMenu.classList.remove("visible");
        }, 400); // Espera a que la animación termine antes de quitar la clase
      } else {
        primaryMenu.classList.add("visible");
        primaryMenu.style.height = primaryMenu.scrollHeight + "px"; // Expande el menú
        primaryMenu.style.top = window.scrollY + 60 + "px"; // Ajusta la posición del menú según el desplazamiento
      }
    });
  }

  // Variables para el menú
  var lastScrollY = window.scrollY;
  var scrollDownCount = 0;
  var threshold = 10;
  var menu = document.querySelector(".headermenu");
  var isHidden = false;

  //aqui toggle

  // Función para el scroll del menú y las animaciones
  window.addEventListener("scroll", function () {
    var currentScrollY = window.scrollY;
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
    var boxes = document.querySelectorAll(".boxmobile");
    boxes.forEach(function (boxmobile) {
      var rect = boxmobile.getBoundingClientRect();
      if (rect.top < window.innerHeight * 0.8) {
        boxmobile.classList.add("show");
      } else {
        boxmobile.classList.remove("show");
      }
    });
    var elements = document.querySelectorAll(".boxmobilecircle, .boxmobilecircleizq");
    elements.forEach(function (element) {
      var rect = element.getBoundingClientRect();
      if (rect.top < window.innerHeight - 100) {
        element.classList.add("visible");
      } else {
        element.classList.remove("visible");
      }
    });
    lastScrollY = currentScrollY;
  });

  // Función para el cambio de contenido en el switcher
  var buttonsswitch = document.querySelectorAll(".switcher-option");
  var activeBackground = document.getElementById("active-background");
  var switcherContents = document.querySelectorAll(".switcher-content");
  if (buttonsswitch.length > 0 && activeBackground && switcherContents.length > 0) {
    var showContent = function showContent(index) {
      // Cambiar la clase active en los botones
      buttonsswitch.forEach(function (btn, i) {
        btn.classList.toggle("active", i === index);
      });
      var buttonWidth = buttonsswitch[0].offsetWidth;
      activeBackground.style.width = "".concat(buttonWidth, "px");
      activeBackground.style.left = "".concat(buttonWidth * index, "px");
      switcherContents.forEach(function (content, i) {
        content.classList.toggle("show", i === index);
      });
    };
    buttonsswitch.forEach(function (buttonswitch, index) {
      buttonswitch.addEventListener("click", function () {
        return showContent(index);
      });
    });
    showContent(0);
  }

  //toogle de globo_extra.php
  var isGreen = true; // Estado inicial

  function toggleView() {
    var circle = isGreen ? document.getElementById("circle") : document.getElementById("circle2");
    var greenDiv = document.getElementById("greenDiv");
    var redDiv = document.getElementById("redDiv");
    circle.style.visibility = "visible";
    circle.classList.add("expanded");
    redDiv.style.pointerEvents = "none";
    setTimeout(function () {
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
  document.querySelectorAll(".bubblebutton").forEach(function (button) {
    button.addEventListener("click", toggleView);
  });

  //  boton que gira
  //  FULL STACK DEVELOPER - W O R D P R E S S - © 2025 -
  var text = "F U L L S T A C K D E V E L O P E R - W O R D P R E S S - ";
  var container = document.querySelector(".text-circle");
  for (var i = 0; i < text.length; i++) {
    var span = document.createElement("span");
    span.innerText = text[i];
    var angle = 360 / text.length * i;
    span.style.transform = "rotate(".concat(angle, "deg) translate(0, -120px)");
    container.appendChild(span);
  }
  var rotation = 0;
  window.addEventListener("wheel", function (event) {
    rotation += event.deltaY > 0 ? 10 : -10;
    container.style.transform = "rotate(".concat(rotation, "deg)");
  });

  //menu ancla
  function eliminarExperiencia() {
    var experiencias = document.getElementsByClassName("experiencia_religiosa");
    for (var _i = 0; _i < experiencias.length; _i++) {
      experiencias[_i].style.display = "none";
    }
  }
  function cargarExperiencia() {
    var experiencias = document.getElementsByClassName("experiencia_religiosa");
    for (var _i2 = 0; _i2 < experiencias.length; _i2++) {
      experiencias[_i2].style.display = "inline";
    }
  }
  function recargarExperiencia() {
    var contenidoCurriculum = document.querySelectorAll(".curriculum-content");
    contenidoCurriculum.forEach(function (caja) {
      caja.style.display = "block";
    });
    cargarExperiencia();
  }
  var botonesToggleCV = document.querySelectorAll(".switcher-optioncv");
  var cajasContenidoCV = document.querySelectorAll(".simpletext-contentcv");
  var activeBackgroundcv = document.getElementById("active-backgroundcv");
  cajasContenidoCV.forEach(function (caja, index) {
    if (index !== 0) {
      caja.classList.add("oculto");
    }
  });
  function toggleContentCV(index) {
    cajasContenidoCV.forEach(function (contentcv, i) {
      if (i === index) {
        contentcv.classList.remove("oculto");
      } else {
        contentcv.classList.add("oculto");
      }
    });
    var buttonWidthcv = botonesToggleCV[0].offsetWidth;
    activeBackgroundcv.style.width = "".concat(buttonWidthcv, "px");
    activeBackgroundcv.style.left = "".concat(buttonWidthcv * index, "px");
    botonesToggleCV.forEach(function (btn, i) {
      btn.classList.remove("active");
      if (i === index) {
        btn.classList.add("active");
      }
    });
  }
  botonesToggleCV.forEach(function (boton, index) {
    boton.addEventListener("click", function () {
      toggleContentCV(index);
      if (boton.dataset.opcion === "curriculum") {
        recargarExperiencia();
      } else if (boton.dataset.opcion === "portfolio") {
        eliminarExperiencia();
      }
    });
  });

  // Código de scroll
  var switcherContainer = document.querySelector(".switcher-containercv");
  if (switcherContainer) {
    var offsetTop = switcherContainer.getBoundingClientRect().top + window.scrollY;
    var lastScrollTop = 0;
    var scrollUpCount = 0;
    window.addEventListener("scroll", function () {
      var currentScroll = window.scrollY;
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

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/public/js/app": 0,
/******/ 			"public/css/editor-style": 0,
/******/ 			"public/css/app": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunktailpress"] = self["webpackChunktailpress"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["public/css/editor-style","public/css/app"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	__webpack_require__.O(undefined, ["public/css/editor-style","public/css/app"], () => (__webpack_require__("./resources/css/app.css")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["public/css/editor-style","public/css/app"], () => (__webpack_require__("./resources/css/editor-style.css")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;