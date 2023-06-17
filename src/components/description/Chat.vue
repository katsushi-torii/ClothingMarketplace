<template>
    <article>
        <Question/>
        <Answer/>
    </article>
</template>

<script>
import Question from './Question.vue';
import Answer from './Answer.vue';

export default{
    name:'ChatSection',
    components:{
        Question,
        Answer
    }
}
</script>