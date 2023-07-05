<template>
    <select name="size" id="size" v-model="size" @change="$emit('input',size)">
        <option value="all" selected>ALL</option>
        <option v-for="opt in opts" :key="opt" :value="opt">{{ opt }}</option>
    </select>
</template>

<script>
export default{
    name:'SizeSelect',
     props:{
        opts:[]
    }
}
</script>
