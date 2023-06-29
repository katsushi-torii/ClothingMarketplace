<template>
        <header-section />
        <section class="home-page">
            <div class="filter">
                <filter-comp />
            </div>
            <div class="container">
                <div class="catalog">
                    <product-card v-for="product in productList" :key="product.productId" :product="product"/>
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
        
    }
}
</script>
