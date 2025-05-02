<template>
    <div v-if="isModalVisible" class="modal-overlay">
      <div class="modal-content">
        <h2>Selecciona tu rol</h2>
        <button class="btnbase_textoimagenen btn_negrotexto-imagen" @click="handleSelection('visitor')">Soy Visitor</button>
        <button class="btnbase_textoimagenen btn_negrotexto-imagen" @click="handleSelection('cto')">Soy CTO</button>
        <button class="btnbase_textoimagenen btn_negrotexto-imagen" @click="handleSelection('recruitment')">Soy Recruitment</button>
        <button @click="closeModal">Cerrar</button>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        isModalVisible: true, // Inicialmente el modal está visible
      };
    },
    methods: {
      handleSelection(role) {
        if (role === 'visitor') {
          // No hacer nada si selecciona Visitor
          console.log('Seleccionaste Visitor');
        } else if (role === 'cto') {
          // Realizar alguna acción para CTO
          console.log('Seleccionaste CTO');
          this.$emit('role-selected', 'CTO');
        } else if (role === 'recruitment') {
          // Realizar alguna acción para Recruitment
          console.log('Seleccionaste Recruitment');
          this.$emit('role-selected', 'Recruitment');
        }
        this.closeModal();
      },
      closeModal() {
        this.isModalVisible = false; // Cierra el modal
      },
    },
  };
  </script>
  
  <style scoped>
  .modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .modal-content {
    background-color: transparent;
    border: 1px solid #ccc;
    padding: 20px;
    border-radius: 5px;
    width: 700px;
    text-align: center;
  }
  
  button {
    margin: 10px;
    padding: 10px;
    cursor: pointer;
  }
  </style>
  