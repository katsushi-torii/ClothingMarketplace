<template>
    <HeaderSection/>
    <section class="user-page">
        <figure class="user-profile">
            <img src="
            https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=200" alt="profPic">
            <figcaption>
                <h2>UserName</h2>
                <aside>
                    Brief self-introduction:
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sequi fuga veniam cupiditate blanditiis
                    debitis quam veritatis repudiandae ipsa maiores, assumenda non, vero quaerat aperiam alias tenetur porro
                    dolorum laboriosam. Culpa!
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
                    <strong>999</strong>
                    <p>Items</p>
                </aside>
                <aside>
                    <strong>222</strong>
                    <p>Transactions</p>
                </aside>
            </article>
            <div class="catalog">
                <ProductCard />
                <ProductCard />
                <ProductCard />
                <ProductCard />
                <ProductCard />
                <ProductCard />
                <ProductCard />
                <ProductCard />
                <ProductCard />
                <ProductCard />
                <ProductCard />
                <ProductCard />
            </div>
        </section>
    </section>
    <FooterSection/>
</template>

<script>
import ProductCard from '../ProductCard.vue';
import FooterSection from '../Footer.vue';
import HeaderSection from '../Header.vue';

export default {
    name: 'UserPage',
    components: {
        ProductCard,
        FooterSection,
        HeaderSection
    }
}
</script>
