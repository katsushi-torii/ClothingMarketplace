<template>
    <HeaderSection/>
    <main class="desBody">
        <section class="description">
            <DescriptionLeft :descriptionData="this.descriptionData"/>
            <DescriptionRight :descriptionData="this.descriptionData"/>
        </section>
    </main>
    <FooterSection/>
</template>

<script>

let url = new URL(window.location.href);
let params = url.searchParams;
let productId = params.get('productId');

import DescriptionLeft from '../description/DescriptionLeft.vue';
import DescriptionRight from '../description/DescriptionRight.vue';
import FooterSection from '../Footer.vue';
import HeaderSection from '../Header.vue';

export default{
    name:'DescriptionPage',
    components:{
    DescriptionLeft,
    DescriptionRight,
    FooterSection,
    HeaderSection
    },
    data(){
        return{
        descriptionApi:`http://localhost:80/karigui/rest-api/rest/api/V1/description.php?productId=${productId}`,
        descriptionData:{}
        }
    },
    methods:{
        async getDescriptionData(){
        try{
            let result = await fetch(this.descriptionApi);
            this.descriptionData = await result.json();
        }catch(error){
            console.log(error);
        }
        }
    },
    created(){
        this.getDescriptionData();
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