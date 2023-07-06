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
      productList:[],
      filter:{
        color: '',
        size: '',
        name: '',
        gender: '',
        price: '',
        type: ''
      }
    }
  },
  methods:{
    async getProducts(){
      try{
        let result = await fetch(this.productApi);
        let products = await result.json();
        let count = 1;
        console.log(products.length)
        for(let i = 0; i < products.length; i+=25) {
          let tempArray = []
          for (let j = i; j < (i + 25); j++) {
            // this.productList[count] = []
            if ( j > products.length-1 ) {
              break;
            }
            tempArray.push(products[j]);
          }
          this.productList[count] = tempArray;
          count++;
        }   
        console.log(this.productList);
      }catch(error){
        console.log(error);
      }
    },
    async getProductsFilter(){
      try{
        let result = await fetch(`${this.productApi}?name=${this.filter.name}&size=${this.filter.size}&color=${this.filter.color}&gender=${this.filter.gender}&price=${this.filter.price}&type=${this.filter.type}`);
        this.productList = await result.json();
        console.log(this.filter);
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
@import url("./css/style.css");
</style>
