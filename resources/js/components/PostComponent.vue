<template>
    <div>
        <CreateComponent></CreateComponent>
        <SinglePostComponent></SinglePostComponent>
        <IndexComponent></IndexComponent>
        <div>
<!--            <table class="table">-->
<!--                <thead>-->
<!--                <tr>-->
<!--                    <th scope="col">id</th>-->
<!--                    <th scope="col">Name</th>-->
<!--                    <th scope="col">Age</th>-->
<!--                    <th scope="col">Job</th>-->
<!--                </tr>-->
<!--                </thead>-->
<!--                <tbody>-->
<!--                <tr v-for="person in persons">-->
<!--                    <th scope="row">{{ person.id }}</th>-->
<!--                    <td>{{ person.name }}</td>-->
<!--                    <td>{{ person.age }}</td>-->
<!--                    <td>{{ person.job }}</td>-->
<!--                </tr>-->
<!--                </tbody>-->
<!--            </table>-->
        </div>

    </div>
</template>

<script>
import SinglePostComponent from "./SinglePostComponent.vue";
import CreateComponent from "./CreateComponent.vue";
import IndexComponent from "./IndexComponent.vue";

export default {
    name: 'PostComponent',

    data() {
        return {
            persons: null
        }
    },

    mounted() {
    },

    methods: {

    },


    components: {
        SinglePostComponent,
        CreateComponent,
        IndexComponent,
    }

}

</script>


<style scoped>

</style>
