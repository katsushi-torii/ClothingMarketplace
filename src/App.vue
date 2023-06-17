<template>
  <div>
    <headerSection />
    <home-page />
    <!-- <descriptionPage/> -->
    <footerSection />
  </div>
</template>

<script>
import FooterSection from './components/Footer.vue'
import HeaderSection from './components/Header.vue'
import homePage from './components/Page/homePage.vue'
// import descriptionPage from './components/Page/descriptionPage.vue';


export default {
  name: 'App',
  components:{
    HeaderSection,
    FooterSection,
    // descriptionPage,
    homePage
  }
}
</script>

<style>
@import url("../css/style.css");
</style>
