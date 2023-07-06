<template>
    <span class="btnPage" @click="$emit('pageUpdate',this.number)">
        {{ this.number }}
    </span>
</template>

<script>
export default {
    name:'BtnPage',
    props:{
        number:[]
    }
}
</script>