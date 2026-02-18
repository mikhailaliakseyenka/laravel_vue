<template>
    <div>
        <SinglePostComponent></SinglePostComponent>
        <div>Name: {{name}}</div>
        <div>Job: {{vasyaJob}}</div>
        <div>Job: {{job}}</div>
        <button @click="sayHello">Hello</button>
        <button @click="sayHi">Hi</button>

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
            job: this.name +' работает в булочной',
        }
    },

    methods: {
        sayHello() {
            console.log('Hello');
        },
        sayHi() {
            console.log('Hi');
        },
    },

    computed: {
        vasyaJob() {
            return this.name + ' работает в булочной'
        },

    },

    components: {
        SinglePostComponent
    }

}

</script>


<style scoped>

</style>
