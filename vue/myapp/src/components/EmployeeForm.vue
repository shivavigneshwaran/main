<template>
    <div id="employee-form">
        <form v-on:submit.prevent="handlesubmit" >
            <div class="row mb-3">
                <label for="first_name" class="col-sm-2 col-form-label">First</label>
                <div class="col-sm-10">
                    <input type="text" 
                    class="form-control" 
                    id="first_name" 
                    v-model="employee.name" :class="{'form-control is-invalid':submitting && invalidName}"
                    @focus="clearStatus"
                    @keypress = "clearStatus"
                    >
                </div>
            </div>
            <div class="row mb-3">
                <label for="last_name" class="col-sm-2 col-form-label">Last</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="last_name" v-model="employee.last" :class="{'form-control is-invalid':submitting && invalidLast}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="email3" class="col-sm-2 col-form-label">E-mail</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email3" v-model="employee.email" :class="{'form-control is-invalid':submitting && invalidEmail}">
                </div>
            </div>
            <p>Please Fill</p>
            <p></p>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</template>
<script>
export default {
    name:'employee-form',
    data(){
        return {
            submitting : false,
            success : false,
            error : false,
            employee:{
                name:'',
                last:'',
                email:''
            }
        }
    },
    methods:{
        handlesubmit(){
            this.submitting = true;
            this.clearStatus();
            if(this.invalidName || this.invalidLast || this.invalidEmail){
                this.error = true;
                return;
            }
            this.$emit('add:employee', this.employee);
           this.employee = {
            name:'',
            last:'',
            email:''
           }
           this.success = true;
           this.error = false;
           this.submitting = false;
        },
        clearStatus(){
            this.success = false;
            this.error = false;
           
            
        }
    },
    computed:{
        invalidName(){
            return this.employee.name === '';
        },
        invalidLast(){
            return this.employee.last === '';
        },
        invalidEmail(){
            return this.employee.email === '';
        }
    }
}
</script>