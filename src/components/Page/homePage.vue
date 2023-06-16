<template>
    <section class="home-page">
        <div class="filter">
            <filter-comp />
        </div>
        <div class="catalog">
            <product-card />
        </div>
    </section>
</template>

<script>
import ProductCard from '../ProductCard.vue';
import FilterComp from '../Filter.vue';

export default{
    name:'HomePage',
    components:{
        ProductCard,
        FilterComp
    }
}
</script>
