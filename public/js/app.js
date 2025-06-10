/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

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

/***/ }),

/***/ "./resources/scss/editor-style.scss":
/*!******************************************!*\
  !*** ./resources/scss/editor-style.scss ***!
  \******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/scss/main.scss":
/*!**********************************!*\
  !*** ./resources/scss/main.scss ***!
  \**********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


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
/******/ 			"public/css/main": 0
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
/******/ 	__webpack_require__.O(undefined, ["public/css/editor-style","public/css/main"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	__webpack_require__.O(undefined, ["public/css/editor-style","public/css/main"], () => (__webpack_require__("./resources/scss/main.scss")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["public/css/editor-style","public/css/main"], () => (__webpack_require__("./resources/scss/editor-style.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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QTs7V0FFQTtXQUNBO1dBQ0E7Ozs7O1VFbERBO1VBQ0E7VUFDQTtVQUNBO1VBQ0E7VUFDQTtVQUNBIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vdGFpbHByZXNzLy4vcmVzb3VyY2VzL2pzL2FwcC5qcyIsIndlYnBhY2s6Ly90YWlscHJlc3MvLi9yZXNvdXJjZXMvc2Nzcy9lZGl0b3Itc3R5bGUuc2NzcyIsIndlYnBhY2s6Ly90YWlscHJlc3MvLi9yZXNvdXJjZXMvc2Nzcy9tYWluLnNjc3MiLCJ3ZWJwYWNrOi8vdGFpbHByZXNzL3dlYnBhY2svYm9vdHN0cmFwIiwid2VicGFjazovL3RhaWxwcmVzcy93ZWJwYWNrL3J1bnRpbWUvY2h1bmsgbG9hZGVkIiwid2VicGFjazovL3RhaWxwcmVzcy93ZWJwYWNrL3J1bnRpbWUvaGFzT3duUHJvcGVydHkgc2hvcnRoYW5kIiwid2VicGFjazovL3RhaWxwcmVzcy93ZWJwYWNrL3J1bnRpbWUvbWFrZSBuYW1lc3BhY2Ugb2JqZWN0Iiwid2VicGFjazovL3RhaWxwcmVzcy93ZWJwYWNrL3J1bnRpbWUvanNvbnAgY2h1bmsgbG9hZGluZyIsIndlYnBhY2s6Ly90YWlscHJlc3Mvd2VicGFjay9iZWZvcmUtc3RhcnR1cCIsIndlYnBhY2s6Ly90YWlscHJlc3Mvd2VicGFjay9zdGFydHVwIiwid2VicGFjazovL3RhaWxwcmVzcy93ZWJwYWNrL2FmdGVyLXN0YXJ0dXAiXSwic291cmNlc0NvbnRlbnQiOlsiLy9nYWJpaSB2MS4wXHJcbmZ1bmN0aW9uIHRvZ2dsZU1lbnVIZWFkZXJSZXMoKSB7XHJcbiAgY29uc3QgYnV0dG9udG9nZ2xlMyA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwidG9nZ2xlLWJ1dHRvblwiKTtcclxuICBidXR0b250b2dnbGUzLmNsYXNzTGlzdC50b2dnbGUoXCJ0cmFuc2xhdGUteC02XCIpO1xyXG59XHJcblxyXG53aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcihcInNjcm9sbFwiLCBmdW5jdGlvbiAoKSB7XHJcbiAgY29uc3QgbWVudSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIuaGVhZGVybWVudVwiKTtcclxuICBpZiAod2luZG93LnNjcm9sbFkgPiA1MCkge1xyXG4gICAgbWVudS5jbGFzc0xpc3QuYWRkKFwic2Nyb2xsZWRcIik7XHJcbiAgfSBlbHNlIHtcclxuICAgIG1lbnUuY2xhc3NMaXN0LnJlbW92ZShcInNjcm9sbGVkXCIpO1xyXG4gIH1cclxufSk7XHJcblxyXG5cclxuICAvL2xldHJhcyBob21lIHF1ZSBzZSBtdWV2ZW5cclxuICB2YXIgVHh0Um90YXRlID0gZnVuY3Rpb24gKGVsLCB0b1JvdGF0ZSwgcGVyaW9kKSB7XHJcbiAgICB0aGlzLnRvUm90YXRlID0gdG9Sb3RhdGU7XHJcbiAgICB0aGlzLmVsID0gZWw7XHJcbiAgICB0aGlzLmxvb3BOdW0gPSAwO1xyXG4gICAgdGhpcy5wZXJpb2QgPSBwYXJzZUludChwZXJpb2QsIDEwKSB8fCAxMDAwO1xyXG4gICAgdGhpcy50eHQgPSBcIlwiO1xyXG4gICAgdGhpcy5pc0RlbGV0aW5nID0gZmFsc2U7XHJcbiAgICB0aGlzLnRpY2soKTtcclxuICB9O1xyXG5cclxuICBUeHRSb3RhdGUucHJvdG90eXBlLnRpY2sgPSBmdW5jdGlvbiAoKSB7XHJcbiAgICB2YXIgaSA9IHRoaXMubG9vcE51bSAlIHRoaXMudG9Sb3RhdGUubGVuZ3RoO1xyXG4gICAgdmFyIGZ1bGxUZXh0ID0gdGhpcy50b1JvdGF0ZVtpXTtcclxuXHJcbiAgICB0aGlzLnR4dCA9IHRoaXMuaXNEZWxldGluZyA/IGZ1bGxUZXh0LnN1YnN0cmluZygwLCB0aGlzLnR4dC5sZW5ndGggLSAxKSA6IGZ1bGxUZXh0LnN1YnN0cmluZygwLCB0aGlzLnR4dC5sZW5ndGggKyAxKTtcclxuXHJcbiAgICB0aGlzLmVsLmlubmVySFRNTCA9ICc8c3BhbiBjbGFzcz1cIndyYXBcIj4nICsgdGhpcy50eHQgKyAnPC9zcGFuPjxzcGFuIGNsYXNzPVwiY3Vyc29yXCI+fDwvc3Bhbj4nO1xyXG5cclxuICAgIHZhciB0aGF0ID0gdGhpcztcclxuICAgIHZhciBkZWx0YSA9IHRoaXMuaXNEZWxldGluZyA/IDUwIDogMTAwOyAvLyBNw6FzIHLDoXBpZG9cclxuXHJcbiAgICBpZiAoIXRoaXMuaXNEZWxldGluZyAmJiB0aGlzLnR4dCA9PT0gZnVsbFRleHQpIHtcclxuICAgICAgZGVsdGEgPSB0aGlzLnBlcmlvZDtcclxuICAgICAgdGhpcy5pc0RlbGV0aW5nID0gdHJ1ZTtcclxuICAgIH0gZWxzZSBpZiAodGhpcy5pc0RlbGV0aW5nICYmIHRoaXMudHh0ID09PSBcIlwiKSB7XHJcbiAgICAgIHRoaXMuaXNEZWxldGluZyA9IGZhbHNlO1xyXG4gICAgICB0aGlzLmxvb3BOdW0rKztcclxuICAgICAgZGVsdGEgPSAyMDA7XHJcbiAgICB9XHJcblxyXG4gICAgc2V0VGltZW91dChmdW5jdGlvbiAoKSB7XHJcbiAgICAgIHRoYXQudGljaygpO1xyXG4gICAgfSwgZGVsdGEpO1xyXG4gIH07XHJcblxyXG4gIHdpbmRvdy5vbmxvYWQgPSBmdW5jdGlvbiAoKSB7XHJcbiAgICB2YXIgZWxlbWVudHMgPSBkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKFwidHh0LXJvdGF0ZVwiKTtcclxuICAgIGZvciAodmFyIGkgPSAwOyBpIDwgZWxlbWVudHMubGVuZ3RoOyBpKyspIHtcclxuICAgICAgdmFyIHRvUm90YXRlID0gZWxlbWVudHNbaV0uZ2V0QXR0cmlidXRlKFwiZGF0YS1yb3RhdGVcIik7XHJcbiAgICAgIHZhciBwZXJpb2QgPSBlbGVtZW50c1tpXS5nZXRBdHRyaWJ1dGUoXCJkYXRhLXBlcmlvZFwiKTtcclxuICAgICAgaWYgKHRvUm90YXRlKSB7XHJcbiAgICAgICAgbmV3IFR4dFJvdGF0ZShlbGVtZW50c1tpXSwgSlNPTi5wYXJzZSh0b1JvdGF0ZSksIHBlcmlvZCk7XHJcbiAgICAgIH1cclxuICAgIH1cclxuICB9O1xyXG4gIFxyXG4vL2hlYWRlciBiYXJiYS5qcyB0cmFuc2FjdGlvblxyXG5jb25zdCB0b2dnbGVDb250YWluZXIgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcInRvZ2dsZS1jb250YWluZXJcIik7XHJcbmNvbnN0IHRvZ2dsZUJ1dHRvbjIgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcInRvZ2dsZS1idXR0b25cIik7XHJcbmNvbnN0IGNvbG9yVHJhbnNpdGlvbiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwiY29sb3JUcmFuc2l0aW9uXCIpO1xyXG5cclxuY29uc3QgaGFuZGxlQ2xpY2sgPSAoKSA9PiB7XHJcbiAgY29sb3JUcmFuc2l0aW9uLnN0eWxlLmRpc3BsYXkgPSBcImJsb2NrXCI7XHJcbiAgY29sb3JUcmFuc2l0aW9uLnN0eWxlLmFuaW1hdGlvbiA9IFwibm9uZVwiO1xyXG4gIHZvaWQgY29sb3JUcmFuc2l0aW9uLm9mZnNldFdpZHRoO1xyXG4gIGNvbG9yVHJhbnNpdGlvbi5zdHlsZS5hbmltYXRpb24gPSBcInNsaWRlU21vb3RoIDAuOHMgbGluZWFyIGZvcndhcmRzXCI7XHJcbn07XHJcblxyXG50b2dnbGVDb250YWluZXIuYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsIChldmVudCkgPT4ge1xyXG4gIGhhbmRsZUNsaWNrKCk7XHJcbn0pO1xyXG5cclxudG9nZ2xlQnV0dG9uMi5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgKGV2ZW50KSA9PiB7XHJcbiAgZXZlbnQuc3RvcFByb3BhZ2F0aW9uKCk7XHJcbiAgaGFuZGxlQ2xpY2soKTtcclxufSk7XHJcblxyXG5mdW5jdGlvbiBjb3B5VG9DbGlwYm9hcmQoKSB7XHJcbiAgaWYgKG5hdmlnYXRvci5jbGlwYm9hcmQpIHtcclxuICAgIGNvbnN0IHRleHQgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcIm1lcmNoYW50LWlkLTFcIikudGV4dENvbnRlbnQ7XHJcbiAgICBuYXZpZ2F0b3IuY2xpcGJvYXJkXHJcbiAgICAgIC53cml0ZVRleHQodGV4dClcclxuICAgICAgLnRoZW4oKCkgPT4ge1xyXG4gICAgICAgIGNvbnN0IG1lc3NhZ2UgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcImNvcGllZC1tZXNzYWdlXCIpO1xyXG4gICAgICAgIG1lc3NhZ2Uuc3R5bGUuZGlzcGxheSA9IFwiYmxvY2tcIjtcclxuXHJcbiAgICAgICAgc2V0VGltZW91dCgoKSA9PiB7XHJcbiAgICAgICAgICBtZXNzYWdlLnN0eWxlLmRpc3BsYXkgPSBcIm5vbmVcIjtcclxuICAgICAgICB9LCAyMDAwKTtcclxuICAgICAgfSlcclxuICAgICAgLmNhdGNoKChlcnIpID0+IGNvbnNvbGUuZXJyb3IoXCJFcnJvciBhbCBjb3BpYXI6XCIsIGVycikpO1xyXG4gIH0gZWxzZSB7XHJcbiAgICBjb25zb2xlLmVycm9yKFwiTGEgQVBJIENsaXBib2FyZCBubyBlc3TDoSBkaXNwb25pYmxlLlwiKTtcclxuICB9XHJcbn1cclxuXHJcbmRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoXCJET01Db250ZW50TG9hZGVkXCIsICgpID0+IHtcclxuICBjb25zdCBtZW51VG9nZ2xlID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJwcmltYXJ5LW1lbnUtdG9nZ2xlXCIpO1xyXG4gIGNvbnN0IHByaW1hcnlNZW51ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJwcmltYXJ5LW1lbnVcIik7XHJcblxyXG4gIC8vIEZ1bmNpw7NuIHBhcmEgbW9zdHJhci9vY3VsdGFyIGVsIG1lbsO6XHJcbiAgaWYgKG1lbnVUb2dnbGUgJiYgcHJpbWFyeU1lbnUpIHtcclxuICAgIG1lbnVUb2dnbGUuYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsIGZ1bmN0aW9uIChldmVudCkge1xyXG4gICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xyXG5cclxuICAgICAgLy8gU2kgZWwgbWVuw7ogeWEgZXN0w6EgdmlzaWJsZVxyXG4gICAgICBpZiAocHJpbWFyeU1lbnUuY2xhc3NMaXN0LmNvbnRhaW5zKFwidmlzaWJsZVwiKSkge1xyXG4gICAgICAgIHByaW1hcnlNZW51LnN0eWxlLmhlaWdodCA9IFwiMFwiOyAvLyBSZWR1Y2UgZWwgdGFtYcOxbyBhIDAgKGNlcnJhciBlbCBtZW7DuilcclxuICAgICAgICBzZXRUaW1lb3V0KCgpID0+IHtcclxuICAgICAgICAgIHByaW1hcnlNZW51LmNsYXNzTGlzdC5yZW1vdmUoXCJ2aXNpYmxlXCIpO1xyXG4gICAgICAgIH0sIDQwMCk7IC8vIEVzcGVyYSBhIHF1ZSBsYSBhbmltYWNpw7NuIHRlcm1pbmUgYW50ZXMgZGUgcXVpdGFyIGxhIGNsYXNlXHJcbiAgICAgIH0gZWxzZSB7XHJcbiAgICAgICAgcHJpbWFyeU1lbnUuY2xhc3NMaXN0LmFkZChcInZpc2libGVcIik7XHJcbiAgICAgICAgcHJpbWFyeU1lbnUuc3R5bGUuaGVpZ2h0ID0gcHJpbWFyeU1lbnUuc2Nyb2xsSGVpZ2h0ICsgXCJweFwiOyAvLyBFeHBhbmRlIGVsIG1lbsO6XHJcbiAgICAgICAgcHJpbWFyeU1lbnUuc3R5bGUudG9wID0gd2luZG93LnNjcm9sbFkgKyA2MCArIFwicHhcIjsgLy8gQWp1c3RhIGxhIHBvc2ljacOzbiBkZWwgbWVuw7ogc2Vnw7puIGVsIGRlc3BsYXphbWllbnRvXHJcbiAgICAgIH1cclxuICAgIH0pO1xyXG4gIH1cclxuXHJcbiAgLy8gVmFyaWFibGVzIHBhcmEgZWwgbWVuw7pcclxuICBsZXQgbGFzdFNjcm9sbFkgPSB3aW5kb3cuc2Nyb2xsWTtcclxuICBsZXQgc2Nyb2xsRG93bkNvdW50ID0gMDtcclxuICBjb25zdCB0aHJlc2hvbGQgPSAxMDtcclxuICBjb25zdCBtZW51ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5oZWFkZXJtZW51XCIpO1xyXG4gIGxldCBpc0hpZGRlbiA9IGZhbHNlO1xyXG5cclxuICAvL2FxdWkgdG9nZ2xlXHJcblxyXG4gIC8vIEZ1bmNpw7NuIHBhcmEgZWwgc2Nyb2xsIGRlbCBtZW7DuiB5IGxhcyBhbmltYWNpb25lc1xyXG4gIHdpbmRvdy5hZGRFdmVudExpc3RlbmVyKFwic2Nyb2xsXCIsIGZ1bmN0aW9uICgpIHtcclxuICAgIGxldCBjdXJyZW50U2Nyb2xsWSA9IHdpbmRvdy5zY3JvbGxZO1xyXG5cclxuICAgIGlmIChjdXJyZW50U2Nyb2xsWSA+IGxhc3RTY3JvbGxZKSB7XHJcbiAgICAgIC8vIFNjcm9sbCBoYWNpYSBhYmFqb1xyXG4gICAgICBzY3JvbGxEb3duQ291bnQrKztcclxuICAgICAgaWYgKHNjcm9sbERvd25Db3VudCA+PSB0aHJlc2hvbGQgJiYgIWlzSGlkZGVuKSB7XHJcbiAgICAgICAgbWVudS5jbGFzc0xpc3QuYWRkKFwiaGlkZGVuXCIpO1xyXG4gICAgICAgIGlzSGlkZGVuID0gdHJ1ZTsgLy8gRXZpdGEgcXVlIHNpZ2EgZWplY3V0YW5kbyBsYSBhY2Npw7NuIGVuIGNhZGEgc2Nyb2xsXHJcbiAgICAgIH1cclxuICAgIH0gZWxzZSB7XHJcbiAgICAgIG1lbnUuY2xhc3NMaXN0LnJlbW92ZShcImhpZGRlblwiKTtcclxuICAgICAgc2Nyb2xsRG93bkNvdW50ID0gMDtcclxuICAgICAgaXNIaWRkZW4gPSBmYWxzZTtcclxuICAgIH1cclxuXHJcbiAgICBjb25zdCBib3hlcyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoXCIuYm94bW9iaWxlXCIpO1xyXG4gICAgYm94ZXMuZm9yRWFjaCgoYm94bW9iaWxlKSA9PiB7XHJcbiAgICAgIGNvbnN0IHJlY3QgPSBib3htb2JpbGUuZ2V0Qm91bmRpbmdDbGllbnRSZWN0KCk7XHJcbiAgICAgIGlmIChyZWN0LnRvcCA8IHdpbmRvdy5pbm5lckhlaWdodCAqIDAuOCkge1xyXG4gICAgICAgIGJveG1vYmlsZS5jbGFzc0xpc3QuYWRkKFwic2hvd1wiKTtcclxuICAgICAgfSBlbHNlIHtcclxuICAgICAgICBib3htb2JpbGUuY2xhc3NMaXN0LnJlbW92ZShcInNob3dcIik7XHJcbiAgICAgIH1cclxuICAgIH0pO1xyXG5cclxuICAgIGNvbnN0IGVsZW1lbnRzID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbChcIi5ib3htb2JpbGVjaXJjbGUsIC5ib3htb2JpbGVjaXJjbGVpenFcIik7XHJcbiAgICBlbGVtZW50cy5mb3JFYWNoKChlbGVtZW50KSA9PiB7XHJcbiAgICAgIGNvbnN0IHJlY3QgPSBlbGVtZW50LmdldEJvdW5kaW5nQ2xpZW50UmVjdCgpO1xyXG4gICAgICBpZiAocmVjdC50b3AgPCB3aW5kb3cuaW5uZXJIZWlnaHQgLSAxMDApIHtcclxuICAgICAgICBlbGVtZW50LmNsYXNzTGlzdC5hZGQoXCJ2aXNpYmxlXCIpO1xyXG4gICAgICB9IGVsc2Uge1xyXG4gICAgICAgIGVsZW1lbnQuY2xhc3NMaXN0LnJlbW92ZShcInZpc2libGVcIik7XHJcbiAgICAgIH1cclxuICAgIH0pO1xyXG4gICAgbGFzdFNjcm9sbFkgPSBjdXJyZW50U2Nyb2xsWTtcclxuICB9KTtcclxuXHJcbiAgLy8gRnVuY2nDs24gcGFyYSBlbCBjYW1iaW8gZGUgY29udGVuaWRvIGVuIGVsIHN3aXRjaGVyXHJcbiAgY29uc3QgYnV0dG9uc3N3aXRjaCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoXCIuc3dpdGNoZXItb3B0aW9uXCIpO1xyXG4gIGNvbnN0IGFjdGl2ZUJhY2tncm91bmQgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcImFjdGl2ZS1iYWNrZ3JvdW5kXCIpO1xyXG4gIGNvbnN0IHN3aXRjaGVyQ29udGVudHMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKFwiLnN3aXRjaGVyLWNvbnRlbnRcIik7XHJcblxyXG4gIGlmIChidXR0b25zc3dpdGNoLmxlbmd0aCA+IDAgJiYgYWN0aXZlQmFja2dyb3VuZCAmJiBzd2l0Y2hlckNvbnRlbnRzLmxlbmd0aCA+IDApIHtcclxuICAgIGZ1bmN0aW9uIHNob3dDb250ZW50KGluZGV4KSB7XHJcbiAgICAgIC8vIENhbWJpYXIgbGEgY2xhc2UgYWN0aXZlIGVuIGxvcyBib3RvbmVzXHJcbiAgICAgIGJ1dHRvbnNzd2l0Y2guZm9yRWFjaCgoYnRuLCBpKSA9PiB7XHJcbiAgICAgICAgYnRuLmNsYXNzTGlzdC50b2dnbGUoXCJhY3RpdmVcIiwgaSA9PT0gaW5kZXgpO1xyXG4gICAgICB9KTtcclxuXHJcbiAgICAgIGNvbnN0IGJ1dHRvbldpZHRoID0gYnV0dG9uc3N3aXRjaFswXS5vZmZzZXRXaWR0aDtcclxuICAgICAgYWN0aXZlQmFja2dyb3VuZC5zdHlsZS53aWR0aCA9IGAke2J1dHRvbldpZHRofXB4YDtcclxuICAgICAgYWN0aXZlQmFja2dyb3VuZC5zdHlsZS5sZWZ0ID0gYCR7YnV0dG9uV2lkdGggKiBpbmRleH1weGA7XHJcbiAgICAgIHN3aXRjaGVyQ29udGVudHMuZm9yRWFjaCgoY29udGVudCwgaSkgPT4ge1xyXG4gICAgICAgIGNvbnRlbnQuY2xhc3NMaXN0LnRvZ2dsZShcInNob3dcIiwgaSA9PT0gaW5kZXgpO1xyXG4gICAgICB9KTtcclxuICAgIH1cclxuXHJcbiAgICBidXR0b25zc3dpdGNoLmZvckVhY2goKGJ1dHRvbnN3aXRjaCwgaW5kZXgpID0+IHtcclxuICAgICAgYnV0dG9uc3dpdGNoLmFkZEV2ZW50TGlzdGVuZXIoXCJjbGlja1wiLCAoKSA9PiBzaG93Q29udGVudChpbmRleCkpO1xyXG4gICAgfSk7XHJcbiAgICBzaG93Q29udGVudCgwKTtcclxuICB9XHJcblxyXG4gIC8vdG9vZ2xlIGRlIGdsb2JvX2V4dHJhLnBocFxyXG4gIGxldCBpc0dyZWVuID0gdHJ1ZTsgLy8gRXN0YWRvIGluaWNpYWxcclxuXHJcbiAgZnVuY3Rpb24gdG9nZ2xlVmlldygpIHtcclxuICAgIGNvbnN0IGNpcmNsZSA9IGlzR3JlZW4gPyBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcImNpcmNsZVwiKSA6IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwiY2lyY2xlMlwiKTtcclxuICAgIGNvbnN0IGdyZWVuRGl2ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJncmVlbkRpdlwiKTtcclxuICAgIGNvbnN0IHJlZERpdiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwicmVkRGl2XCIpO1xyXG5cclxuICAgIGNpcmNsZS5zdHlsZS52aXNpYmlsaXR5ID0gXCJ2aXNpYmxlXCI7XHJcbiAgICBjaXJjbGUuY2xhc3NMaXN0LmFkZChcImV4cGFuZGVkXCIpO1xyXG4gICAgcmVkRGl2LnN0eWxlLnBvaW50ZXJFdmVudHMgPSBcIm5vbmVcIjtcclxuXHJcbiAgICBzZXRUaW1lb3V0KCgpID0+IHtcclxuICAgICAgY2lyY2xlLnN0eWxlLnZpc2liaWxpdHkgPSBcImhpZGRlblwiO1xyXG4gICAgICBjaXJjbGUuY2xhc3NMaXN0LnJlbW92ZShcImV4cGFuZGVkXCIpO1xyXG5cclxuICAgICAgc3dpdGNoIChpc0dyZWVuKSB7XHJcbiAgICAgICAgY2FzZSB0cnVlOlxyXG4gICAgICAgICAgZ3JlZW5EaXYuc3R5bGUub3BhY2l0eSA9IFwiMFwiO1xyXG4gICAgICAgICAgZ3JlZW5EaXYuc3R5bGUucG9pbnRlckV2ZW50cyA9IFwibm9uZVwiO1xyXG4gICAgICAgICAgZ3JlZW5EaXYuc3R5bGUuZGlzcGxheSA9IFwibm9uZVwiO1xyXG4gICAgICAgICAgcmVkRGl2LnN0eWxlLm9wYWNpdHkgPSBcIjFcIjtcclxuICAgICAgICAgIHJlZERpdi5zdHlsZS5wb2ludGVyRXZlbnRzID0gXCJhdXRvXCI7XHJcbiAgICAgICAgICByZWREaXYuc3R5bGUuZGlzcGxheSA9IFwiYmxvY2tcIjtcclxuICAgICAgICAgIGdyZWVuRGl2LmNsYXNzTGlzdC5hZGQoXCJoaWRkZW5nbG9ib2V4dHJhXCIpO1xyXG4gICAgICAgICAgcmVkRGl2LmNsYXNzTGlzdC5yZW1vdmUoXCJoaWRkZW5nbG9ib2V4dHJhXCIpO1xyXG4gICAgICAgICAgYnJlYWs7XHJcbiAgICAgICAgY2FzZSBmYWxzZTpcclxuICAgICAgICAgIHJlZERpdi5zdHlsZS5vcGFjaXR5ID0gXCIwXCI7XHJcbiAgICAgICAgICByZWREaXYuc3R5bGUucG9pbnRlckV2ZW50cyA9IFwibm9uZVwiO1xyXG4gICAgICAgICAgcmVkRGl2LnN0eWxlLmRpc3BsYXkgPSBcIm5vbmVcIjtcclxuICAgICAgICAgIGdyZWVuRGl2LnN0eWxlLm9wYWNpdHkgPSBcIjFcIjtcclxuICAgICAgICAgIGdyZWVuRGl2LnN0eWxlLnBvaW50ZXJFdmVudHMgPSBcImF1dG9cIjtcclxuICAgICAgICAgIGdyZWVuRGl2LnN0eWxlLmRpc3BsYXkgPSBcImJsb2NrXCI7XHJcbiAgICAgICAgICByZWREaXYuY2xhc3NMaXN0LmFkZChcImhpZGRlbmdsb2JvZXh0cmFcIik7XHJcbiAgICAgICAgICBncmVlbkRpdi5jbGFzc0xpc3QucmVtb3ZlKFwiaGlkZGVuZ2xvYm9leHRyYVwiKTtcclxuICAgICAgICAgIGJyZWFrO1xyXG4gICAgICB9XHJcbiAgICAgIGlzR3JlZW4gPSAhaXNHcmVlbjtcclxuICAgIH0sIDUwMCk7XHJcbiAgfVxyXG4gIGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoXCIuYnViYmxlYnV0dG9uXCIpLmZvckVhY2goKGJ1dHRvbikgPT4ge1xyXG4gICAgYnV0dG9uLmFkZEV2ZW50TGlzdGVuZXIoXCJjbGlja1wiLCB0b2dnbGVWaWV3KTtcclxuICB9KTtcclxuXHJcbiAgLy8gIGJvdG9uIHF1ZSBnaXJhXHJcbiAgLy8gIEZVTEwgU1RBQ0sgREVWRUxPUEVSIC0gVyBPIFIgRCBQIFIgRSBTIFMgLSDCqSAyMDI1IC1cclxuICBjb25zdCB0ZXh0ID0gXCJGIFUgTCBMIFMgVCBBIEMgSyBEIEUgViBFIEwgTyBQIEUgUiAtIFcgTyBSIEQgUCBSIEUgUyBTIC0gXCI7XHJcbiAgY29uc3QgY29udGFpbmVyID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi50ZXh0LWNpcmNsZVwiKTtcclxuXHJcbiAgZm9yIChsZXQgaSA9IDA7IGkgPCB0ZXh0Lmxlbmd0aDsgaSsrKSB7XHJcbiAgICBsZXQgc3BhbiA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoXCJzcGFuXCIpO1xyXG4gICAgc3Bhbi5pbm5lclRleHQgPSB0ZXh0W2ldO1xyXG4gICAgbGV0IGFuZ2xlID0gKDM2MCAvIHRleHQubGVuZ3RoKSAqIGk7XHJcbiAgICBzcGFuLnN0eWxlLnRyYW5zZm9ybSA9IGByb3RhdGUoJHthbmdsZX1kZWcpIHRyYW5zbGF0ZSgwLCAtMTIwcHgpYDtcclxuICAgIGNvbnRhaW5lci5hcHBlbmRDaGlsZChzcGFuKTtcclxuICB9XHJcblxyXG4gIGxldCByb3RhdGlvbiA9IDA7XHJcblxyXG4gIHdpbmRvdy5hZGRFdmVudExpc3RlbmVyKFwid2hlZWxcIiwgKGV2ZW50KSA9PiB7XHJcbiAgICByb3RhdGlvbiArPSBldmVudC5kZWx0YVkgPiAwID8gMTAgOiAtMTA7XHJcbiAgICBjb250YWluZXIuc3R5bGUudHJhbnNmb3JtID0gYHJvdGF0ZSgke3JvdGF0aW9ufWRlZylgO1xyXG4gIH0pO1xyXG5cclxuICAvL21lbnUgYW5jbGFcclxuICBmdW5jdGlvbiBlbGltaW5hckV4cGVyaWVuY2lhKCkge1xyXG4gICAgY29uc3QgZXhwZXJpZW5jaWFzID0gZG9jdW1lbnQuZ2V0RWxlbWVudHNCeUNsYXNzTmFtZShcImV4cGVyaWVuY2lhX3JlbGlnaW9zYVwiKTtcclxuICAgIGZvciAobGV0IGkgPSAwOyBpIDwgZXhwZXJpZW5jaWFzLmxlbmd0aDsgaSsrKSB7XHJcbiAgICAgIGV4cGVyaWVuY2lhc1tpXS5zdHlsZS5kaXNwbGF5ID0gXCJub25lXCI7XHJcbiAgICB9XHJcbiAgfVxyXG5cclxuICBmdW5jdGlvbiBjYXJnYXJFeHBlcmllbmNpYSgpIHtcclxuICAgIGNvbnN0IGV4cGVyaWVuY2lhcyA9IGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUoXCJleHBlcmllbmNpYV9yZWxpZ2lvc2FcIik7XHJcbiAgICBmb3IgKGxldCBpID0gMDsgaSA8IGV4cGVyaWVuY2lhcy5sZW5ndGg7IGkrKykge1xyXG4gICAgICBleHBlcmllbmNpYXNbaV0uc3R5bGUuZGlzcGxheSA9IFwiaW5saW5lXCI7XHJcbiAgICB9XHJcbiAgfVxyXG5cclxuICBmdW5jdGlvbiByZWNhcmdhckV4cGVyaWVuY2lhKCkge1xyXG4gICAgY29uc3QgY29udGVuaWRvQ3VycmljdWx1bSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoXCIuY3VycmljdWx1bS1jb250ZW50XCIpO1xyXG5cclxuICAgIGNvbnRlbmlkb0N1cnJpY3VsdW0uZm9yRWFjaChmdW5jdGlvbiAoY2FqYSkge1xyXG4gICAgICBjYWphLnN0eWxlLmRpc3BsYXkgPSBcImJsb2NrXCI7XHJcbiAgICB9KTtcclxuXHJcbiAgICBjYXJnYXJFeHBlcmllbmNpYSgpO1xyXG4gIH1cclxuXHJcbiAgY29uc3QgYm90b25lc1RvZ2dsZUNWID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbChcIi5zd2l0Y2hlci1vcHRpb25jdlwiKTtcclxuICBjb25zdCBjYWphc0NvbnRlbmlkb0NWID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbChcIi5zaW1wbGV0ZXh0LWNvbnRlbnRjdlwiKTtcclxuICBjb25zdCBhY3RpdmVCYWNrZ3JvdW5kY3YgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcImFjdGl2ZS1iYWNrZ3JvdW5kY3ZcIik7XHJcblxyXG4gIGNhamFzQ29udGVuaWRvQ1YuZm9yRWFjaCgoY2FqYSwgaW5kZXgpID0+IHtcclxuICAgIGlmIChpbmRleCAhPT0gMCkge1xyXG4gICAgICBjYWphLmNsYXNzTGlzdC5hZGQoXCJvY3VsdG9cIik7XHJcbiAgICB9XHJcbiAgfSk7XHJcblxyXG4gIGZ1bmN0aW9uIHRvZ2dsZUNvbnRlbnRDVihpbmRleCkge1xyXG4gICAgY2FqYXNDb250ZW5pZG9DVi5mb3JFYWNoKChjb250ZW50Y3YsIGkpID0+IHtcclxuICAgICAgaWYgKGkgPT09IGluZGV4KSB7XHJcbiAgICAgICAgY29udGVudGN2LmNsYXNzTGlzdC5yZW1vdmUoXCJvY3VsdG9cIik7XHJcbiAgICAgIH0gZWxzZSB7XHJcbiAgICAgICAgY29udGVudGN2LmNsYXNzTGlzdC5hZGQoXCJvY3VsdG9cIik7XHJcbiAgICAgIH1cclxuICAgIH0pO1xyXG5cclxuICAgIGNvbnN0IGJ1dHRvbldpZHRoY3YgPSBib3RvbmVzVG9nZ2xlQ1ZbMF0ub2Zmc2V0V2lkdGg7XHJcbiAgICBhY3RpdmVCYWNrZ3JvdW5kY3Yuc3R5bGUud2lkdGggPSBgJHtidXR0b25XaWR0aGN2fXB4YDtcclxuICAgIGFjdGl2ZUJhY2tncm91bmRjdi5zdHlsZS5sZWZ0ID0gYCR7YnV0dG9uV2lkdGhjdiAqIGluZGV4fXB4YDtcclxuXHJcbiAgICBib3RvbmVzVG9nZ2xlQ1YuZm9yRWFjaCgoYnRuLCBpKSA9PiB7XHJcbiAgICAgIGJ0bi5jbGFzc0xpc3QucmVtb3ZlKFwiYWN0aXZlXCIpO1xyXG4gICAgICBpZiAoaSA9PT0gaW5kZXgpIHtcclxuICAgICAgICBidG4uY2xhc3NMaXN0LmFkZChcImFjdGl2ZVwiKTtcclxuICAgICAgfVxyXG4gICAgfSk7XHJcbiAgfVxyXG5cclxuICBib3RvbmVzVG9nZ2xlQ1YuZm9yRWFjaCgoYm90b24sIGluZGV4KSA9PiB7XHJcbiAgICBib3Rvbi5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgZnVuY3Rpb24gKCkge1xyXG4gICAgICB0b2dnbGVDb250ZW50Q1YoaW5kZXgpO1xyXG4gICAgICBpZiAoYm90b24uZGF0YXNldC5vcGNpb24gPT09IFwiY3VycmljdWx1bVwiKSB7XHJcbiAgICAgICAgcmVjYXJnYXJFeHBlcmllbmNpYSgpO1xyXG4gICAgICB9IGVsc2UgaWYgKGJvdG9uLmRhdGFzZXQub3BjaW9uID09PSBcInBvcnRmb2xpb1wiKSB7XHJcbiAgICAgICAgZWxpbWluYXJFeHBlcmllbmNpYSgpO1xyXG4gICAgICB9XHJcbiAgICB9KTtcclxuICB9KTtcclxuXHJcbiAgLy8gQ8OzZGlnbyBkZSBzY3JvbGxcclxuICBjb25zdCBzd2l0Y2hlckNvbnRhaW5lciA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIuc3dpdGNoZXItY29udGFpbmVyY3ZcIik7XHJcblxyXG4gIGlmIChzd2l0Y2hlckNvbnRhaW5lcikge1xyXG4gICAgY29uc3Qgb2Zmc2V0VG9wID0gc3dpdGNoZXJDb250YWluZXIuZ2V0Qm91bmRpbmdDbGllbnRSZWN0KCkudG9wICsgd2luZG93LnNjcm9sbFk7XHJcbiAgICBsZXQgbGFzdFNjcm9sbFRvcCA9IDA7XHJcbiAgICBsZXQgc2Nyb2xsVXBDb3VudCA9IDA7XHJcblxyXG4gICAgd2luZG93LmFkZEV2ZW50TGlzdGVuZXIoXCJzY3JvbGxcIiwgZnVuY3Rpb24gKCkge1xyXG4gICAgICBjb25zdCBjdXJyZW50U2Nyb2xsID0gd2luZG93LnNjcm9sbFk7XHJcblxyXG4gICAgICBpZiAoY3VycmVudFNjcm9sbCA+PSBvZmZzZXRUb3AgLSAxNTApIHtcclxuICAgICAgICBzd2l0Y2hlckNvbnRhaW5lci5jbGFzc0xpc3QuYWRkKFwiZml4ZWQtc3dpdGNoZXJcIik7XHJcbiAgICAgICAgc3dpdGNoZXJDb250YWluZXIuc3R5bGUudG9wID0gXCIxNTBweFwiO1xyXG5cclxuICAgICAgICBpZiAoY3VycmVudFNjcm9sbCA+IGxhc3RTY3JvbGxUb3ApIHtcclxuICAgICAgICAgIHN3aXRjaGVyQ29udGFpbmVyLmNsYXNzTGlzdC5yZW1vdmUoXCJzY3JvbGxpbmctdXBcIik7XHJcbiAgICAgICAgICBzd2l0Y2hlckNvbnRhaW5lci5jbGFzc0xpc3QuYWRkKFwic2Nyb2xsaW5nLWRvd25cIik7XHJcbiAgICAgICAgICBzY3JvbGxVcENvdW50ID0gMDtcclxuICAgICAgICB9IGVsc2Uge1xyXG4gICAgICAgICAgc2Nyb2xsVXBDb3VudCsrO1xyXG4gICAgICAgICAgaWYgKHNjcm9sbFVwQ291bnQgPj0gMSkge1xyXG4gICAgICAgICAgICBzd2l0Y2hlckNvbnRhaW5lci5jbGFzc0xpc3QuYWRkKFwic2Nyb2xsaW5nLXVwXCIpO1xyXG4gICAgICAgICAgICBzd2l0Y2hlckNvbnRhaW5lci5jbGFzc0xpc3QucmVtb3ZlKFwic2Nyb2xsaW5nLWRvd25cIik7XHJcbiAgICAgICAgICB9XHJcbiAgICAgICAgfVxyXG4gICAgICB9IGVsc2Uge1xyXG4gICAgICAgIHN3aXRjaGVyQ29udGFpbmVyLmNsYXNzTGlzdC5yZW1vdmUoXCJmaXhlZC1zd2l0Y2hlclwiLCBcInNjcm9sbGluZy11cFwiLCBcInNjcm9sbGluZy1kb3duXCIpO1xyXG4gICAgICAgIHN3aXRjaGVyQ29udGFpbmVyLnN0eWxlLnRvcCA9IFwiXCI7XHJcbiAgICAgIH1cclxuXHJcbiAgICAgIGxhc3RTY3JvbGxUb3AgPSBjdXJyZW50U2Nyb2xsO1xyXG4gICAgfSk7XHJcbiAgfVxyXG5cclxuXHJcblxyXG5cclxuXHJcblxyXG5cclxuXHJcblxyXG59KTtcclxuIiwiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307IiwiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307IiwiLy8gVGhlIG1vZHVsZSBjYWNoZVxudmFyIF9fd2VicGFja19tb2R1bGVfY2FjaGVfXyA9IHt9O1xuXG4vLyBUaGUgcmVxdWlyZSBmdW5jdGlvblxuZnVuY3Rpb24gX193ZWJwYWNrX3JlcXVpcmVfXyhtb2R1bGVJZCkge1xuXHQvLyBDaGVjayBpZiBtb2R1bGUgaXMgaW4gY2FjaGVcblx0dmFyIGNhY2hlZE1vZHVsZSA9IF9fd2VicGFja19tb2R1bGVfY2FjaGVfX1ttb2R1bGVJZF07XG5cdGlmIChjYWNoZWRNb2R1bGUgIT09IHVuZGVmaW5lZCkge1xuXHRcdHJldHVybiBjYWNoZWRNb2R1bGUuZXhwb3J0cztcblx0fVxuXHQvLyBDcmVhdGUgYSBuZXcgbW9kdWxlIChhbmQgcHV0IGl0IGludG8gdGhlIGNhY2hlKVxuXHR2YXIgbW9kdWxlID0gX193ZWJwYWNrX21vZHVsZV9jYWNoZV9fW21vZHVsZUlkXSA9IHtcblx0XHQvLyBubyBtb2R1bGUuaWQgbmVlZGVkXG5cdFx0Ly8gbm8gbW9kdWxlLmxvYWRlZCBuZWVkZWRcblx0XHRleHBvcnRzOiB7fVxuXHR9O1xuXG5cdC8vIEV4ZWN1dGUgdGhlIG1vZHVsZSBmdW5jdGlvblxuXHRfX3dlYnBhY2tfbW9kdWxlc19fW21vZHVsZUlkXShtb2R1bGUsIG1vZHVsZS5leHBvcnRzLCBfX3dlYnBhY2tfcmVxdWlyZV9fKTtcblxuXHQvLyBSZXR1cm4gdGhlIGV4cG9ydHMgb2YgdGhlIG1vZHVsZVxuXHRyZXR1cm4gbW9kdWxlLmV4cG9ydHM7XG59XG5cbi8vIGV4cG9zZSB0aGUgbW9kdWxlcyBvYmplY3QgKF9fd2VicGFja19tb2R1bGVzX18pXG5fX3dlYnBhY2tfcmVxdWlyZV9fLm0gPSBfX3dlYnBhY2tfbW9kdWxlc19fO1xuXG4iLCJ2YXIgZGVmZXJyZWQgPSBbXTtcbl9fd2VicGFja19yZXF1aXJlX18uTyA9IChyZXN1bHQsIGNodW5rSWRzLCBmbiwgcHJpb3JpdHkpID0+IHtcblx0aWYoY2h1bmtJZHMpIHtcblx0XHRwcmlvcml0eSA9IHByaW9yaXR5IHx8IDA7XG5cdFx0Zm9yKHZhciBpID0gZGVmZXJyZWQubGVuZ3RoOyBpID4gMCAmJiBkZWZlcnJlZFtpIC0gMV1bMl0gPiBwcmlvcml0eTsgaS0tKSBkZWZlcnJlZFtpXSA9IGRlZmVycmVkW2kgLSAxXTtcblx0XHRkZWZlcnJlZFtpXSA9IFtjaHVua0lkcywgZm4sIHByaW9yaXR5XTtcblx0XHRyZXR1cm47XG5cdH1cblx0dmFyIG5vdEZ1bGZpbGxlZCA9IEluZmluaXR5O1xuXHRmb3IgKHZhciBpID0gMDsgaSA8IGRlZmVycmVkLmxlbmd0aDsgaSsrKSB7XG5cdFx0dmFyIFtjaHVua0lkcywgZm4sIHByaW9yaXR5XSA9IGRlZmVycmVkW2ldO1xuXHRcdHZhciBmdWxmaWxsZWQgPSB0cnVlO1xuXHRcdGZvciAodmFyIGogPSAwOyBqIDwgY2h1bmtJZHMubGVuZ3RoOyBqKyspIHtcblx0XHRcdGlmICgocHJpb3JpdHkgJiAxID09PSAwIHx8IG5vdEZ1bGZpbGxlZCA+PSBwcmlvcml0eSkgJiYgT2JqZWN0LmtleXMoX193ZWJwYWNrX3JlcXVpcmVfXy5PKS5ldmVyeSgoa2V5KSA9PiAoX193ZWJwYWNrX3JlcXVpcmVfXy5PW2tleV0oY2h1bmtJZHNbal0pKSkpIHtcblx0XHRcdFx0Y2h1bmtJZHMuc3BsaWNlKGotLSwgMSk7XG5cdFx0XHR9IGVsc2Uge1xuXHRcdFx0XHRmdWxmaWxsZWQgPSBmYWxzZTtcblx0XHRcdFx0aWYocHJpb3JpdHkgPCBub3RGdWxmaWxsZWQpIG5vdEZ1bGZpbGxlZCA9IHByaW9yaXR5O1xuXHRcdFx0fVxuXHRcdH1cblx0XHRpZihmdWxmaWxsZWQpIHtcblx0XHRcdGRlZmVycmVkLnNwbGljZShpLS0sIDEpXG5cdFx0XHR2YXIgciA9IGZuKCk7XG5cdFx0XHRpZiAociAhPT0gdW5kZWZpbmVkKSByZXN1bHQgPSByO1xuXHRcdH1cblx0fVxuXHRyZXR1cm4gcmVzdWx0O1xufTsiLCJfX3dlYnBhY2tfcmVxdWlyZV9fLm8gPSAob2JqLCBwcm9wKSA9PiAoT2JqZWN0LnByb3RvdHlwZS5oYXNPd25Qcm9wZXJ0eS5jYWxsKG9iaiwgcHJvcCkpIiwiLy8gZGVmaW5lIF9fZXNNb2R1bGUgb24gZXhwb3J0c1xuX193ZWJwYWNrX3JlcXVpcmVfXy5yID0gKGV4cG9ydHMpID0+IHtcblx0aWYodHlwZW9mIFN5bWJvbCAhPT0gJ3VuZGVmaW5lZCcgJiYgU3ltYm9sLnRvU3RyaW5nVGFnKSB7XG5cdFx0T2JqZWN0LmRlZmluZVByb3BlcnR5KGV4cG9ydHMsIFN5bWJvbC50b1N0cmluZ1RhZywgeyB2YWx1ZTogJ01vZHVsZScgfSk7XG5cdH1cblx0T2JqZWN0LmRlZmluZVByb3BlcnR5KGV4cG9ydHMsICdfX2VzTW9kdWxlJywgeyB2YWx1ZTogdHJ1ZSB9KTtcbn07IiwiLy8gbm8gYmFzZVVSSVxuXG4vLyBvYmplY3QgdG8gc3RvcmUgbG9hZGVkIGFuZCBsb2FkaW5nIGNodW5rc1xuLy8gdW5kZWZpbmVkID0gY2h1bmsgbm90IGxvYWRlZCwgbnVsbCA9IGNodW5rIHByZWxvYWRlZC9wcmVmZXRjaGVkXG4vLyBbcmVzb2x2ZSwgcmVqZWN0LCBQcm9taXNlXSA9IGNodW5rIGxvYWRpbmcsIDAgPSBjaHVuayBsb2FkZWRcbnZhciBpbnN0YWxsZWRDaHVua3MgPSB7XG5cdFwiL3B1YmxpYy9qcy9hcHBcIjogMCxcblx0XCJwdWJsaWMvY3NzL2VkaXRvci1zdHlsZVwiOiAwLFxuXHRcInB1YmxpYy9jc3MvbWFpblwiOiAwXG59O1xuXG4vLyBubyBjaHVuayBvbiBkZW1hbmQgbG9hZGluZ1xuXG4vLyBubyBwcmVmZXRjaGluZ1xuXG4vLyBubyBwcmVsb2FkZWRcblxuLy8gbm8gSE1SXG5cbi8vIG5vIEhNUiBtYW5pZmVzdFxuXG5fX3dlYnBhY2tfcmVxdWlyZV9fLk8uaiA9IChjaHVua0lkKSA9PiAoaW5zdGFsbGVkQ2h1bmtzW2NodW5rSWRdID09PSAwKTtcblxuLy8gaW5zdGFsbCBhIEpTT05QIGNhbGxiYWNrIGZvciBjaHVuayBsb2FkaW5nXG52YXIgd2VicGFja0pzb25wQ2FsbGJhY2sgPSAocGFyZW50Q2h1bmtMb2FkaW5nRnVuY3Rpb24sIGRhdGEpID0+IHtcblx0dmFyIFtjaHVua0lkcywgbW9yZU1vZHVsZXMsIHJ1bnRpbWVdID0gZGF0YTtcblx0Ly8gYWRkIFwibW9yZU1vZHVsZXNcIiB0byB0aGUgbW9kdWxlcyBvYmplY3QsXG5cdC8vIHRoZW4gZmxhZyBhbGwgXCJjaHVua0lkc1wiIGFzIGxvYWRlZCBhbmQgZmlyZSBjYWxsYmFja1xuXHR2YXIgbW9kdWxlSWQsIGNodW5rSWQsIGkgPSAwO1xuXHRpZihjaHVua0lkcy5zb21lKChpZCkgPT4gKGluc3RhbGxlZENodW5rc1tpZF0gIT09IDApKSkge1xuXHRcdGZvcihtb2R1bGVJZCBpbiBtb3JlTW9kdWxlcykge1xuXHRcdFx0aWYoX193ZWJwYWNrX3JlcXVpcmVfXy5vKG1vcmVNb2R1bGVzLCBtb2R1bGVJZCkpIHtcblx0XHRcdFx0X193ZWJwYWNrX3JlcXVpcmVfXy5tW21vZHVsZUlkXSA9IG1vcmVNb2R1bGVzW21vZHVsZUlkXTtcblx0XHRcdH1cblx0XHR9XG5cdFx0aWYocnVudGltZSkgdmFyIHJlc3VsdCA9IHJ1bnRpbWUoX193ZWJwYWNrX3JlcXVpcmVfXyk7XG5cdH1cblx0aWYocGFyZW50Q2h1bmtMb2FkaW5nRnVuY3Rpb24pIHBhcmVudENodW5rTG9hZGluZ0Z1bmN0aW9uKGRhdGEpO1xuXHRmb3IoO2kgPCBjaHVua0lkcy5sZW5ndGg7IGkrKykge1xuXHRcdGNodW5rSWQgPSBjaHVua0lkc1tpXTtcblx0XHRpZihfX3dlYnBhY2tfcmVxdWlyZV9fLm8oaW5zdGFsbGVkQ2h1bmtzLCBjaHVua0lkKSAmJiBpbnN0YWxsZWRDaHVua3NbY2h1bmtJZF0pIHtcblx0XHRcdGluc3RhbGxlZENodW5rc1tjaHVua0lkXVswXSgpO1xuXHRcdH1cblx0XHRpbnN0YWxsZWRDaHVua3NbY2h1bmtJZF0gPSAwO1xuXHR9XG5cdHJldHVybiBfX3dlYnBhY2tfcmVxdWlyZV9fLk8ocmVzdWx0KTtcbn1cblxudmFyIGNodW5rTG9hZGluZ0dsb2JhbCA9IHNlbGZbXCJ3ZWJwYWNrQ2h1bmt0YWlscHJlc3NcIl0gPSBzZWxmW1wid2VicGFja0NodW5rdGFpbHByZXNzXCJdIHx8IFtdO1xuY2h1bmtMb2FkaW5nR2xvYmFsLmZvckVhY2god2VicGFja0pzb25wQ2FsbGJhY2suYmluZChudWxsLCAwKSk7XG5jaHVua0xvYWRpbmdHbG9iYWwucHVzaCA9IHdlYnBhY2tKc29ucENhbGxiYWNrLmJpbmQobnVsbCwgY2h1bmtMb2FkaW5nR2xvYmFsLnB1c2guYmluZChjaHVua0xvYWRpbmdHbG9iYWwpKTsiLCIiLCIvLyBzdGFydHVwXG4vLyBMb2FkIGVudHJ5IG1vZHVsZSBhbmQgcmV0dXJuIGV4cG9ydHNcbi8vIFRoaXMgZW50cnkgbW9kdWxlIGRlcGVuZHMgb24gb3RoZXIgbG9hZGVkIGNodW5rcyBhbmQgZXhlY3V0aW9uIG5lZWQgdG8gYmUgZGVsYXllZFxuX193ZWJwYWNrX3JlcXVpcmVfXy5PKHVuZGVmaW5lZCwgW1wicHVibGljL2Nzcy9lZGl0b3Itc3R5bGVcIixcInB1YmxpYy9jc3MvbWFpblwiXSwgKCkgPT4gKF9fd2VicGFja19yZXF1aXJlX18oXCIuL3Jlc291cmNlcy9qcy9hcHAuanNcIikpKVxuX193ZWJwYWNrX3JlcXVpcmVfXy5PKHVuZGVmaW5lZCwgW1wicHVibGljL2Nzcy9lZGl0b3Itc3R5bGVcIixcInB1YmxpYy9jc3MvbWFpblwiXSwgKCkgPT4gKF9fd2VicGFja19yZXF1aXJlX18oXCIuL3Jlc291cmNlcy9zY3NzL21haW4uc2Nzc1wiKSkpXG52YXIgX193ZWJwYWNrX2V4cG9ydHNfXyA9IF9fd2VicGFja19yZXF1aXJlX18uTyh1bmRlZmluZWQsIFtcInB1YmxpYy9jc3MvZWRpdG9yLXN0eWxlXCIsXCJwdWJsaWMvY3NzL21haW5cIl0sICgpID0+IChfX3dlYnBhY2tfcmVxdWlyZV9fKFwiLi9yZXNvdXJjZXMvc2Nzcy9lZGl0b3Itc3R5bGUuc2Nzc1wiKSkpXG5fX3dlYnBhY2tfZXhwb3J0c19fID0gX193ZWJwYWNrX3JlcXVpcmVfXy5PKF9fd2VicGFja19leHBvcnRzX18pO1xuIiwiIl0sIm5hbWVzIjpbInRvZ2dsZU1lbnVIZWFkZXJSZXMiLCJidXR0b250b2dnbGUzIiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50QnlJZCIsImNsYXNzTGlzdCIsInRvZ2dsZSIsIndpbmRvdyIsImFkZEV2ZW50TGlzdGVuZXIiLCJtZW51IiwicXVlcnlTZWxlY3RvciIsInNjcm9sbFkiLCJhZGQiLCJyZW1vdmUiLCJUeHRSb3RhdGUiLCJlbCIsInRvUm90YXRlIiwicGVyaW9kIiwibG9vcE51bSIsInBhcnNlSW50IiwidHh0IiwiaXNEZWxldGluZyIsInRpY2siLCJwcm90b3R5cGUiLCJpIiwibGVuZ3RoIiwiZnVsbFRleHQiLCJzdWJzdHJpbmciLCJpbm5lckhUTUwiLCJ0aGF0IiwiZGVsdGEiLCJzZXRUaW1lb3V0Iiwib25sb2FkIiwiZWxlbWVudHMiLCJnZXRFbGVtZW50c0J5Q2xhc3NOYW1lIiwiZ2V0QXR0cmlidXRlIiwiSlNPTiIsInBhcnNlIiwidG9nZ2xlQ29udGFpbmVyIiwidG9nZ2xlQnV0dG9uMiIsImNvbG9yVHJhbnNpdGlvbiIsImhhbmRsZUNsaWNrIiwic3R5bGUiLCJkaXNwbGF5IiwiYW5pbWF0aW9uIiwib2Zmc2V0V2lkdGgiLCJldmVudCIsInN0b3BQcm9wYWdhdGlvbiIsImNvcHlUb0NsaXBib2FyZCIsIm5hdmlnYXRvciIsImNsaXBib2FyZCIsInRleHQiLCJ0ZXh0Q29udGVudCIsIndyaXRlVGV4dCIsInRoZW4iLCJtZXNzYWdlIiwiZXJyIiwiY29uc29sZSIsImVycm9yIiwibWVudVRvZ2dsZSIsInByaW1hcnlNZW51IiwicHJldmVudERlZmF1bHQiLCJjb250YWlucyIsImhlaWdodCIsInNjcm9sbEhlaWdodCIsInRvcCIsImxhc3RTY3JvbGxZIiwic2Nyb2xsRG93bkNvdW50IiwidGhyZXNob2xkIiwiaXNIaWRkZW4iLCJjdXJyZW50U2Nyb2xsWSIsImJveGVzIiwicXVlcnlTZWxlY3RvckFsbCIsImZvckVhY2giLCJib3htb2JpbGUiLCJyZWN0IiwiZ2V0Qm91bmRpbmdDbGllbnRSZWN0IiwiaW5uZXJIZWlnaHQiLCJlbGVtZW50IiwiYnV0dG9uc3N3aXRjaCIsImFjdGl2ZUJhY2tncm91bmQiLCJzd2l0Y2hlckNvbnRlbnRzIiwic2hvd0NvbnRlbnQiLCJpbmRleCIsImJ0biIsImJ1dHRvbldpZHRoIiwid2lkdGgiLCJjb25jYXQiLCJsZWZ0IiwiY29udGVudCIsImJ1dHRvbnN3aXRjaCIsImlzR3JlZW4iLCJ0b2dnbGVWaWV3IiwiY2lyY2xlIiwiZ3JlZW5EaXYiLCJyZWREaXYiLCJ2aXNpYmlsaXR5IiwicG9pbnRlckV2ZW50cyIsIm9wYWNpdHkiLCJidXR0b24iLCJjb250YWluZXIiLCJzcGFuIiwiY3JlYXRlRWxlbWVudCIsImlubmVyVGV4dCIsImFuZ2xlIiwidHJhbnNmb3JtIiwiYXBwZW5kQ2hpbGQiLCJyb3RhdGlvbiIsImRlbHRhWSIsImVsaW1pbmFyRXhwZXJpZW5jaWEiLCJleHBlcmllbmNpYXMiLCJjYXJnYXJFeHBlcmllbmNpYSIsInJlY2FyZ2FyRXhwZXJpZW5jaWEiLCJjb250ZW5pZG9DdXJyaWN1bHVtIiwiY2FqYSIsImJvdG9uZXNUb2dnbGVDViIsImNhamFzQ29udGVuaWRvQ1YiLCJhY3RpdmVCYWNrZ3JvdW5kY3YiLCJ0b2dnbGVDb250ZW50Q1YiLCJjb250ZW50Y3YiLCJidXR0b25XaWR0aGN2IiwiYm90b24iLCJkYXRhc2V0Iiwib3BjaW9uIiwic3dpdGNoZXJDb250YWluZXIiLCJvZmZzZXRUb3AiLCJsYXN0U2Nyb2xsVG9wIiwic2Nyb2xsVXBDb3VudCIsImN1cnJlbnRTY3JvbGwiXSwic291cmNlUm9vdCI6IiJ9