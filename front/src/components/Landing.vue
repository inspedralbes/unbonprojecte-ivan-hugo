<template>
  <div class="landing">
    <h1 v-if="!fetchComplete">Bienvenido a nuestra página de arboles</h1>
    <button v-if="!fetchComplete" @click="verListado">Ver listado</button>
    <h1 v-if="fetchComplete">El listado de arboles se ha cargado correctamente.</h1>
    <ul v-if="fetchComplete">
      <li v-for="arbol in arboles" :key="arbol.id">
        {{ arbol.nombre }}
      </li>
    </ul>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      arboles: [],
      fetchComplete: false,
    };
  },
  methods: {
    async verListado() {
      try {
        const response = await axios.get('http://127.0.0.1:8000/api/arboles');
        this.arboles = response.data;
        this.fetchComplete = true;
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
