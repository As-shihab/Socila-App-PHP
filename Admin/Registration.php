


<?php
session_start();
include('Deshbord/Core/Config.php');
if(isset($_POST['create_user'])){
$Login_info= $Objects->Add_User($_POST);
$link="location:index.php";
header($link);
}

if(isset($_SESSION['UserId'])){
  
  header('location:/Admin/Deshbord');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="Admin.css"/>
<link rel="stylesheet" href="Auth_media.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
 
<div class="blur-content">


</div>

<div class="box-container">
<div class="desktop" style=" display:<?php if(isset($Login_info)) { echo "block";}else{echo "none";} ?>">
    <h1>    <?php if(isset($Login_info)){echo $Login_info;} ?></h1>

    <a href="index.php">
        <button class="btn btn-outline-primary">Login</button>
    </a>
</div>

<div class="mobile-container">

<div class="container login-cont">
  

<form method="post">
  <h1 class="fw-bold ln-head">Bring the world, Closer Togather!</h1>
  <h3 class="p-1 text-primary">Create account</h3>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Full Name</label>
    <input type="text" name="Full_Name" class="form-control p-2" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" required name="Email_Name"  class="form-control p-2" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">I'll assist you to buy currency </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" required name="Password_name" class="form-control p-2" id="exampleInputPassword1">
  </div>
<!-- ac started -->
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

  <!-- ac end -->

  <div style=" display:<?php if(isset($Login_info)) { echo "block";}else{echo "none";} ?>" class="bg-info  p-2 text-white m-2 rounded text-center alert-data fw-bold">
    <?php if(isset($Login_info)){echo $Login_info;} ?>
  </div>
  <div class="mb-3 d-grid gap-2">
    <button type="submit" name="create_user" class="btn btn-primary p-2 pw-bold submit"> 
    
Create Account
    </button>
  </div>
  
</form>

<div class="p-3 mobile">
  Already have Account? <button class="btn text-info"><a href="index.php">LogIn</a></button>
</div>
</div>


</div>
         </div>

</body>
</html>


<?php
session_start();
include('Deshbord/Core/Config.php');
if(isset($_POST['create_user'])){
$Login_info= $Objects->Add_User($_POST);
$link="location:index.php";
header($link);
}

if(isset($_SESSION['UserId'])){
  
  header('location:/Admin/Deshbord');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="Admin.css"/>
<link rel="stylesheet" href="Auth_media.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
 
<div class="blur-content">


</div>

<div class="box-container">
<div class="desktop" style=" display:<?php if(isset($Login_info)) { echo "block";}else{echo "none";} ?>">
    <h1>    <?php if(isset($Login_info)){echo $Login_info;} ?></h1>

    <a href="index.php">
        <button class="btn btn-outline-primary">Login</button>
    </a>
</div>

<div class="mobile-container">

<div class="container login-cont">
  

<form method="post">
  <h1 class="fw-bold ln-head">Bring the world, Closer Togather!</h1>
  <h3 class="p-1 text-primary">Create account</h3>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Full Name</label>
    <input type="text" name="Full_Name" class="form-control p-2" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" required name="Email_Name"  class="form-control p-2" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">I'll assist you to buy currency </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" required name="Password_name" class="form-control p-2" id="exampleInputPassword1">
  </div>
<!-- ac started -->
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

  <!-- ac end -->

  <div style=" display:<?php if(isset($Login_info)) { echo "block";}else{echo "none";} ?>" class="bg-info  p-2 text-white m-2 rounded text-center alert-data fw-bold">
    <?php if(isset($Login_info)){echo $Login_info;} ?>
  </div>
  <div class="mb-3 d-grid gap-2">
    <button type="submit" name="create_user" class="btn btn-primary p-2 pw-bold submit"> 
    
Create Account
    </button>
  </div>
  
</form>

<div class="p-3 mobile">
  Already have Account? <button class="btn text-info"><a href="index.php">LogIn</a></button>
</div>
</div>


</div>
         </div>

</body>
</html>


<?php
session_start();
include('Deshbord/Core/Config.php');
if(isset($_POST['create_user'])){
$Login_info= $Objects->Add_User($_POST);
$link="location:index.php";
header($link);
}

if(isset($_SESSION['UserId'])){
  
  header('location:/Admin/Deshbord');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="Admin.css"/>
<link rel="stylesheet" href="Auth_media.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
 
<div class="blur-content">


</div>

<div class="box-container">
<div class="desktop" style=" display:<?php if(isset($Login_info)) { echo "block";}else{echo "none";} ?>">
    <h1>    <?php if(isset($Login_info)){echo $Login_info;} ?></h1>

    <a href="index.php">
        <button class="btn btn-outline-primary">Login</button>
    </a>
</div>

<div class="mobile-container">

<div class="container login-cont">
  

<form method="post">
  <h1 class="fw-bold ln-head">Bring the world, Closer Togather!</h1>
  <h3 class="p-1 text-primary">Create account</h3>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Full Name</label>
    <input type="text" name="Full_Name" class="form-control p-2" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" required name="Email_Name"  class="form-control p-2" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">I'll assist you to buy currency </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" required name="Password_name" class="form-control p-2" id="exampleInputPassword1">
  </div>
<!-- ac started -->
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

  <!-- ac end -->

  <div style=" display:<?php if(isset($Login_info)) { echo "block";}else{echo "none";} ?>" class="bg-info  p-2 text-white m-2 rounded text-center alert-data fw-bold">
    <?php if(isset($Login_info)){echo $Login_info;} ?>
  </div>
  <div class="mb-3 d-grid gap-2">
    <button type="submit" name="create_user" class="btn btn-primary p-2 pw-bold submit"> 
    
Create Account
    </button>
  </div>
  
</form>

<div class="p-3 mobile">
  Already have Account? <button class="btn text-info"><a href="index.php">LogIn</a></button>
</div>
</div>


</div>
         </div>

</body>
</html>