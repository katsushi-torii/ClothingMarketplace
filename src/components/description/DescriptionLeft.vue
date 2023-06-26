<template>
    <section class="desLeft">
        <figure class="dSlideMain">
            <img :src="descriptionData.image" alt="" id="mainPic">
        </figure>
        <figure class="dSlideSub">
            <button class="frs">
              <img :src="descriptionData.image" alt="">
            </button>
              <button class="sec">
            <img class="secPic" :src="descriptionData.image" alt="">
            </button>
            <button class="thd">
              <img class="thdPic" :src="descriptionData.image" alt="">
            </button>
            <button class="for">
              <img class="forPic" :src="descriptionData.image" alt="">
            </button>
        </figure>
    </section>
</template>

<script>

import $ from 'jquery';
export default{
  name:'DescriptionLeft',
  props:{
      descriptionData:{}
  },
  mounted: function() {
    $('.frs').click(function(){
      $('#mainPic').removeClass('secPic thdPic forPic');
    })
    $('.sec').click(function(){
      $('#mainPic').removeClass('thdPic forPic');
      $('#mainPic').addClass('secPic');
    })
    $('.thd').click(function(){
      $('#mainPic').removeClass('secPic forPic');
      $('#mainPic').addClass('thdPic');
    })
    $('.for').click(function(){
      $('#mainPic').removeClass('secPic thdPic');
      $('#mainPic').addClass('forPic');
    })
  }
}

</script>