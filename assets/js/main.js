document.addEventListener('DOMContentLoaded', () => {
    const { createApp } = Vue;
    
    createApp({
        data() {
            return {
                selectedOption: 'curriculum'
            }
        },
        methods: {
            selectOption(option) {
                this.selectedOption = option;
            }
        }
    }).mount('#app'); // El mismo ID que usaste en tu HTML
});
