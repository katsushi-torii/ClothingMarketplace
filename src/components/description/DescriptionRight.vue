<template>
    <section class="desRight">
        <h2>{{descriptionData.productName}}</h2>
        <section>
            <article>
                <section>
                    <h3>${{descriptionData.price}}</h3>
                    <span>
                        <h4>{{descriptionData.category}},</h4>
                        <h4>{{descriptionData.type}}</h4>
                    </span>
                </section>
                <section>
                    <button class="buyDes">
                        Buy
                    </button>
                    <label for="wishlist">
                        <i class="fa-regular fa-heart"></i>
                        <i class="fa-solid fa-heart"></i>
                    </label>
                    <button hidden class="like" id="wishlist" onclick="test()"></button>
                </section>
            </article>
            <p>I bought this at online shop 2 years ago. However, I haven't used that much, so the condition of this product is pretty good. My size is {{ descriptionData.size }}, so it fit the official size.</p>
        </section>
        <ul>
            <li>Size: <strong>{{descriptionData.size}}</strong></li>
            <li>Color: <strong>{{descriptionData.baseColor}}</strong></li>
            <li>Gender: <strong>{{descriptionData.gender}}</strong></li>
        </ul>
        <blockquote>
            <figure>
                <figcaption><h3>Sold by: {{descriptionData.userName}}</h3></figcaption>
                <router-link :to="`/profile?userId=${descriptionData.userId}`">
                    <img :src="descriptionData.userAvatar" alt="">
                </router-link>
            </figure>
            <section class="comments">
                <Chat/>
            </section>
            <form action="#">
                <textarea name="comment" id="comment" placeholder="Write your comment"></textarea>
                <button type="submit">Submit</button>
            </form>
        </blockquote>
    </section>
</template>

<script>

import Chat from './Chat.vue';

export default{
    name: "DescriptionRight",
    components: { Chat },
    props:{
        descriptionData:{}
    }
}
</script>