<template>
  <div>
    <home-page />
    <!-- <descriptionPage/> -->
    <!-- <addRoom/> -->
  </div>
</template>

<script>
// import FooterSection from './components/Footer.vue'
// import HeaderSection from './components/Header.vue'
import homePage from './components/Page/homePage.vue'
// import descriptionPage from './components/Page/descriptionPage.vue';
// import addRoom from './components/Page/addRoom.vue'


export default {
  name: 'App',
  components:{
    // HeaderSection,
    // FooterSection,
    homePage
    // descriptionPage,
    // addRoom
  }
}
</script>

<style>
@import url("../css/style.css");
</style>
