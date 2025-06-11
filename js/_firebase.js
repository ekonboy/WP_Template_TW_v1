// For Firebase JS SDK v7.20.0 and later, measurementId is optional
import firebase from 'firebase/app';
import 'firebase/messaging'; // Importa Firebase Messaging si necesitas notificaciones push

// Tu configuración de Firebase
const firebaseConfig = {
    apiKey: "AIzaSyD7WTUiGin067mqFJM_EJO-7yTRH6ZCD0E",
    authDomain: "notifications-ip-cv25.firebaseapp.com",
    projectId: "notifications-ip-cv25",
    storageBucket: "notifications-ip-cv25.firebasestorage.app",
    messagingSenderId: "337313849688",
    appId: "1:337313849688:web:f6927a870749d9bc03852d",
    measurementId: "G-ZE080PW7JW"
  };

// Inicializa Firebase
if (!firebase.apps.length) {
  firebase.initializeApp(firebaseConfig);
} else {
  firebase.app(); // Si ya existe, usa la app existente
}

// Exporta Firebase para que puedas usarlo en otras partes de tu app
export const messaging = firebase.messaging();
