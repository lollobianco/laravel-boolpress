<template>
  <div>

    <NavBar/>

    <router-view></router-view>
    
  </div>
</template>

<script>
import NavBar from '../components/NavBar.vue';

export default {
  name: "App",
  components: {
    NavBar,
  },
  data(){
    return{

     

    }
  },
  mounted(){

    

  },
  methods: {

    

  }
};
</script>

<style>

@import 'https://fonts.googleapis.com/css2?family=Nunito&display=swap';
/* @import 'variables'; */
@import '~bootstrap/dist/css/bootstrap.min.css';

*{
  font-family: 'Nunito', sans-serif;
}

</style>