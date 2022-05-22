<template>
    <div class="row justify-content-md-center">
        <div class="card col-md-5">
            <div class="card-body">
                <h5 class="card-title">Register</h5>
                <div class="alert alert-danger" v-if="errMsg" role="alert">
                    {{errMsg}}
                </div>
                <div class="mb-3">
                    <label for="exampleInputFirstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="exampleInputFirstName" aria-describedby="firstName"
                        v-model="firstname">
                </div>
                <div class="mb-3">
                    <label for="exampleInputLastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="exampleInputLastName" aria-describedby="lastName"
                        v-model="lastname">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPhonenumber" class="form-label">Phonenumber</label>
                    <input type="tel" class="form-control" id="exampleInputPhonenumber" aria-describedby="phonenumberHelp"
                        v-model="phonenumber">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" v-model="password">
                </div>
                <div class="mb-3">
                    <button type="submit" :disabled="isLoading" class="btn btn-primary" @click="register">Submit</button>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import "bootstrap/dist/css/bootstrap.min.css"
import "bootstrap"

export default {
  mounted() {
    
  },
  data (){
    return {
      firstname: null,
      lastname: null,
      phonenumber: null,
      password: null,
      errMsg: null,
      isLoading: false,
    }
  },
  setup() {
    
  },
  methods: {
    register: function(){
      console.log("login");
      if(!this.firstname){
          this.errMsg = "Please put your first name";
      }else if(!this.lastname){
          this.errMsg = "Please put your second name";
      }else if(!this.phonenumber){
        this.errMsg = "Please put  your phonenumber";
      }else if(!this.password){
        this.errMsg = "Please put a password";
      }else{
        //console.log("peform login");
        alert("Register Successful");
      }
    }
  }
}
</script>
<style>

</style>
