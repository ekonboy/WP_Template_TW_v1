// Navigation toggle
window.addEventListener('load', function () {
      let main_navigation = document.querySelector('#primary-menu');
      document.querySelector('#primary-menu-toggle').addEventListener('click', function (e) {
            e.preventDefault();
            main_navigation.classList.toggle('hidden');
      });
});

// function toggle() {
//       const button = document.getElementById('toggle-button');
//       button.classList.toggle('translate-x-6'); 
//   }
