<?php 

include('includes/header.php');

?> 
<link rel="stylesheet" href="style.css">



<nav class="navbar navbar-expand-md navbar-light bg-white sticky-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="assets/logo1.png" style="width: 225px; height: 66px;" alt="Fresh Pages" >
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="SingupPage.php">Sign up</a>
        </li>
        <li class="nav-item">
         <a class="nav-link" href="loginPage.php" >Log in</a>
        </li>
      </ul>
    </div>
  </div>
</nav>







<div class="" style="width: 70%; margin: 7% auto 2% 44%;">
<h3 style="margin-left: 19%; font-weight: bold; font-family: 'Quicksand';">Sign up Now !</h3>

<form action="signup.php" method="POST" class="signupform" id="signupform">

<!-- Name Adress input -->
<div class="row mb-4">

<div class="inputsignup col-md-3">
<div class="formvalid">
              <input type="text" name="name"
                placeholder="Firstname" id="name" class="form-control signupInputs mt-1">
             
</div>
</div>

<div class="inputsignup col-md-4">
<div class="formvalid">
              <input type="text" name="adresse"
                placeholder="adresse" id="adresse" class="form-control signupInputs">
              
</div>
</div>

</div>


<!-- Email CIn input -->
<div class="row mb-3">

<div class="inputsignup col-md-4">

<div class="formvalid">
              <input type="text" name="email"
                placeholder="email" id="email" class="form-control signupInputs">
             
</div>
</div>



<div class="inputsignup col-md-3">
<div class="formvalid">
              <input type="number" name="phone"
                placeholder="phone number" id="phone" class="form-control signupInputs">
             
</div>
</div>

</div>



<!-- CIN birth_date  input -->
<div class="row mb-3">

<div class="inputsignup col-md-4">

<div class="formvalid">
              <input type="text" name="cin"
                placeholder="cin" id="cin" class="form-control signupInputs mt-4">
             
</div>
</div>

<div class="inputsignup col-md-3">

<div class="formvalid">
  <label for="">La date de naissance</label>
              <input type="date" name="birth_date"
                placeholder="birth date" id="birth_date" class="form-control signupInputs">
             
</div>
</div>

</div>

<div class="row mb-4">

<div class="inputsignup col-md-4">
<div class="formvalid">

          <select  name="type" class="form-control" style="height: 45px; border: 2px solid #dddfe2; margin-top: 4%;"  >
          <option  value="">-- choisirez vous etat --</option>
            <option value="Etudiant">Etudiant</option>
            <option value="Fonctionnaire">Fonctionnaire</option>
            <option value="Employe">Employe</option>
            <option value="Femme au foyer">Femme au foyer</option>
          </select>
        
</div>
</div>


<!-- USERNAME PASSWORD input -->


<div class="inputsignup col-md-3">

<div class="formvalid">

              <input type="text" name="username"
                placeholder="username" id="username" class="form-control signupInputs mt-3">
             
</div>
</div>


</div>

       

<div class="row mb-3">

<div class="inputsignup col-md-3">

<div class="formvalid">
              <input type="password" name="pwd"
                placeholder="password" id="pwd" class="form-control signupInputs">
             
</div>
</div>


       
<!-- NAME input -->

<div class="inputsignup col-md-4">

<div class="formvalid">

              <input type="password" name="reapeat_pwd"
                placeholder="repeat password" id="reapeat_pwd" class="form-control signupInputs">
             
</div>
</div>
</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" id="openmodaldetails">
  <label class="form-check-label" for="openmodaldetails">
    agree to the our Privecy Policy
  </label>
</div>

       
<div class="row mb-3 signupbutton">
<button type="submit" class="btn btn-success"  name="signup">Sign Up</button>
<a href="loginPage.php"  class="btn btn-secondary">Don't have an acount sign up</a>

</div>




</form>
</div>


<?php 
include('includes/footer.php');

?> 








<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script>

$(document).ready(function() {
  $('#openmodaldetails').change(function() {
    if($(this).is(":checked")) {
      $('#exampleModal').modal('show');
    }
    else {
      $('#exampleModal').modal('hide');
    }
  });
});
</script>