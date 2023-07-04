<template>
  <div>
    <router-view :productList="this.productList"/>
    <!-- from router.js -->
  </div>
</template>

<script>

export default {
  name: 'App',
  data(){
    return{
      productApi:'http://localhost:80/karigui/rest-api/rest/api/V1/products.php',
      productList:[]
    }
  },
  methods:{
    async getProducts(){
      try{
        let result = await fetch(this.productApi);
        this.productList = await result.json();
        // console.log(this.productList);
      }catch(error){
        console.log(error);
      }
    }
  },
  created(){
    this.getProducts();
  }
}
</script>

<style>
@import url("../css/style.css");
</style>
