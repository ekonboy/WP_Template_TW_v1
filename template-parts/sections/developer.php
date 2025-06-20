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


 /* Estilos innovadores */
.tabs-nav {
    display: flex;
    justify-content: flex-start;
    gap: 0.5rem;
    margin-bottom: 3rem;
    position: relative;
    flex-direction: row;
}

/* .tab-btn {
  background: none;
  border: 0;
  padding: 1rem 2rem;
  font-size: 1.2rem;
  font-weight: 600;
  color: #5e5e5e;
  cursor: pointer;
  transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1);
  position: relative;
}

.tab-btn::after {
  content: '';
  position: absolute;
  bottom: -5px;
  left: 50%;
  transform: translateX(-50%);
  width: 0;
  height: 3px;
  background: #2A2A2A;
  transition: all 0.3s ease;
} */



.tab-btn.active {
  color: #2A2A2A;
  transform: scale(1.1);
}

.tab-btn.active::after {
  width: 100%;
  background-color: #FF4D4D;
}

.grid-parent {
  display: grid;
  grid-template-columns: 318px 1fr 1fr; /* Ancho fijo para la primera columna */
  grid-template-rows: repeat(2, 310px); /* 638px total (319*2) + 18px gap = 656px */
  gap: 18px;
  height: 656px; /* Ajuste preciso para contener las medidas */
}
.grid-item {
  background: #fff;
  border-radius: 20px;
  box-shadow: 0 15px 35px rgba(0,0,0,0.1);
  transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1);
  overflow: hidden;
  position: relative;
}

/* .hover-3d:hover {
  transform: translateY(-10px) rotateX(5deg) rotateY(5deg);
  box-shadow: 0 25px 50px rgba(0,0,0,0.15);
} */

/* Posiciones específicas del grid */
/* .item1 { grid-area: 1 / 1 / 2 / 2; }
.item2 { grid-area: 1 / 1 / 3 / 2; }
.item3 { grid-area: 1 / 2 / 2 / 3; }
.item4 { grid-area: 1 / 3 / 2 / 4; }
.item5 { grid-area: 2 / 2 / 3 / 3; }
.item6 { grid-area: 2 / 3 / 3 / 4; } */

.item1 { 
  grid-area: 1 / 1 / 3 / 2;
  height: 638px; /* Altura exacta */
  width: 318px; /* Ancho exacto */
}
.item2, .item3, .item4, .item5 {
  height: 311px; /* Mitad de la altura principal */
  width: 100%; /* Ocupan el ancho restante */
}

/* Efecto de contenido hover */
.grid-item::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(45deg, rgba(255,77,77,0.1), rgba(0,0,0,0.05));
  opacity: 0;
  transition: opacity 0.3s ease;
}

/* .grid-item:hover::before {
  opacity: 1;
} */


.tab-content {
  display: none;
}

.tab-content.active {
  display: block;
}



/* Responsive Design */
@media (max-width: 768px) {

  .btnbase_textoimagenen {border-radius: 50px;
    text-align: center;
    max-width: 171px;
    padding: 7px 17px;
    margin: 5px 16px;}

  .tab-content {
    padding: 16px;
}
  .item1 {
    width: 334px;
}
  .tabs-nav {
    flex-wrap: wrap;
        flex-wrap: wrap;
        /* gap: 1rem; */
        display: flex;
        flex-direction: row;
        align-items: center;
        align-content: center;
        justify-content: flex-start;
        width: 100%;
    }




  .grid-parent {
    grid-template-columns: 1fr;
    grid-template-rows: auto;
  }
  
  .grid-item {
    grid-area: auto !important;
    height: 318px;
  }
}

.cont2ainer {
  width: 100%;
  max-width: none;
  margin: 0 auto;
  padding: 0;
}
</style>



<section class="developer block <?php echo esc_attr($content_onlymobile == 1 ? 'md:hidden' : ''); ?> <?php echo esc_attr('section-' . $count); ?>" style="display: flex;flex-direction: column;flex-wrap: nowrap;align-content: space-between;justify-content: center;max-width: <?php echo esc_attr($ancho_total_texto); ?>px;margin:0 auto;background-color: <?php echo esc_attr($background_color); ?>">
  <div class="cont2ainer">


    <?php if ($content): ?>
      <?php echo $content = get_sub_field('content');?>



<!-- aqui los tabs -->

  


    <?php endif; ?>
  </div>

  <script>

      // Interacción moderna con los tabs
document.querySelectorAll('.tab-btn').forEach(button => {
  button.addEventListener('click', () => {
    // Remover clase active de todos los elementos
    document.querySelectorAll('.tab-btn, .tab-content').forEach(el => {
      el.classList.remove('active');
    });
    
    // Añadir clase active al elemento clickado
    button.classList.add('active');
    document.querySelector(`.tab-content[data-tab="${button.dataset.tab}"]`).classList.add('active');
    
    // Animación suave de scroll
    window.scrollTo({
      top: button.getBoundingClientRect().top + window.scrollY - 50,
      behavior: 'smooth'
    });
  });
});
  </script>

</section>
 
