<template>
    <select name="color" id="color" v-model="color" @change="$emit('input',color)">
        <option value="all" selected>Select Color</option>
        <option v-for="opt in opts" :key="opt" :value="opt">{{ opt }}</option>
    </select>
</template>

<script>
export default{
    name:'ColorSelect',
    props:{
        opts:[],
    }
}
</script>
