<template>
  <div>
    <home-page />
    <!-- <descriptionPage/> -->
    <!-- <addRoom/> -->
  </div>
</template>

<script>
import homePage from './components/Page/homePage.vue'
// import descriptionPage from './components/Page/descriptionPage.vue';
// import addRoom from './components/Page/addRoom.vue'


export default {
  name: 'App',
  components:{
    homePage
    // descriptionPage,
    // addRoom
  },
  data(){
    return{
      productsApi:'http://localhost:80/karigui/ClothingMarketplace/rest/api/V1/products.php',
      productList:[]
    }
  }
}
</script>

<style>
@import url("./css/style.css");
</style>
