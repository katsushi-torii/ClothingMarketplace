<template>
    <section class="desLeft">
        <figure class="dSlideMain">
            <img src="https://i.pinimg.com/564x/1a/96/7c/1a967c2551c5b7ede76036759ac1ee89.jpg" alt="" id="mainPic">
        </figure>
        <figure class="dSlideSub">
            <button class="frs">
                <img src="https://i.pinimg.com/564x/1a/96/7c/1a967c2551c5b7ede76036759ac1ee89.jpg" alt="">
            </button>
            <button class="sec">
                <img class="secPic" src="https://i.pinimg.com/564x/1a/96/7c/1a967c2551c5b7ede76036759ac1ee89.jpg" alt="">
            </button>
            <button class="thd">
                <img class="thdPic" src="https://i.pinimg.com/564x/1a/96/7c/1a967c2551c5b7ede76036759ac1ee89.jpg" alt="">
            </button>
            <button class="for">
                <img class="forPic" src="https://i.pinimg.com/564x/1a/96/7c/1a967c2551c5b7ede76036759ac1ee89.jpg" alt="">
            </button>
        </figure>
    </section>
</template>

<script>

import $ from 'jquery';
export default{
    name:'DescriptionLeft',
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