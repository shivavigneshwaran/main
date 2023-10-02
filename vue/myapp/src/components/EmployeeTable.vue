<template>
    <div id="employee-table">
        <p v-if="employees.length < 1" class="text-center">No Employee Details</p>
        <table class="table" v-else>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="employee in employees" :key="employee.id">
                    <th scope="row">{{ employee.id }}</th>
                    <td v-if="editing == employee.id">
                        <input type="text" v-model="employee.name" />
                    </td>
                    <td v-else>
                        {{ employee.name }}
                    </td>
                    <td v-if="editing == employee.id">
                        <input type="text" v-model="employee.last" />
                    </td>
                    <td v-else>
                        {{ employee.last }}
                    </td>
                    <td v-if="editing == employee.id">
                        <input type="text" v-model="employee.email" />
                    </td>
                    <td v-else>{{ employee.email }}</td>
                    <td v-if="editing == employee.id">
                        <button class="btn btn-success" @click="editForm(employee)">Save</button>
                        <button class="btn btn-danger" @click="editing = null">Cancel</button>

                    </td>
                    <td v-else>
                        <button class="btn btn-success" @click="editMode(employee)">Edit</button>
                        <button class="btn btn-danger" @click="$emit('delete:employee', employee.id)">Delete</button>

                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>

export default {
    name: 'employee-table',
    props: {
        employees: Array
    },
    data(){ 
        return {
            editing:null,
        }

    },
    methods: {
        editMode(employee) {
            this.editing = employee.id;
            console.log(employee);

        },
        editForm(employee){
            console.log(employee);

        }
    }

}
</script>
<style scoped>
button {
    margin: 0 0.5rem 0 0;
}
</style>