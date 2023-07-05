<template>
    <select name="gender" id="gender" v-model="gender" @change="$emit('input',gender)">
        <option value="all" selected>ALL</option>
        <option v-for="opt in opts" :key="opt" :value="opt">{{ opt }}</option>
    </select>
</template>

<script>
export default{
    name:'GenderSelect',
     props:{
        opts:[]
    },
}
</script>
