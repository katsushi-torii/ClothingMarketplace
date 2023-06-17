<template>
    <section class="home-page">
        <div class="filter">
            <filter-comp />
        </div>
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
    </section>
</template>

<script>
import ProductCard from '../ProductCard.vue';
import FilterComp from '../filter/FilterComp.vue';

export default{
    name:'HomePage',
    components:{
        ProductCard,
        FilterComp
    }
}
</script>
