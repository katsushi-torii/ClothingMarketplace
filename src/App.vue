<template>
  <div>
    <headerSection />
    <!-- <home-page /> -->
    <!-- <descriptionPage/> -->
    <addRoom/>
    <footerSection />
  </div>
</template>

<script>
import FooterSection from './components/Footer.vue'
import HeaderSection from './components/Header.vue'
// import homePage from './components/Page/homePage.vue'
// import descriptionPage from './components/Page/descriptionPage.vue';
import addRoom from './components/Page/addRoom.vue'


export default {
  name: 'App',
  components:{
    HeaderSection,
    FooterSection,
    // descriptionPage,
    addRoom
    // homePage
  }
}
</script>

<style>
@import url("../css/style.css");
</style>
