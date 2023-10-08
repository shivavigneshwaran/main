<template>
  <div class="container">
    <h1>Employees Table</h1>
    <employee-form @add:employee="addEmployee" />
    <employee-table :employees="employees" @delete:employee="deleteEmployee" @edit:employee="editEmployee" />
  </div>
</template>

<script>
import EmployeeTable from './components/EmployeeTable.vue'
import EmployeeForm from './components/EmployeeForm.vue'


export default {
  name: 'App',
  components: {
    EmployeeTable,
    EmployeeForm,
  },
  data() {
    return {
      employees: []
    }
  },
  methods: {
    async addEmployee(employee) {
      try {
        const response = await fetch('http://127.0.0.1:8000/api/employeedetails', {
          method: 'post',
          body: JSON.stringify(employee),
          headers: { 
            'Content-type': 'application/json; charset=UTF-8',
          }
        })
        const fetchData = await response.json();
      console.log('fetchData',fetchData.postdata);
          this.employees = [...this.employees,fetchData.postdata];
      } catch (error) {
        console.log(error)
      }



    },
    deleteEmployee(empid) {
      this.employees = this.employees.filter((employee) => {
        return employee.id !== empid;
      });
    },
    editEmployee(id, updatedEmployee) {
      this.employees.map((employee) => {
        return employee.id == id ? updatedEmployee : employee;

      });
    },
    async getEmployees() {
      try {
        const response = await fetch('http://127.0.0.1:8000/api/employeedetails', { method: 'Get' });
        const data = await response.json();
        this.employees = data.data;
      } catch (err) {
        console.log(err);
      }
    }
  },
  mounted() {
    this.getEmployees();
  }
}
</script>


