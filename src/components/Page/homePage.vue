<template>
    <header-section />
    <section class="home-page">
    <button @click="test">Test</button>
        <div class="filter">
            <filter-comp v-model="filterList" @filter="filterCatalog"/>
        </div>
        <div class="container">
            <div class="catalog" v-if="this.filterList == 'empty'">
                <product-card  v-for="product in productList[this.currentPage]" :key="product.productId" :product="product"/>
            </div>
            <div class="catalog" v-else>
                <product-card  v-for="product in this.filterList[this.currentPage]" :key="product.productId" :product="product"/>
            </div>
            <div class="btnPage" v-if="this.filterList == 'empty'">
                <BtnPage @pageUpdate="update" v-for="( product , index ) in productList" :key="product" :number="index+1"/>
            </div>
            <div class="btnPage" v-else>
                <BtnPage @pageUpdate="update" v-for="( product , index ) in filterList" :key="product" :number="index+1"/>
            </div>
            <footer-section />
        </div>
    </section>
</template>

<script>
import ProductCard from '../ProductCard.vue';
import FilterComp from '../filter/FilterComp.vue';
import FooterSection from '../Footer.vue';
import HeaderSection from '../Header.vue';
import BtnPage from '../Button.vue';

export default{
    name:'HomePage',
    components:{
        ProductCard,
        FilterComp,
        FooterSection,
        HeaderSection,
        BtnPage
    },
    props:{
        productList:[]
    },
    data(){
        return{
            filterList: 'empty',
            currentPage: 1
        }
    },
    methods:{
        async filterCatalog(e){
            try{
                this.currentPage = 1;
                let filterApi = `http://localhost:80/karigui/rest-api/rest/api/V1/products.php?name=${e.name}&size=${e.size}&color=${e.color}&gender=${e.gender}&price=${e.price}&type=${e.type}`;
                let response = await fetch(filterApi);
                let products = await response.json();
                let count = 1;
                this.filterList = [];
                for(let i = 0; i < products.length; i+=25) {
                let tempArray = []
                for (let j = i; j < (i + 25); j++) {
                    if ( j > products.length-1 ) {
                    break;
                    }
                    tempArray.push(products[j]);
                }
                this.filterList[count] = tempArray;
                count++;
                }
                console.log(this.filterList)
            }catch(error){
                console.log(error)
            }
        },
        show(){
            this.filterList = this.productList;
        },
        test(){
            console.log(this.productList);
        },
        update(number){
            this.currentPage = number
        }
    }
}
</script>
