<template>
  <div class="row justify-content-md-center">
    <div class="card col-md-5">
      <div class="card-body">
        <h5 class="card-title">Login</h5>

        <div class="mb-3">
          <div class="alert alert-danger" v-if="errMsg" role="alert">
            {{ errMsg }}
          </div>
        </div>
        
        <div class="mb-3">
          <label for="exampleInputPhonenumber" class="form-label"
            >Phonenumber</label
          >
          <input
            type="tel"
            class="form-control"
            id="exampleInputPhonenumber"
            aria-describedby="phonenumberHelp"
            v-model="phonenumber"
          />
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input
            type="password"
            class="form-control"
            id="exampleInputPassword1"
            v-model="password"
          />
        </div>
        <div class="mb-3">
          <button
            type="submit"
            :disabled="isLoading"
            class="btn btn-primary"
            @click="login"
          >
            Login
          </button>
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
      phonenumber: null,
      password: null,
      errMsg: null,
      isLoading: false,
    }
  },
  setup() {
    
  },
  methods: {
    login: function(){
      console.log("login");
      if(!this.phonenumber){
        this.errMsg = "Please put a phonenumber";
      }else if(!this.password){
        this.errMsg = "Please put a password";
      }else{
        //console.log("peform login");
        alert("Login Successful");
      }
    }
  }
}
</script>
<style>

</style>
