<template>
        <header-section />
        <section class="home-page">
            <div class="filter">
                <filter-comp v-model="filterList" @filter="filterCatalog"/>
            </div>
            <div class="container">
                <div class="catalog" v-if="this.filterList == 'empty'">
                    <product-card  v-for="product in productList" :key="product.productId" :product="product"/>
                </div>
                <div class="catalog" v-else>
                    <product-card  v-for="product in this.filterList" :key="product.productId" :product="product"/>

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

export default{
    name:'HomePage',
    components:{
        ProductCard,
        FilterComp,
        FooterSection,
        HeaderSection
    },
    props:{
        productList:[]
    },
    data(){
        return{
            filterList:'empty'
        }
    },
    methods:{
        async filterCatalog(e){
            try{
                let filterApi = `http://localhost:80/karigui/rest-api/rest/api/V1/products.php?name=${e.name}&size=${e.size}&color=${e.color}&gender=${e.gender}&price=${e.price}&type=${e.type}`;
                console.log(filterApi);               
                let response = await fetch(filterApi);
                this.filterList = await response.json();
            }catch(error){
                console.log(error)
            }
        },
        async show(e){
            console.log(e.price);
        }
    },
    created(){
        console.log(this.filterList)
    }
}
</script>
