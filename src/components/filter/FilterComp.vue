<template>
    <form action="#">
        <input type="text" name="name" id="name" placeholder="Search by name">
        <brand-select />
        <size-select />
        <color-select />
        <gender-select />
        <price-select />
        <type-select />
        <subTypeSelect/>
        <button type="submit">Filter</button>
    </form>
</template>

<script>
import BrandSelect from '../filter/SelectBrand.vue'
import SizeSelect from '../filter/SelectSize.vue'
import ColorSelect from '../filter/SelectColor.vue'
import GenderSelect from '../filter/SelectGender.vue'
import PriceSelect from '../filter/SelectPrice.vue'
import TypeSelect from '../filter/SelectType.vue'
import SubTypeSelect from '../filter/SelectSubType.vue'

export default{
    name:'FilterComp',
    components:{
        BrandSelect,
        SizeSelect,
        ColorSelect,
        GenderSelect,
        PriceSelect,
        TypeSelect,
        SubTypeSelect
    }
}
</script>
