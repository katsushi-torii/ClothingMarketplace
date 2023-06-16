<template>
  <div>
    <headerSection />
    <home-page />
    <footerSection />
  </div>
</template>

<script>
import FooterSection from './components/Footer.vue'
import HeaderSection from './components/Header.vue'
import homePage from './components/Page/homePage.vue'

export default {
  name: 'App',
  components:{
    HeaderSection,
    FooterSection,
    homePage
  }
}
</script>

<style>
@import url("../style.css");
</style>
