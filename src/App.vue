<template>
  <div>
    <router-view :descriptionData="this.descriptionData"/>
    <!-- from router.js -->
  </div>
</template>

<script>
let url = new URL(window.location.href);
let params = url.searchParams;
let productId = params.get('productId');

export default {
  name: 'App',
  data(){
    return{
      descriptionApi:`http://localhost:80/karigui/rest/api/V1/description.php?productId=${productId}`,
      descriptionData:{}
    }
  },
  methods:{
    async getDescriptionData(){
      try{
        let result = await fetch(this.descriptionApi);
        this.descriptionData = await result.json();
      }catch(error){
        console.log(error);
      }
    }
  },
  created(){
    this.getDescriptionData();
  }
}
</script>

<style>
@import url("../css/style.css");
</style>
