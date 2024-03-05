<template>
  <div class="landing">
    <h1>Bienvenido a nuestra página de arboles</h1>
    <button @click="verListado">Ver listado</button>
</div>
    <div v-if="arboles">
      <ul>
        <li v-for="arbol in arboles" :key="arbol.id">
          {{ arbol.nombre }}
        </li>
      </ul>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  methods: {
    async verListado() {
      try {
        const response = await axios.get('./arboles.json');
        this.arboles = response.data;
        console.log(this.arboles);
      } catch (error) {
        console.error('Error:', error);
      }
    }
  }
}
</script>

<style scoped>
.landing {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100vh;
  text-align: center;
}

button {
  margin-top: 20px;
  padding: 10px 20px;
}
</style>
