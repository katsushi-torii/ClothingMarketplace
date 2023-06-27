<template>
  <div>
    <router-view :descriptionData="this.descriptionData"　:productList="this.productList"/>
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
      descriptionData:{},
      
      productApi:'http://localhost:80/karigui/rest-api/rest/api/V1/products.php',
      productList:[]
    }
  },
  methods:{
    async getProducts(){
      try{
        let result = await fetch(this.productApi);
        this.productList = await result.json();
        console.log(this.productList);
      }catch(error){
        console.log(error);
      }
    },
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
    this.getProducts();
    this.getDescriptionData();
  }
}
</script>

<style>
@import url("./css/style.css");
</style>
