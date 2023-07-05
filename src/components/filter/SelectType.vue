<template>
    <select name="type" id="type" v-model="type" @change="$emit('input',type)">
        <option value="all" selected>ALL</option>
        <option v-for="opt in opts" :key="opt" :value="opt">{{ opt }}</option>
    </select>
</template>

<script>
export default{
    name:'TypeSelect',
     props:{
        opts:[]
    }
}
</script>
