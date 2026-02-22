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

            persons: null
        }
    },

    mounted() {
        this.getPersons();
    },

    methods: {
        getPersons: function () {
            axios.get('/persons')
                .then(res => {
                    this.persons = res.data;
                })
                .catch(err => {
                    console.log(err);
                })
                .finally({})
        }
    },


    components: {
        SinglePostComponent
    }

}

</script>


<style scoped>

</style>
