<template>
    <main class="desBody">
        <section class="description">
            <DescriptionLeft/>
            <DescriptionRight/>
        </section>
    </main>
</template>

<script>

import DescriptionLeft from '../description/DescriptionLeft.vue';
import DescriptionRight from '../description/DescriptionRight.vue';

export default{
    name:'DescriptionPage',
    components:{
    DescriptionLeft,
    DescriptionRight
}
}

</script>