

<div class="container login-cont">
  

<form method="post">
  <h1 class="fw-bold ln-head">Let's Start something deferent! </h1>
  <h3 class="p-1 text-primary">Welcome back!</h3>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="Email_Name" required  class="form-control p-2" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">I'll assist you to buy currency </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="Password_Name" class="form-control p-2" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Save info</label>
  </div>
  <div class="mb-3 d-flex ac">
    <button class="btn btn-outline-danger">
      
      <i class="fa fa-google">
      </i>
    </button>
    
     <button class="btn btn-outline-secondary">
      
      <i class="fa fa-github ">
      </i>
    </button> <button class="btn btn-outline-primary">
      
      <i class="fa fa-linkedin">
      </i>
    </button>
    
  </div>
  <!-- alert started -->
  <div style=" display:<?php if(isset($Login_info)) { echo "block";}else{echo "none";} ?>" class="bg-danger  p-2 text-white m-2 rounded text-center alert-data fw-bold">
    <?php if(isset($Login_info)){echo $Login_info;} ?>
  </div>

    <!-- alert end -->
  <div class="mb-3 d-grid gap-2">
    <button type="submit" name="login_user" class="btn btn-primary p-2 pw-bold submit">Login</button>
  </div>

</form>

<div class="p-3 mobile ">
  Don't have Account? <button class="btn text-info"><a href="Registration.php">Create Account</a></button>
</div>
</div>
