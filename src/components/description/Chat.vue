<template>
    <article>
        <Message v-for="message in chatList" :key="message" :message="message" :descriptionData="this.descriptionData"/>
        <button @click="selectChat" class="replyButton">Reply</button>
    </article>
</template>

<script>
import VueCookies from 'vue-cookies';
import Message from './Message.vue';
export default{
    name:'ChatSection',
    components:{
        Message
    },
    data() {
        return {
            logged: false,
            userName: "",
            userId:null,
            loginUser:""
        }
    },
    props:{
        chatList:{},
        descriptionData:{}
    },
    methods:{
        selectChat(){
            this.$emit('selectedChatId' , this.chatList[0].chatId);
        },
        hideButton(){
            console.log(this.descriptionData.userId)
            if(this.descriptionData.userId != this.loginUser){
                document.getElementsByClassName("replyButton")[0].style.display = "none";
            }
        }
    },
    mounted(){
        this.hideButton();
    },
    created(){
        if(VueCookies.isKey("user")) {
            this.userId = VueCookies.get("user").userId;
            this.logged = true;
            this.loginUser = VueCookies.get("user").userId;
        } else {
            this.logged = false;

        }
    }
}
</script>