<template>  
    <figure class="message" ref='check'>
        <img :src=" userData.userAvatar " alt="">
        <figcaption>
            {{ message.message }}
        </figcaption>
    </figure>
</template>

<script>

export default{
    name:'SingleMessage',
    props:{
        message:{},
        descriptionData:{}
    },
    data() {
        return {
            userApi: `http://localhost:80/karigui/rest-api/rest/api/V1/user.php?userId=${this.message.senderId}`,
            userData: {}
        }
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
        changeStyle(){
            const senderId = this.message.senderId;
            const ownerId = this.descriptionData.userId;
            const refs = this.$refs.check
            if(senderId == ownerId){
                refs.style.flexDirection = "row-reverse";
                refs.children[1].style.backgroundColor = "rgb(217,217,218)";
            }
        }
    },
    created() {
        this.getUserData();
    },
    mounted(){
        this.changeStyle();
    }
}

</script>