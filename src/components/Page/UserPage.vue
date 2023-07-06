<template>
    <HeaderSection />
    <section class="user-page">
        <figure class="user-profile">
            <img :src="userData.userAvatar" :alt="userData.userName">
            <figcaption>
                <h2>{{ userData.userName }}</h2>
                <aside>
                    Brief self-introduction:<br />
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis eum harum consectetur ad earum ipsa est
                    in maiores? Distinctio nulla repellendus quidem quae facilis fugit nostrum dolorem odit asperiores?
                    Fugit?
                </aside>
            </figcaption>
            <article>
                <p>#TrustedSeller</p>
                <p>#SpeedyShipper</p>
                <p>#QuickResponder</p>
                <p>#Reliable</p>
                <p>#xxxxxxxxx</p>
                <p>#xxxxxxxxx</p>
                <p>#xxxxxxxxx</p>
            </article>
        </figure>
        <section class="user-contents">
            <article class="user-info">
                <aside>
                    <strong>4.6 ★★★★★</strong>
                    <p>Reviews</p>
                </aside>
                <aside>
                    <strong>{{ localProductList.length }}</strong>
                    <p>Items</p>
                </aside>
                <aside>
                    <strong>222</strong>
                    <p>Transactions</p>
                </aside>
            </article>
            <div class="catalog">
                <product-card v-for="product in localProductList" :key="product.productId" :product="product" />
            </div>
        </section>
    </section>
    <FooterSection />
</template>

<script>
let url = new URL(window.location.href);
let params = url.searchParams;
let userId = params.get('userId');

import ProductCard from '../ProductCard.vue';
import FooterSection from '../Footer.vue';
import HeaderSection from '../Header.vue';

export default {
    name: 'UserPage',
    components: {
        ProductCard,
        FooterSection,
        HeaderSection
    },
    data() {
        return {
            localProductList: [],
            userApi: `http://localhost:80/karigui/rest-api/rest/api/V1/user.php?userId=${userId}`,
            productUserApi: `http://localhost:80/karigui/rest-api/rest/api/V1/productsUser.php`,
            userData: {},
            productList: []
        }
    },
    props: {
        // productList: []
    },
    methods: {
        async getUserData() {
            try {
                let result = await fetch(this.userApi);
                this.userData = await result.json();
            } catch (error) {
                console.log(error);
            }
        },
        async getProductUserData() {
            try {
                let result = await fetch(this.productUserApi);
                this.productList = await result.json();
                this.localProductList = this.productList.filter(
                    product => product.userId == userId);
            } catch (error) {
                console.log(error);
            }
        }
    },
    created() {
        this.getUserData();
    },
    beforeUpdate() {
        this.getProductUserData();
    },
    mounted() {
        if (localStorage.getItem('reloaded')) {
            // The page was just reloaded. Clear the value from local storage
            // so that it will reload the next time this page is visited.
            localStorage.removeItem('reloaded');
        } else {
            // Set a flag so that we know not to reload the page twice.
            localStorage.setItem('reloaded', '1');
            location.reload();
        }
    }
}
</script>