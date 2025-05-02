<template>
    <div id="app">
 
  
      <!-- Botón para mostrar el modal -->
      <button @click="showModal" class="btnbase_textoimagenen btn_negrotexto-imagen">Mostrar Modal</button>
  
      <!-- Modal -->
      <Modal v-if="isModalVisible" @role-selected="handleRoleSelection" />
  
      <!-- Contenido dinámico basado en la selección -->
      <div v-if="selectedRole === 'CTO'">
        <p>Contenido para CTO</p>
      </div>
      <div v-if="selectedRole === 'Recruitment'">
        <p>Contenido para Recruitment</p>
      </div>
      <div v-if="selectedRole === 'Visitor'">
        <p>Contenido para Visitor</p>
      </div>
    </div>
  </template>
  
  <script>
  import { ref } from 'vue';
  import Modal from './Modal.vue';  // Importar el componente Modal
  
  export default {
    components: {
      Modal,  // Registrar el componente Modal
    },
    setup() {
      const isModalVisible = ref(false);
      const selectedRole = ref(null);
  
      const showModal = () => {
        isModalVisible.value = true;  // Muestra el modal
      };
  
      const handleRoleSelection = (role) => {
        selectedRole.value = role;  // Establece el rol seleccionado
      };
  
      return {
        isModalVisible,
        selectedRole,
        showModal,
        handleRoleSelection,
      };
    },
  };
  </script>
  
  <style scoped>
  #app {
    font-family: Arial, sans-serif;
    text-align: center;
  }

  button {
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
  }
  </style>
  