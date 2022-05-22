<template>
  <div id="nav">
      <router-link to="/login">Login</router-link> |
      <router-link to="/register">Register</router-link> | 
      <router-link to="/">ViewProfile</router-link>
  </div>
  <router-view />
</template>

<script>
//import HelloWorld from './components/HelloWorld.vue';
// import LoginAuth from './components/auth/LoginAuth.vue';
// import RegisterAuth from './components/auth/RegisterAuth.vue';
// import ViewProfile from './components/ViewProfile.vue';

// export default {
//   name: 'App',
//   components: {
//     //HelloWorld,
//     LoginAuth,
//     RegisterAuth,
//     ViewProfile,
//   },

  
// }
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
