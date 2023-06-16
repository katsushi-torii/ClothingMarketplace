<template>
    <form action="#">
        <input type="text" name="name" id="name">
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
import BrandSelect from './SelectBrand.vue'
import SizeSelect from './SelectSize.vue'
import ColorSelect from './SelectColor.vue'
import GenderSelect from './SelectGender.vue'
import PriceSelect from './SelectPrice.vue'
import TypeSelect from './SelectType.vue'
import SubTypeSelect from './SelectSubType.vue'

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
