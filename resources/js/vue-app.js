import { createApp } from 'vue';
import App from './components/App.vue';  // Importar el componente principal
import Modal from './components/Modal.vue'; // Importar el componente Modal

const app = createApp(App);

app.component('Modal', Modal);  // Registrar el componente Modal globalmente

app.mount('#app');  // Montar la aplicación Vue en el contenedor con id 'app'
