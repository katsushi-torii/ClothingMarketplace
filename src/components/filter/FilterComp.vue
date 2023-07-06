<template>
    <form action="#" v-on:submit.prevent="$emit('filter',filter)">
        <input type="text" name="name" id="name" placeholder="Search by name" v-model="filter.name">
        <label for="size">Select Size</label>
        <size-select :opts="filterOpt.size" v-model="filter.size"/>
        <label for="color">Select Color</label>
        <color-select :opts="filterOpt.baseColor" v-model="filter.color"/>
        <label for="gender">Select Gender</label>
        <gender-select :opts="filterOpt.gender" v-model="filter.gender"/>
        <label for="price">Select Price</label>
        <price-select v-model="filter.price"/>
        <label for="type">Select Type</label>
        <type-select :opts="filterOpt.type" v-model="filter.type"/>
        <button type="submit">Filter</button>
    </form>
</template>

<script>
import SizeSelect from '../filter/SelectSize.vue'
import ColorSelect from '../filter/SelectColor.vue'
import GenderSelect from '../filter/SelectGender.vue'
import PriceSelect from '../filter/SelectPrice.vue'
import TypeSelect from '../filter/SelectType.vue'

export default{
    name:'FilterComp',
    components:{
        SizeSelect,
        ColorSelect,
        GenderSelect,
        PriceSelect,
        TypeSelect,
    },
    data(){
        return{
            fitlerApi:'http://localhost/karigui/rest-api/rest/api/v1/filter.php',
            filterOpt:[],
            filter:{
                color: 'all',
                size: 'all',
                name: '',
                gender: 'all',
                price: 'all',
                type: 'all'
            }
        }
    },
    methods:{
        async getFilterOpt(){
            try{
                let result = await fetch(this.fitlerApi);
                this.filterOpt = await result.json();
            }catch(error){
                console.log(error)
            }
        },
        getProductFilter(){
            console.log(this.filter);
            // console.log('howdy');
        }
    },
    created(){
        this.getFilterOpt()
    }
}
</script>
