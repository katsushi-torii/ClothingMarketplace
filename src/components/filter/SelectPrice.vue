<template>
    <select name="price" id="price" v-model="price" @change="$emit('input',price)">
        <option value="all" selected>Select Price</option>
        <option value="0_100">$0 to 100</option>
        <option value="101_200">$101 to 200</option>
        <option value="201_300">$201 to 300</option>
        <option value="301_400">$301 to 400</option>
    </select>
</template>

<script>
export default{
    name:'PriceSelect'
}
</script>
