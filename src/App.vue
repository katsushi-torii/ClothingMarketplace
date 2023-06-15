<template>
  <div>
    <headerSection />
    <footerSection />
  </div>
</template>

<script>
import FooterSection from './components/Footer.vue'
import HeaderSection from './components/Header.vue'

export default {
  name: 'App',
  components:{
    HeaderSection,
    FooterSection
  }
}
</script>

<style>
@import url("../style.css");
</style>
