<template>
    <article>
        <Message v-for="message in chatList" :key="message" :message="message" :descriptionData="this.descriptionData"/>
        <button @click="selectChat" ref="selectButton">Reply</button>
    </article>
</template>

<script>

let loginUser = 240; //chage to session later

import Message from './Message.vue';
export default{
    name:'ChatSection',
    components:{
        Message
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
            if(this.descriptionData.userId != loginUser){
                this.$refs.selectButton.style.display = "none";
            }
        }
    },
    mounted(){
        this.hideButton();
    }
}
</script>