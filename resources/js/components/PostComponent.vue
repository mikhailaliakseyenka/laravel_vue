<template>
    <div>
        <SinglePostComponent></SinglePostComponent>
        <div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Job</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="person in persons">
                    <th scope="row">{{ person.id }}</th>
                    <td>{{ person.name }}</td>
                    <td>{{ person.age }}</td>
                    <td>{{ person.job }}</td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>
</template>

<script>
import SinglePostComponent from "./SinglePostComponent.vue";

export default {
    name: 'PostComponent',

    data() {
        return {

            persons: [
                {
                    id: 1,
                    name: 'Vasya',
                    age: 20,
                    job: 'coach',
                },
                {
                    id: 2,
                    name: 'Ilya',
                    age: 23,
                    job: 'QI',
                },
                {
                    id: 3,
                    name: 'Miha',
                    age: 32,
                    job: 'Programer',
                }
            ],
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
