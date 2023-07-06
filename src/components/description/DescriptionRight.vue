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
                    <button hidden class="like" id="wishlist"></button>
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
                <Chat v-for="chatList in chatData" :key="chatList[0]" :chatList="chatList" :descriptionData="this.descriptionData" @selectedChatId="getChatId"/>
            </section>
            <form v-on:submit.prevent="postMessage" class="commentSection">
                <textarea name="comment" id="comment" placeholder="Write your comment" v-model.lazy="messageObj.message" required></textarea>
                <button type="submit">Submit</button>
            </form>
        </blockquote>
    </section>
</template>

<script>
import VueCookies from 'vue-cookies';
import Chat from './Chat.vue';

let url = new URL(window.location.href);
let params = url.searchParams;
let productId = params.get('productId');

export default{
    name: "DescriptionRight",
    components: { Chat },
    data(){
        return{
            chatApi:`http://localhost:80/karigui/rest-api/rest/api/V1/chat.php?productId=${productId}`,
            chatData:[],
            selectedChatId: 0,

            messageObj:{
                message: "",
                senderId: "",
                productId: "",
                chatId: 0
            },
            
            logged: false,
            userName: "",
            userId:null,
            loginUser:""
        }
    },
    props:{
        descriptionData:{}
    },
    methods:{
        async getChatData(){
            try{
                let result = await fetch(this.chatApi);
                this.chatData = await result.json();
            }catch(error){
                console.log(error);

            }
        },
        getChatId(chatId){
            this.selectedChatId = chatId;
            document.getElementsByClassName("commentSection")[0].style.display = "flex";
        },
        async postMessage(){
            this.messageObj.productId = productId;
            this.messageObj.senderId = this.loginUser;
            if(this.messageObj.senderId == this.descriptionData.userId){
            //if sender is product owner
                this.messageObj.chatId = this.selectedChatId;
            }else{
                for(let i=0; i < this.chatData.length; i++){
                    if(this.messageObj.senderId == (this.chatData[i])[0].senderId){
                    //if sender already is an existed questioner
                        this.messageObj.chatId = (this.chatData[i])[0].chatId;
                    }
                     
                }
            }
            try {
                console.log(this.messageObj);
                await fetch(
                this.chatApi,
                {
                    method: "POST",
                    body: JSON.stringify(this.messageObj)
                }
                ).then((response) => response.text()
                ).then((data) => {
                console.log(data);
                });
            } catch(error) {
                console.log(error);
            }
            // location.reload();
        },
        hideComment(){
            console.log(this.descriptionData.userId);
            if(this.descriptionData.userId == this.loginUser){
                document.getElementsByClassName("commentSection")[0].style.display = "none";
            }
        }
    },
    mounted(){
        this.hideComment();
    },
    created() {
        this.getChatData();
        if (VueCookies.isKey("user")) {
            this.userId = VueCookies.get("user").userId;
            this.logged = true;
            this.loginUser = VueCookies.get("user").userId;
        } else {
            this.logged = false;

        }
    }
}
</script>