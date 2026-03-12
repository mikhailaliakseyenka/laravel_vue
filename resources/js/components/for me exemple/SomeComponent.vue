<template>
    <div>
        <div>Color: {{obj.color}}</div>
        <div>Number: {{obj.number > 10 ? 'more 10' : 'les 10'}}</div>
        <div>Is published: {{obj.isPublished ? 'Published' : 'Not published'}}</div>
    </div>
</template>

<script>

export default {

    data() {
        return {}
    },

    props: [
        'obj'
    ],

    mounted() {
        this.$parent.$parent.parentLog();
    },

    methods: {},
}


</script>


<style scoped>

</style>
