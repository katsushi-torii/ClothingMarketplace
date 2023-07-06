<template>
    <select name="price" id="price" v-model="price" @change="$emit('input',price)">
        <option value="all" selected>ALL</option>
        <option value="0_50">...$50</option>
        <option value="51_100">$51 to 100</option>
        <option value="101_150">$101 to 150</option>
        <option value="151_200">$151 to 200</option>
        <option value="201_99999999">$200...</option>
    </select>
</template>

<script>
export default{
    name:'PriceSelect'
}
</script>
