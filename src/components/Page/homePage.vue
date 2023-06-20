<template>
        <header-section />
        <section class="home-page">
            <div class="filter">
                <filter-comp />
            </div>
            <div class="container">
                <div class="catalog">
                    <product-card />
                    <product-card />
                    <product-card />
                    <product-card />
                    <product-card />
                    <product-card />
                    <product-card />
                    <product-card />
                    <product-card />
                    <product-card />
                    <product-card />
                    <product-card />
                    <product-card />
                    <product-card />
                    <product-card />
                    <product-card />
                    <product-card />
                    <product-card />
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
    }
}
</script>
