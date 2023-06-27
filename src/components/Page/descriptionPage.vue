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
    props:{
        descriptionData:{}
    }

}

</script>