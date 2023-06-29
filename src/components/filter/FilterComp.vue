<template>
    <form action="#" v-on:submit.prevent="$emit()">
        <input type="text" name="name" id="name" placeholder="Search by name" v-model="filter.name">
        <size-select :opts="filterOpt.size" v-model="filter.size"/>
        <color-select :opts="filterOpt.baseColor" v-model="filter.color"/>
        <gender-select :opts="filterOpt.gender" v-model="filter.gender"/>
        <price-select v-model="filter.price"/>
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
                color: '',
                size: '',
                name: '',
                gender: '',
                price: '',
                type: ''
            }
        }
    },
    methods:{
        async getFilterOpt(){
            try{
                let result = await fetch(this.fitlerApi);
                this.filterOpt = await result.json();
                console.log(this.filterOpt)
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
