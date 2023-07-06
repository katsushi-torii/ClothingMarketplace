<template>
    <figure class="product-card">
        <router-link :to="`/product?productId=${product.productId}`">
            
            <img :src="product.image" :alt="product.productName">
            <figcaption>
                <p>{{ product.productName }}</p>
                <span>${{ product.price }}</span>
            </figcaption>

        </router-link>
    </figure>
</template>

<script>
export default {
    name:'ProductCard',
    props:{
        product:{}
    }
}
</script>
