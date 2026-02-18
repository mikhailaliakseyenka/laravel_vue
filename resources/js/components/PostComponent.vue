<template>
    <div>
        <SinglePostComponent></SinglePostComponent>
        <div>Name: {{name}}</div>

    </div>
</template>

<script>
import SinglePostComponent from "./SinglePostComponent.vue";

export default {
    name: 'PostComponent',

    data() {
        return {
            name: 'Vasya',
            age: 20,
            boolean: false,
            sameNull: null,
            arr: [1,
                [
                    3,
                ]
            ],
            someObj: {
                person: 'Ivan'
            },

        }
    },

    components: {
        SinglePostComponent
    }

}

</script>


<style scoped>

</style>
