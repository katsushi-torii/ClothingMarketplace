<template>
    <section class="desRight">
        <h2>Title of the clothing including brand title title title</h2>
        <section>
            <article>
                <section>
                    <h3>$100</h3>
                    <span>
                        <h4>Shoes,</h4>
                        <h4>Casual Shoes</h4>
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
            <p></p>
        </section>
        <ul>
            <li>Size: <strong>27</strong></li>
            <li>Color: <strong>Brown</strong></li>
            <li>Gender: <strong>Men</strong></li>
        </ul>
        <blockquote>
            <figure>
                <figcaption><h3>Sold by: Einstein</h3></figcaption>
                <img src="https://i.pinimg.com/736x/3f/d0/c2/3fd0c2a7864af5fcb9cc86738dd4a0ff.jpg" alt="">
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

import $ from 'jquery';
export default{
    name: "DescriptionRight",
    components: { Chat },
    mounted: function(){
        const brandName = "nike";
        const size = 25;
        function change(){
            $('p').text(`I bought this at ${brandName} shop 2 years ago. However, I haven't used that much, so the condition of this product is pretty good. My size is ${size}, so it fit the official size.`);
        }
        change();
    }
}
</script>