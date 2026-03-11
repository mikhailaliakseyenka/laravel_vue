<template>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Job</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            <template v-for="person in people">
                <ShowComponent :person="person" :ref="`show_${person.id}`"></ShowComponent>
                <EditComponent :person="person" :ref="`edit_${person.id}`"></EditComponent>
            </template>
            </tbody>
        </table>
    </div>
</template>

<script>
import EditComponent from "./EditComponent.vue";
import ShowComponent from "./ShowComponent.vue";

export default {

    data() {
        return {
            people: null,
            editPerson: null,
            name: '',
            age: null,
            job: '',
        }
    },

    mounted() {
        this.getPeople();

    },

    components: {
        EditComponent,
        ShowComponent,
    },


    methods: {
        getPeople() {
            axios.get("/api/people")
                .then((res) => {
                    this.people = res.data;
                })
        },

        updatePerson(id) {
            this.editPerson = null;
            axios.patch(`/api/people/${id}`, {
                name: this.name,
                age: this.age,
                job: this.job,
            })
                .then(() => {
                    this.getPeople();
                })
                .catch((error) => {
                    console.log(error.response.data);
                })
        },

        deletePerson(id) {
            axios.delete(`/api/people/${id}`)

                .then(() => {
                    this.getPeople();
                })
                .catch((error) => {
                    console.log(error.response.data);
                })
        },

        changeEditPersonId(id, name, age, job) {
            this.editPerson = id;
            let editName = `edit_${id}`
            let fullEditName = this.$refs[editName][0]
            fullEditName.name = name;
            fullEditName.age = age;
            fullEditName.job = job;
        },

        isEdit(id) {
            return this.editPerson === id;
        },

        indexLog() {
            console.log('this is index component');
        }


    }
}


</script>


<style scoped>

</style>
