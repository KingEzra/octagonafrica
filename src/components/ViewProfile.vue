<template>
  <div class="row justify-content-md-center">
    <div class="card col-md-5">
      <div class="card-body">
        <h5 class="card-title">Login</h5>
        <div>
          <p>First Name: {{ firstname }}</p>
          <p>Last Name: {{ secondname }}</p>
          <p>Phone Number: {{ phonenumber }}</p>
        </div>
        <div></div>
        <div></div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data (){
    return {
      firstname: "King",
      secondname: "Ezra",
      phonenumber: "+256751728764"
    }
  }
}
</script>